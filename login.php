<?php
session_start();
include("Common_file/db.php");
if(isset($_POST['loginbtn'])){
   $e= $_POST['email'];
   $p= MD5($_POST['pass']);

    $sel="SELECT * FROM registration WHERE email='$e'AND password='$p'";
    $res=$con->query($sel);
    if($res->num_rows>0){
      $row=$res->fetch_assoc();
        $_SESSION['aid']=$row['rid'];
        $_SESSION['aname']=$row['name'];
        header("location:dashboard.php");

    }else{
        echo "Invalid Login";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <h1>Login</h1>

<p>Name</p>
<p>
    <input type="text" placeholder="Enter Name" name="name" required>
</p>

<p>Email</p>
<p>
    <input type="text" placeholder="Enter Email" name="email" required>
</p>

<p>Password</p>
<p>
    <input type="password" placeholder="Enter Password" name="pass"required>
</p>

<p>
    <button type="submit" name="loginbtn" >Login</button>
</p>

  
  <div class="container signin">
    <p>Create an account? <a href="reg.php">Sign up</a>.</p>
  </div>
</form>
</body>
</html>
