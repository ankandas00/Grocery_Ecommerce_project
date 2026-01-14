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
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Categories</span>
                        </div>
                        <ul>
                          
                                    <?php
                                        $sel="SELECT * FROM categories WHERE pid=0";
                                        $res=$con->query("$sel");
                                        while($row=$res->fetch_assoc()){
                                        
                                    ?>
                                         <li>
                                    <a href="javascript:void(0);"><?php echo $row['cname']; ?>
                                    <ul>
                                         <?php
                                         $p=$row['cid'];
                                         
                                        $selc="SELECT * FROM categories WHERE pid=$p";
                                        $resc=$con->query($selc);
                                        while($rowc=$resc->fetch_assoc()){
                                           ;
                                    ?>
                                    <li>
                                         <a href="subcategories.php?gid=<?php echo $rowc['cid'] ?>"><?php echo $rowc['cname'] ?></a>
                                        </li>
                                        <?php } ?>
                                        </ul>
                                </a>
                                 </li>
                                    <?php
                                        }
                                    ?>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <!-- <a href="#" class="primary-btn">SHOP NOW</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php
                        $sel="SELECT * FROM categories WHERE pid=0";
                        $res=$con->query($sel);
                        while($row=$res->fetch_assoc()){
                    ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="USER/categories_img/<?php echo $row['cimage']; ?>">
                            <h5><a href="#"><?php echo $row['cname']; ?></a></h5>
                        </div>              
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">

            <?php
                        $sel="SELECT * FROM product";
                        $res=$con->query($sel);
                        while($row=$res->fetch_assoc()){

            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="USER/student_img/<?php echo $row['pimage']; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?php echo $row['pname']; ?></a></h6>
                            <h5><?php echo $row['price']; ?></h5>

                        </div>
                         <form action="addcart.php" method="post">
                             
                           
                            <input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
              
                    <input type="hidden" name="price"  value="<?php echo $row['price']; ?>">
                    <p>Quantity</p>
                    <p><input type="number" name="quantity" value="1" min="1"></p>
                   <p> <input type="submit" name="cart" class="btn btn-primary" value="Add to cart"></p>
                </form> 
                    </div>
                </div> 
                 
            <?php
                        }
            ?>
        </div>
            </div>

    </section>
    <!-- Featured Section End -->


    <!-- Banner Begin -->
    
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
   
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
   
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
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



</body>

</html>