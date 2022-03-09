<?php

$conn = pg_pconnect("dbname=postgres user=postgres password=0192");
$name = $_POST['name'];
$temp = '/Users/postgres/tmp.jpg';

$query = "select lo_export(image, '$temp') from test where img_name = 'KDGVA2022000001'";
$result = pg_query($query);
echo $name;
if($result)
{
    while ($line = pg_fetch_array($result))
    {
        $ctobj = $line["image"];
        echo "<IMG SRC=show.php>";
       // printf ("<br/>".$line["name"]." - ".$line["day"]." ");
    }

}
else { echo "File does not exists."; }
pg_close($conn);

?>