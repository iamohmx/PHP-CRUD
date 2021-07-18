<?php 

$condb = mysqli_connect("localhost","root","","workshop_crud_member") or die("ERROR!! : ". mysqli_error($condb));

//SET utf8 set thai language
mysqli_query($condb, "SET NAMES 'utf8' ");

// echo date('Y-m-d H:i:s');
// set time zone
date_default_timezone_set('Asia/Bangkok');

// echo '<hr>';
// echo date('Y-m-d H:i:s');

?>