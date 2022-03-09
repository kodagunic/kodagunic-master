<?php
session_start();
include "inc/header1.php";
include "inc/nav1.php";
include "inc/conn.php";

$id=$_SESSION['_id'];
$name=$_SESSION['_name'];
$mobile=$_SESSION['_mobile'];
$email=$_SESSION['_email'];
$district=$_SESSION['_distrcit'];

$temp = '/Users/postgres/tmp.jpg';


    $select_test_qry = "select test.refid,test.name,test.mobile,test.email,district_karnataka.district_name_eng,district_karnataka.district_name_kan
                        from public.test
                        inner join public.district_karnataka on test.district_code=district_karnataka.district_code  where test.refid = '$id'";
    $r = pg_query($db1,$select_test_qry);
    ?>
                        <div class="col-md-12 p-5 table-responsive">
                            <h4 class="text-center">Test Form Submitted Values</h4>
                            <table class="table table-bordered text-nowrap">
                                <?php while($row=pg_fetch_assoc($r)){ ?>
                                <tr>
                                    <td width="10%">Reference ID:</td>
                                    <td><?php echo $row["refid"]; ?></td>
                                    <td rowspan="6" width='10%'>
                                    <?php
                                        $query = "select lo_export(image, '$temp') from test where img_name = '$id'";
                                        $result = pg_query($query);

                                        if($result)
                                        {
                                            while ($line = pg_fetch_array($result))
                                            {
                                                $ctobj = $line["image"];
                                                echo "<IMG SRC=ImageUpload/show.php width='120' height='120'>";
                                            
                                            }

                                        }
                                        else 
                                        { 
                                            echo "File does not exists."; 
                                        }

                                    ?>

                                    </td>
                                </tr>                    
                                <tr>
                                    <td width="10%">Name:</td>
                                    <td><?php echo $row["name"]; ?></td>
                                </tr>
                                <tr>
                                    <td width="10%">Mobile:</td>
                                    <td><?php echo $row["mobile"]; ?></td>
                                </tr>
                                <tr>
                                    <td width="10%">Email address:</td>
                                    <td><?php echo $row["email"]; ?></td>
                                </tr>
                                <tr>
                                    <td width="10%">District/ಜಿಲ್ಲೆ:</td>
                                    <td><?php echo $row["district_name_eng"]; ?>/<?php echo $row["district_name_kan"]; ?></td>
                                </tr>
                            </table>

                        </div>

                    <?php
                    }
        
             ?>
             <?php 
             
if(isset($_SESSION['transaction']))
{
   echo $_SESSION['transaction'];
   $_SESSION['transaction']="No";
   echo $_SESSION['transaction'];
}

             include "inc/footer.php"; ?>
<?php include "inc/script1.php"; ?>
