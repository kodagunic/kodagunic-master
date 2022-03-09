<?php
    include "../inc/header1.php";
    include "../inc/nav1.php";
    include "getdistrict.php";
    $newObj = new District();
    $dists = $newObj->getDistricts();
?>

<div>
    <table class="table">
    <thead>
      <tr class="active">
            <th>S No.</th>  
            <th >District Code</th>       
            <th>District Name(in English)</th>
            <th>District Name(in Kannada)</th>
            <th>State Code</th>
            <th>Short Name of District</th>
            <th>Census 2001 Code</th>
            <th>Census 2011 Code</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($dists as $key => $dist) :?>
      <tr align="left">
        <td><?php echo $dist['sno'] ?></td>
        <td><?php echo $dist['district_code'] ?></td>
        <td><?php echo $dist['district_name_eng'] ?></td>
        <td><?php echo $dist['district_name_kan'] ?></td>
        <td><?php echo $dist['state_code'] ?></td>
        <td><?php echo $dist['short_name_district'] ?></td>
        <td><?php echo $dist['district_census_2001_code'] ?></td>
        <td><?php echo $dist['district_census_2011_code'] ?></td>
      </tr> 
      <?php endforeach;?> 
    </tbody>
  </table>
</div>

<?php
  include "../inc/footer.php";
  include "../inc/script1.php";
?>