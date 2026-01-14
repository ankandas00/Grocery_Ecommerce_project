<?php
if(isset($_POST['regbtn'])){
    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=MD5($_POST['pass']);
    include("Common_file/db.php");
    $ins="INSERT INTO registration SET name='$n', email='$e', password='$p'";
    if($con->query($ins)){
        header("location:login.php");
    }
}else{
    echo "404 Error";
}
    ?>
