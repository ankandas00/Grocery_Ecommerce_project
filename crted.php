<?php
session_start();
include("USER/Common_file/db.php");
      
  
        $cid=$_GET['cid'];
        $qty=$_GET['qty'];
        $upd="UPDATE cart SET quantity='$qty' WHERE cid='$cid'";
        $con->query($upd);
?>