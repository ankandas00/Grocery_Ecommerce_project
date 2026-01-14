<?php
include("Common_file/db.php");
if(isset($_POST['save'])){
    $id=$_POST['id'];
    $scat=$_POST['scat'];
    $pname=$_POST['pname'];
    $price=$_POST['price'];
    $d=$_POST['d'];

    if($_FILES['pimg']['name'] && $_FILES['pimg']['name']!=""){

        
            $buf=$_FILES['pimg']['tmp_name'];
            $fn=time().$_FILES['pimg']['name'];
            move_uploaded_file($buf,"student_img/".$fn);
        
            $up="UPDATE product SET cid='$scat', pname='$pname', price='$price', pimage='$fn', details='$d' WHERE pid='$id'";
    }else{
            $up="UPDATE product SET cid='$scat', pname='$pname', price='$price', details='$d' WHERE pid='$id'  ";

    }

    if($con->query($up)){
        header("location:listproduct.php");
    }
}else{
    echo "404 error";
}
?>
