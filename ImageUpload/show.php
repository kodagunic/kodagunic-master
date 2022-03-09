<?php

header("Content-type: image/jpeg");
$jpeg = fopen("/Users/postgres/tmp.jpg","r");
$image = fread($jpeg,filesize("/Users/postgres/tmp.jpg"));
echo $image;

?>