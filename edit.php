<?php
include("Common_file/db.php");
$id=$_GET['eid'];

$selp="SELECT * FROM categories WHERE pid=0";
$resp=$con->query("$selp");

$sele="SELECT * FROM product WHERE pid=$id";
$rese=$con->query("$sele");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("Common_file/sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("Common_file/topbar.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Product</h1>
                      <?php
                        while($rowe=$rese->fetch_assoc()){
                      ?>
                    <form action="up.php" method="post" enctype="multipart/form-data">

                        <p><input type="hidden" name='id' value="<?php echo $rowe['pid'];?>"></p>
                        <p>Sub Category</p>
                        <p>
                            <select name="scat">
                                <option value="0">No Parent</option>
                                <?php
                                   while($rowp=$resp->fetch_assoc()){
                                ?>



                                <optgroup label="<?php echo $rowp['cname'] ?>">
                                    <?php
                                        $sid=$rowp['cid'];
                                        $selc="SELECT * FROM categories WHERE pid=$sid";
                                        $resc=$con->query("$selc");
                                        while($rowc=$resc->fetch_assoc()){
                                    ?>
                                   <option <?php if($rowe['cid']==$rowc['cid']){echo "selected";} ?> value="<?php echo $rowc['cid']; ?>"><?php echo $rowc['cname']; ?></option>
                                    <?php
                                        }
                                    ?>   
                                </optgroup>


                                
                                <?php
                                    }
                                ?> 
                            </select>
                        </p>



                        <p>Product Name</p>
                        <p><input type="text" name="pname" value="<?php echo $rowe['pname']; ?>"></p>
    
                        <p>Price</p>
                        <p><input type="text" name="price" value="<?php echo $rowe['price']; ?>"></p>
    
                        <p>Image</p>
                        <p><input type="file" name="pimg"></p>
                        <p>
                            <img style="width:100px;" src="student_img/<?php echo $rowe['pimage']; ?>" alt="">
                        </p>

    
                        <p>Details</p>
                        <p><input type="text" name="d" value="<?php echo $rowe['details']; ?>"></p>

                        <p><input class="btn btn-success" type="submit" name="save" value="Edit Product"></p>
                    </form>
                    <?php
                        }
                    ?>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
                <?php include("Common_file/footer.php"); ?>
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>