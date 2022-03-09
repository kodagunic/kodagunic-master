<?php
ob_start();
session_start();
// //echo $_SESSION['transaction'];
// if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {        
//     header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
//     die( header( 'location: test.php' ) );
// }

include "inc/header1.php";
include "inc/nav1.php";
include "inc/conn.php";

function uploadImage($id_,$name_,$mobile_,$email_,$district_)
{
$id=$id_;
$img_name=$id_;
$name=$name_;
$mobile=$mobile_;
$email=$email_;
$district=$district_;
$img_name=$id;

$uploaddir = '/Users/postgres/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
{   // echo "File is valid, and was successfully uploaded.\n";
}
else   {   echo "File size greater than 500kb!\n\n";   }


$conn = pg_pconnect("dbname=postgres user=postgres password=0192");
$query = "insert into test(refid,name,mobile,email,district_code,image,img_name) values ('$id','$name','$mobile','$email','$district',lo_import('$uploadfile'),'$img_name')";

$result = pg_query($query) ;
echo $result;
if($result)
{
    echo "Data Uploaded Succesfully\n";
    unlink($uploadfile);
}
else
{
    echo "Error Uploading Image";
    unlink($uploadfile);
}
pg_close($conn);
}

// if(isset($_SESSION['transaction']))
// {
if($_SESSION['transaction']=="No")
{
    header("location:index.php"); 
}
else{
if(isset($_POST['testsubmit']))
{
            
            $status = '';
            if ( isset($_POST['captcha']) && ($_POST['captcha']!="") ){
       
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
            $photo = $_POST['userfile'];
            //echo "photo-".$photo;

            $checkrefid = "select * from test ORDER BY refid DESC LIMIT 1";
            $checkresult = pg_query($db1,$checkrefid);
            $numrow = pg_num_rows($checkresult);
           // echo $photo;
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
                        uploadImage($id,$name,$mobile,$email,$district);
                        $_SESSION['_id']=$id;
                        $_SESSION['_name']=$name;
                        $_SESSION['_mobile']=$mobile;
                        $_SESSION['_email']=$email;
                        $_SESSION['_distrcit']=$district;
                        $_SESSION['_photo']=$photo;
                        
                        header("location:testResult.php");
                    }
            }
            }

            else{

                $id = "KDGVA2022000001";
                uploadImage($id,$name,$mobile,$email,$district);
                $_SESSION['_id']=$id;
                $_SESSION['_name']=$name;
                $_SESSION['_mobile']=$mobile;
                $_SESSION['_email']=$email;
                $_SESSION['_distrcit']=$district;
                $_SESSION['_photo']=$photo;
               
                header("location:testResult.php");
            }
        }
        }
    }
}
?>

<style>
    .image_placeholder{
        background: url('images/user1.png');
        width:120px;
        height:120px;
        
        border: none;
    }
</style>
<div class="container form-group">
    <form method="post" name="form" id="form" enctype="multipart/form-data" onsubmit="return validateForm()">

        <div class="col-md-12 p-5 table-responsive">
            <h4 class="text-center">Test Form Preview</h4>
            <table class="table table-bordered text-nowrap">
                <tr>
                    <td width="10%">Name:</td>
                    <td>
                        <?php echo $_POST['testname']; ?>
                        <input type="hidden" name="testname" value="<?php echo $_POST['testname']; ?>">
                    </td>
                    <td width="10%" height="10%" rowspan="6" alignment="center"> <img id="output" class="image_placeholder" alternate="No photo"/></td>
                </tr>
                <tr>
                    <td width="10%">Photo:</td>
                    <td>
                    <input name="userfile" type="file" id="imgfile" accept="image/png, image/jpg, image/jpeg" class="form-control" onchange="loadFile(event)"required>
                    <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
                    </td>
                    
                </tr>
                <tr>
                    <td width="10%">Mobile:</td>
                    <td>
                        <?php echo $_POST['testmobile']; ?>
                        <input type="hidden" name="testmobile" value="<?php echo $_POST['testmobile']; ?>">
                    </td>
                   
                </tr>
                <tr>
                    <td width="10%">Email address:</td>
                    <td>
                        <?php echo $_POST['testemail']; ?>
                        <input type="hidden" name="testemail" value="<?php echo $_POST['testemail']; ?>">
                    </td>
                   
                </tr>
                <tr>
                    <td width="10%">District:</td>
                    <td>
                        <?php echo $_POST['testdistrictddl']; ?>
                        <input type="hidden" name="testdistrictddl" value="<?php echo $_POST['testdistrictddl']; ?>">
                    </td>
                   
</tr>
                <tr>
                            <td colspan='2'>
                            <input type="text" name="captcha" id="captcha" placeholder="Captcha" class="form-control" required>
                <p><br />
                        <img src="captcha.php?rand=<?php echo rand(); ?>" id='captcha_image' width='180'>
                </p>
                <p>
                    <a href='javascript: refreshCaptcha();'>Refresh</a>
                </p>
                            </td>
                            
                        </tr>
            </table>

        </div>
        <div align="center">
            <a href="test.php" class="btn btn-danger">
                <-- BACK to TEST FORM</a>
                    <button type="submit" class="btn btn-success" name="testsubmit">SUBMIT</button>
        </div>
    </form>
</div>


<?php include "inc/footer.php"; ?>
<script>
//Refresh Captcha
function preventBack() {
    window.history.forward(); 
}
setTimeout("preventBack()", 0);
          
window.onunload = function () { null };


function validateForm() {
  let x = document.forms["form"]["captcha"].value;
  if (x == "") {
    alert("Please enter captcha..!");
    return false;
  }
}

function refreshCaptcha(){
    var img = document.images['captcha_image'];
    img.src = img.src.substring(
		0,img.src.lastIndexOf("?")
		)+"?rand="+Math.random()*1000;
}
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<?php include "inc/script1.php"; ?>
