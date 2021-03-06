<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>HNSMS</title>
</head>

<body>

    <!--Start User_Registration  -->
    <div class="container">
        <h2 class="text-center mt-3">User Registration</h2>
        <form action="#" method="POST" class="shadow-lg rounded bg-info signup">

            <div class="form-group p-4 ">
                <i class="fas fa-user"></i>
                <label for="uName">Name:</label>
                <input class="form-control" type="text" name="uName" id="uName">
                <i class="far fa-envelope"></i>
                <label for="uEmail">Email:</label>
                <input class="form-control" type="email" name="uEmail" id="uEmail">
                <small>We will never sheared your Email</small><br>
                <i class="fas fa-key"></i>
                <label for="uPassword">Password:</label>
                <input class="form-control" type="password" name="uPassword" id="uPassword">
                <a href="#" class="btn btn-danger form-control mt-3 shadow-lg">Sign Up</a>
        </form>
        <div class="btn btn-outline-dark text-light mt-3"><a href="index.php">Back to Home</a></div>
    </div>
    <!--End User_Registration  -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>