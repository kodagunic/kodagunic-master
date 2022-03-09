<?php
	require_once('inc/logcheck.php');
	include "inc/header.php";
	include "inc/sidebar.php";
	include "inc/nav.php";
?>
<div class="container">
    <div>
        <p><strong>Click here to generate excel file</strong></p>
        <a class="btn btn-secondary" type="button" href="try.csv">Generate Excel file</a> 
</div>
   
<hr />
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Officer Name</th>
                    <th>Role</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>dckodagu</td>
                    <td>DC KODAGU</td>
                    <td>Admin</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>oprkodagu</td>
                    <td>xxx</td>
                    <td>Operator</td>
                    <td>Active</td>
                </tr>
            </tbody>
        </table>   
    
</div>
   
<?php 
	include "inc/footer.php"; 
?>