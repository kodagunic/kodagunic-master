<?php
session_start();
    //include "inc/header1.php";
    //include "inc/nav1.php";
    include "inc/conn.php";
    
    if(isset($_POST['testsubmit']))
        {
            echo "pic-".$_SESSION['userfile'];
            $status = '';
            if ( isset($_POST['captcha']) && ($_POST['captcha']!="") ){
            echo $_SESSION['captcha'];
            echo $_POST['captcha'];
            if(strcasecmp($_SESSION['captcha'], $_POST['captcha']) !=0){
                
                    //$ref = $_POST['refid'];
                    echo '<script type="text/javascript">'; 
                    echo 'alert("Incorrect Captcha..!");';
                    echo 'document.getElementById("captcha").focus();';
                    echo '</script>';
            }


          

            else{
       
            $name = $_POST['testname'];
            $mobile = $_POST['testmobile'];
            $email = $_POST['testemail'];
            $district = $_POST['testdistrictddl'];

            $checkrefid = "select * from test ORDER BY refid DESC LIMIT 1";
            $checkresult = pg_query($db1,$checkrefid);
            $numrow = pg_num_rows($checkresult);

            if($numrow>0)
            {
                if($row =pg_fetch_assoc($checkresult))
                {
                    $uid = $row['refid'];
                    $get_numbers = str_replace("KDGVA","",$uid);
                    $id_increase = $get_numbers + 1;
                    $id = "KDGVA".$id_increase;
                    $checkemail = "select * from test where email = '$email'";
                    $checkemailresult = pg_query($db1,$checkemail);
                    $numr = pg_num_rows($checkemailresult);
                    if($numr>0){
                        echo $email." already in DB";
                    } 
                    else {
                        $_SESSION['_id']=$id;
                        $_SESSION['_name']=$name;
                        $_SESSION['_mobile']=$mobile;
                        $_SESSION['_email']=$email;
                        $_SESSION['_distrcit']=$district;
                        echo "iff condition";
                        header("Location: try.php");
                    }
            }
            }

            else{

                $id = "KDGVA2022000001";
                $_SESSION['_id']=$id;
                $_SESSION['_name']=$name;
                $_SESSION['_mobile']=$mobile;
                $_SESSION['_email']=$email;
                $_SESSION['_distrcit']=$district;
                //echo "elsee condition";
                header('Location: ./try.php');
            }
        }
        }
    }


    // include "inc/footer.php";
    // include "inc/script1.php";
?>