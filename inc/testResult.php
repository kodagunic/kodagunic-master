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
if($_SESSION['_id']!=''){
$insert_test_qry = "insert into test(refid,name,mobile,email,district_code) values ('$id','$name','$mobile','$email','$district')";
                    if($result = pg_query($db1,$insert_test_qry)){
                        echo "Data Inserted Successfully";
                       
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
                }
             else{echo "error";}}
             ?>
             <?php include "inc/footer.php"; ?>
<?php include "inc/script1.php"; ?>
