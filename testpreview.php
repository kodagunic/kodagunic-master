<?php
    include "inc/header1.php";
    include "inc/nav1.php";
    require('inc/insTest.php');
    $obj = new insTest();

    if(isset($_POST['testsubmit']))
    {
        $ret_val = $obj->insTest();
        //$GLOBALS['ref'] = $GLOBALS['data'];
        if($ret_val==1)
        {
            //$ref = $_POST['refid'];
            echo '<script type="text/javascript">'; 
            echo 'alert("Record Saved Successfully with reference no:");';
            echo 'window.location.href = "try.php";';
            echo '</script>';
        }
    }   
?>

    <div class="container form-group">
        <form method="post">
            
            <div class="col-md-12 p-5 table-responsive">
                <h4 class="text-center">Test Form Preview</h4>
                <table class="table table-bordered text-nowrap">
                    <tr>
                        <td width="10%">Name:</td>
                        <td>
                            <?php echo $_POST['testname']; ?>
                            <input type="hidden" name="testname" value="<?php echo $_POST['testname']; ?>">
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
                </table>

            </div>
            <div align="center">
                <a href="test.php" class="btn btn-danger"><-- BACK to TEST FORM</a>
                <button type="submit" class="btn btn-primary" name="testsubmit">SUBMIT</button>           
            </div>
        </form>
    </div>

<?php
    include "inc/footer.php";
    include "inc/script1.php";
?>