<?php
    include "inc/header1.php";
    include "inc/nav1.php";
?>
    <div class="row container-fluid">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="row card text-center">
                <strong>LOGIN</strong>
            </div>
            <div class="form-group">
                <form class="w-sm-50 w-auto mx-auto" name="login" method="post" action="login.php">
                    <div class="form-group">
                        <label for="username">User Name:</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter user name" name="loginuser" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="loginpass" required="required" />
                    </div>
                    <button type="submit" class="btn btn-primary" id="submitBtnLogin" name="submitBtnLogin">LOGIN</button>
                    <button type="reset" class="btn btn-danger">CANCEL</button>
                    <span class="loginMsg"><?php echo @$msg;?></span>
                </form>
            </div>
        </div>
        <div class="col-3">&nbsp;</div>
    </div>
<?php
    include "inc/footer.php";
    include "inc/script1.php";
?>