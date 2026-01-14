<?php
include("USER/Common_file/db.php");
$id=$_GET['did'];

$sel="SELECT * FROM product";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();

$selsh="SELECT * FROM cart";
$rssh=$con->query($selsh);
$rowsh=$rssh->fetch_assoc();

unlink("USER/student_img/".$row['pimg']);
$del="DELETE p FROM product as p left join cart as c on p.pid=c.pid WHERE is_active='inactive'";
$con->query($del);


header("location:listcart.php");
?>