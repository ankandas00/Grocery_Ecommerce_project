<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-md-4" style="margin:100px auto;">
            <h1>Registration
            </h1>
    <form action="regins.php" method="post">
        <p>Name</p>
        <p><input class="form-control" type="text" name="name" placeholder="Enter Your Name" ></p>
        <p>Email</p>
        <p><input class="form-control" type="email" name="email" placeholder="Enter Your Email" ></p>
        <p>Password</p>
        <p><input class="form-control" type="password" name="pass" placeholder="Enter Your Password" ></p>
        <p>Confirm Password</p>
        <p><input class="form-control" type="password" name="cpass" placeholder="Enter Your Confirm Password" ></p>
        <p><input class="btn btn-success" type="submit" name="save" value="Registration" ></p>
    </form>
    </div>
    </div>
    </div>
</body>
</html>