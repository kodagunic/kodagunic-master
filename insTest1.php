<?php
    include "inc/header1.php";
    include "inc/nav1.php";
    include "inc/conn1.php";
    class insTest{
        function __construct() {

            $db = new dbObj();
            $connString =  $db->getConnstring();
            $this->conn = $connString;
        } 
    //$obj = new insTest();
    
            function insTest(){
                if(isset($_POST['testsubmit']))
                {

                $name = $_POST['testname'];
                $mobile = $_POST['testmobile'];
                $email = $_POST['testemail'];
                $district = $_POST['testdistrictddl'];
                
                $checkrefid = "select * from public.test ORDER BY refid DESC LIMIT 1";
                $checkresult = pg_query($this->conn,$checkrefid);
                $numrow = pg_num_rows($checkresult);
                if($numrow>0)
                {
                    if($row =pg_fetch_assoc($checkresult))
                    {
                        $uid = $row['refid'];
                        $get_numbers = str_replace("KDGVA","",$uid);
                        $id_increase = $get_numbers + 1;
                        $get_string = str_pad($id_increase,6,0,STR_PAD_LEFT);
                        $id = "KDGVA".$get_string;
                        $insert_test_qry = 
                            "insert into public.test(refid,name,mobile,email,district_code) 
                             values ('$id','$name','$mobile','$email','$district')
                             returning refid";
                        $result = pg_query($this->conn,$insert_test_qry);
                        //$data = pg_fetch_array($result);
                        return pg_affected_rows($result);                        
                        //return $data;
                        //if($result){ echo "entry added".'<br>'."Reference ID:".$id;}
                        //else{echo "error";}
                    }
                }
                
                else{
                    $id = "KDGVA000001";
                    $insert_test_qry = "insert into public.test(refid,name,mobile,email,district_code) values ('$id','$name','$mobile','$email','$district')";
                    $result = pg_query($this->conn,$insert_test_qry);
                    //$data = pg_fetch_all($result);
                    return pg_affected_rows($result);                        
                    //return $data;
                    //if($result){ echo "entry added".'<br>'."Reference ID:".$id;}
                    //else{echo "error";}                
                }
            }
        }    
    }
?>

<?php 
    $obj = new insTest(); 
    if($result){
?>
    <p>
        Success!!! <br>
        <?php echo "Reference ID:".$id; ?>
    </p>

<?php
    }
    else{echo "error";} 
    include "inc/footer.php";
    include "inc/script1.php";
?>