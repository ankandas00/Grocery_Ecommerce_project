<?php
include("Common_file/db.php");
if(isset($_POST['save'])){
    $pcat=$_POST['pcat'];
    $cname=$_POST['cname'];
    

    $buf=$_FILES['cimg']['tmp_name'];
    $fn=time().$_FILES['cimg']['name'];
    move_uploaded_file($buf,"categories_img/".$fn);

    $ins="INSERT categories SET cname='$cname', cimage='$fn', pid='$pcat' ";
    if($con->query($ins)){
        header("location:listcategory.php");
    }
}else{
    echo "404 error";
}
?>