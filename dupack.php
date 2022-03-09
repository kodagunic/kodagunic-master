<?php
include "inc/header1.php";
include "inc/nav1.php";?>

    <div class="container">
        <div class="form-group">
                <form class="w-sm-50 w-auto mx-auto" name="" method="get" action="">
                    <div class="form-group">
                        <label for="reference" class="form-label">Reference No</label>
                        <input type="number" class="form-control" id="reference">       
                    </div>
                    <div class="form-group">
                        <label for="date" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" id="date"></input> 
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                    <button type="reset" class="btn btn-danger">CANCEL</button>
                    <span class="loginMsg"><?php echo @$msg;?></span>
                </form>
            </div>
    </div>

<?php
include "inc/footer.php";
include "inc/script1.php";
?>