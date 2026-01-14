<?php
include("Common_file/db.php");
if(isset($_POST['save'])){
    $scat=$_POST['scat'];
    $pname=$_POST['pname'];
    $price=$_POST['price'];
    $d=$_POST['d'];

    $buf=$_FILES['pimg']['tmp_name'];
    $fn=time().$_FILES['pimg']['name'];
    move_uploaded_file($buf,"student_img/".$fn);

    $ins="INSERT product SET cid='$scat', pname='$pname', price='$price', pimage='$fn', details='$d'  ";
    if($con->query($ins)){
        header("location:listproduct.php");
    }
}else{
    echo "404 error";
}
?>