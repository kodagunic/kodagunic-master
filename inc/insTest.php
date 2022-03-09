<?php
    include "conn1.php";
    class insTest{
        function __construct() {

            $db = new dbObj();
            $connString =  $db->getConnstring();
            $this->conn = $connString;
}        
        function insTest(){

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
                    //$get_string = str_pad($id_increase,6,0,STR_PAD_LEFT);
                    //$id = "KDGVA".$get_string;
                    $id = "KDGVA".$id_increase;
                    $insert_test_qry = "insert into public.test(refid,name,mobile,email,district_code)
                    values ('$id','$name','$mobile','$email','$district')";
                    $select_test_qry = "select * from public.test where refid = '$id'";
                    return pg_affected_rows(pg_query($this->conn,$insert_test_qry));
                    $GLOBALS['data'] = pg_fetch_all($this->conn,$select_test_qry);
                    return $GLOBALS['data'];
                    //if($result){ echo "entry added".'<br>'."Reference ID:".$id;}
                    //else{echo "error";}
                }
            }
            
            else{
                $id = "KDGVA2022000001";
                $insert_test_qry = "insert into public.test(refid,name,mobile,email,district_code) 
                values ('$id','$name','$mobile','$email','$district')";
                $select_test_qry = "select * from public.test where refid = '$id'";
                return pg_affected_rows(pg_query($this->conn,$insert_test_qry));
                $data = pg_fetch_all($this->conn,$select_test_qry);
                return $data;
                //if($result){ echo "entry added".'<br>'."Reference ID:".$id;}
                //else{echo "error";}                
            }
        }
        
   }
?>
