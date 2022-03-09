<?php
	require_once('inc/logcheck.php');
	include "inc/header.php";
	include "inc/sidebar.php";
	include "inc/nav.php";
?>
<div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Application No</th>
                    <th>Candidate Name</th>
                    <th>Mother Name</th>
                    <th>Father Name</th>
                    <th>DOB</th>
                    <th>Gender	</th>
                    <th>Mobile</th>
                    <th>Mail-ID</th>
                    <th>Exam Passed</th>
                    <th>View Challan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>135454</td>
                    <td>xxx</td>
                    <td>xyz</td>
                    <td>fajh</td>
                    <td>25/5/1997</td>
                    <td>M</td>
                    <td>8974123654</td>
                    <td>xxx@gmail.com</td>
                    <td>PUC</td>
                    <td><a hef="#">Click here</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>164131</td>
                    <td>abc</td>
                    <td>sfdjks</td>
                    <td>fsadfljklh</td>
                    <td>25/9/1999</td>
                    <td>M</td>
                    <td>8974123654</td>
                    <td>abc@gmail.com</td>
                    <td>PUC</td>
                    <td><a hef="#">Click here</a></td>
                </tr>
            </tbody>
        </table>

        <div>
            <a type="button" class="btn btn-secondary float-end" href="challan.php">Back to menu</a>
        </div>
</div>
<?php 
	include "inc/footer.php"; 
?>