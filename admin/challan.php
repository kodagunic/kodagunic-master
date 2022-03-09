<?php
	require_once('inc/logcheck.php');
	include "inc/header.php";
	include "inc/sidebar.php";
	include "inc/nav.php";
?>
<div class="container">
        <form>

            <p><b>Please select</b></p>
            <input class="form-check-input" type="radio"  id="received" name="check" value="REC">
            <label class="form-check-label" for="received">Received only from Bank XML</label>

            <input class="form-check-input" type="radio" id="receivedChallan" name="check" value="RC">
            <label class="form-check-label" for="receivedChallan">Received only from Challan Entry Option but not from Bank XML</label>

            <input class="form-check-input" type="radio"  id="both" name="check" value="BR">
            <label class="form-check-label" for="both">Both Recieved</label>

            <input class="form-check-input" type="radio" id="notBoth" name="check" value="NRB">
            <label class="form-check-label" for="notBoth">Not received both</label> <br> <br>

        </form>

        <div>
            <a type="button" class="btn btn-secondary" href="challan1.php">Click here</a>
        </div>

</div>
<?php 
	include "inc/footer.php"; 
?>