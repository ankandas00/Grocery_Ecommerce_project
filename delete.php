<?php
include("Common_file/db.php");
$id=$_GET['did'];

$sel="SELECT * FROM product WHERE pid='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();
unlink("student_img/".$row['pimage']);

$del="DELETE FROM product WHERE pid='$id'";
$con->query($del);
header("location:listproduct.php");


?>