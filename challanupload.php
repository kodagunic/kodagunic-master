<?php
    include "inc/header1.php";
    include "inc/nav1.php";
    include "district/getdistrict.php";
?>
    <div class="container">
        <p align="center"><strong>Fill the Challan Details</strong></p>
        <p align="left">Challan Image should be (.JPG or .JPEG) format only</p>
        <p align="left">All fields are mandatory</p>
        <div class="form-group">
                <form class="w-sm-50 w-auto mx-auto" name="" method="get" action="">
                    <div class="form-group">
                        <label for="reference" class="form-label">Reference No</label>
                        <input type="text" class="form-control" id="reference">       
                    </div>
                    <div class="form-group">
                        <label for="dob" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" id="dob"></input>
                    </div>
                    <div class="form-group">
                        <label for="bankdistrict" class="form-label">Bank District</label>
                        <select>
                            <option>Select Bank District</option>
                            <?php 
                                $newObj = new District();
                                $dists = $newObj->getDistricts();
                                foreach($dists as $key => $dist) :
                            ?>
                            <option value="<?php echo $dist['district_code']?>">
                                <?php echo $dist['district_name_eng'] ?> / <?php echo $dist['district_name_kan'] ?>
                            </option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bankname" class="form-label">Bank Name</label>
                        <select>
                            <option>Select Bank</option>
                            <option>CORPORATION BANK</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brachname" class="form-label">Branch Name</label>
                        <input type="text" class="form-control" id="branchname">       
                    </div>
                    <div class="form-group">
                        <label for="challanno" class="form-label">Challan Number</label>
                        <input type="text" class="form-control" id="challanno">       
                    </div>
                    <div class="form-group">
                        <label for="challandate" class="form-label">Challan Date</label>
                        <input type="date" class="form-control" id="challandate"></input>
                    </div>
                    <div class="form-group">
                        <label for="challanamt" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="challanamt">       
                    </div>
                    <div>
                        <label for="challan" class="form-label">Upload Challan Copy</label>
                        <input class="form-control" type="file" id="challan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">CANCEL</button>
                    <!--<span class="loginMsg"><?php //echo @$msg;?></span> -->
                </form>
            </div>
    </div>

<?php
include "inc/footer.php";
include "inc/script1.php";
?>