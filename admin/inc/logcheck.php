<?php 
session_start();
if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
  //echo '<h1>Welcome '.$_SESSION['sess_name'].'</h1>';
  //echo '<h4><a href="inc/logout.php">Logout</a></h4>';
} 
else { 
  //header('location: ../admin.php');
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('You are required to Login to access');
    window.location.href='https://localhost/nictemp/admin.php';
    </script>");
    exit();
  
}
?>