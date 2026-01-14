<?php
include("USER/Common_file/db.php");
session_start();
if(isset($_POST['co'])){
   
    $bn=$_POST['bn'];
    $bp=$_POST['bp'];
    $ba=$_POST['ba'];
    $sn=$_POST['sn'];
    $sp=$_POST['sp'];
    $sa=$_POST['sa'];
    $cid=$_SESSION['aid'];
    $ins="INSERT INTO m_order SET b_name='$bn',b_phone='$bp',b_address='$ba',s_name='$sn',s_phone='$sp',s_address='$sa',cid='$cid'";
    $con->query($ins);

    $order_id = $con->insert_id;

    $sel="SELECT * FROM cart WHERE rid='$cid'";
     $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){

        $pid=$row['pid'];
        $rid=$row['rid'];
        $price=$row['price'];
        $quantity=$row['quantity'];

    $ins="INSERT INTO sub_order SET pid='$pid',rid='$cid',price='$price',quantity='$quantity',order_id='$order_id'";
    $con->query($ins);



    }

    $del="DELETE  FROM cart WHERE rid='$cid'";
    $con->query($del);
}
?>