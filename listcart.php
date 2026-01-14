<?php
include("USER/Common_file/db.php");
session_start();
if(!isset($_SESSION['aid'])){
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Page</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="listcart.php">ListCart</a></li>  
                            <li><a href="blog.php">Blog</a></li>  
                            
                            <li><a href="contact.php">Contact</a></li>
                           <li> <a href="logout.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
 <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody id="myc">
    <?php
    $rid=$_SESSION['aid'];
    $sel="SELECT c.*, p.pname, p.pimage FROM cart AS c INNER JOIN product AS p ON c.pid = p.pid WHERE c.rid='$rid'";
     $rs=$con->query($sel);
   while($row=$rs->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $row['pname']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><input onchange="edqt(<?php echo $row['cid']; ?>,this.value)" type="number" name="qty" value="<?php echo $row['quantity']; ?>" min="1"/></td>
        <td><img style="width: 100px;" src="USER/student_img/<?php echo $row['pimage']; ?>"/></td>
        <td><a href="del.php?did=<?php echo $row['cid']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

   </div>
   <div class="container">
     <form action="morder.php" method="post" enctype="multipart/form-data" >
    <div class="row">
        <div class="col-md-6">
            <h2>Billing Address</h2>
            <p>Fillup Correct Information</p>
           
            <p>name</p>
            <p><input class="form-control" type="text" name="bn" id="bn" ></p>
            <p>Phone no.</p>
            <p><input type="text" class="form-control"  name="bp" id="bp"></p>
            <p>Address</p>
            <p><textarea class="form-control"  name="ba" id="ba"></textarea></p>
           
        </div>
          <div class="col-md-6">
            <h2>Shipping Address</h2>
            <p><label><input type="checkbox" id="ck" > Same as Billing address</label></p>
           
            <p>name</p>
            <p><input class="form-control" type="text" name="sn" id="sn" ></p>
            <p>Phone no.</p>
            <p><input type="text" class="form-control"  name="sp" id="sp"></p>
            <p>Address</p>
            <p><textarea class="form-control"  name="sa" id="sa"></textarea></p>
           
            <input class="btn btn-success" type="submit" value="Confirm Order" name="co" />
        </div>


        
        
    </div>
    </form>
    </div>
     <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer email part begin-->

                <!-- Footer email part end-->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script>
    
    $(function(){
        $("#ck").click(function(){
         
        if($("#ck").prop("checked")==true){
            $("#sn").val($("#bn").val());
            $("#sp").val($("#bp").val());
            $("#sa").val($("#ba").val());
        }else{
         $("#sn").val("");
            $("#sp").val("");
            $("#sa").val("");
        }

        })
    })




       function edqt(cid,qty){

          $.ajax({
            url:'crted.php?cid='+cid+'&qty='+qty,
            type:'GET',
            data:{},
            processData:false,
            contentType:false,
            success:function(resp){
                  // $("#myc").html(resp);
            }


          })
            
        }
    </script>



</body>

</html>