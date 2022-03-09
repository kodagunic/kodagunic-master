<?php
	require_once('inc/logcheck.php');
	include "inc/header.php";
	include "inc/sidebar.php";
	include "inc/nav.php";
?>
<div class="container">

<h4 style="text-align:center">District : <strong>Kodagu</strong></h4>


<form>
    <p><b>Please select</b></p>
    <input class="form-check-input" type="radio"  id="notRejected" name="application" value="NR">
    <label class="form-check-label" for="notRejected">Not Rejected</label>
    <input class="form-check-input" type="radio" id="all" name="application" value="ALL">
    <label class="form-check-label" for="all">All</label><br> <br>

    <p><b>Please select</b></p>
    <input class="form-check-input" type="radio"  id="notMade" name="payment" value="NM">
    <label class="form-check-label" for="notMade">Payment Not Made</label>
    <input class="form-check-input" type="radio" id="lessThan" name="payment" value="LT">
    <label class="form-check-label" for="lessThan">Payment Amount Less Than</label>
    <input class="form-check-input" type="radio" id="notUploaded" name="payment" value="NT">
    <label class="form-check-label" for="notUploaded">Payment made and Challan not uploaded</label> <br> <br>

</form>


    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Ref No</th>
                <th>Candidate Name</th>
                <th>Mother Name</th>
                <th>Father Name</th>
                <th>DOB</th>
                <th>Mobile</th>
                <th>Mail-ID</th>
                <th>Exam Passed</th>
                <th>Payment</th>
                <th>Obt Marks</th>
                <th>Max marks</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>65484</td>
                <td>fgdhdfj</td>
                <td>tretijo</td>
                <td>slkejyklj</td>
                <td>15/10/1995</td>
                <td>8974123654</td>
                <td>xxx@gmail.com</td>
                <td>PUC</td>
                <td>NOTPAID</td>
                <td>412</td>
                 <td>600</td>
            </tr>
            <tr>
                <td>2</td>
                <td>545478</td>
                <td>sdafklk</td>
                <td>akfkf</td>
                <td>sgbhgfj</td>
                <td>19/12/1999</td>
                <td>8745213659</td>
                <td>bbc@gmail.com</td>
                <td>PUC</td>
                <td>NOTPAID</td>
                <td>512</td>
                <td>600</td>
            </tr>
        </tbody>
    </table>
</div>   
<?php 
	include "inc/footer.php"; 
?>