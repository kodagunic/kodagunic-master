<?php
include "inc/conn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $em = htmlspecialchars($_REQUEST['email']);
    $checkemail = "select * from test where email = '$em'";
    $checkemailresult = pg_query($db1,$checkemail);
    $numr = pg_num_rows($checkemailresult);
    if($numr>0)
    { 
        echo "email already exists";
    }
}
?>