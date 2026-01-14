<?php
session_start();
include("USER/Common_file/db.php");
if(isset($_POST['cart'])){
   
    $id=$_POST['pid'];
    $p=$_POST['price'];
    $q=$_POST['quantity'];
    $rid=$_SESSION['aid'];

    $sel="SELECT * FROM cart WHERE rid='$rid' AND pid='$id'";
    $rs=$con->query($sel);
    if($rs->num_rows>0){
        $row=$rs->fetch_assoc();
        $fqty=$row['quantity']+$q;
        $cid=$row['cid'];
        $upd="UPDATE cart SET quantity='$fqty' WHERE cid='$cid'";
        $con->query($upd);

    }else{

    $ins="INSERT INTO cart SET pid='$id',price='$p',quantity='$q',rid='$rid'";
    $con->query($ins);
    }



}
?>