<?php
include ("back/dbHelper.php");

if (isset($_GET['login'])) {
    // Get the email and password values from the form
    $email = $_GET['email'];
    $pass = $_GET['pass'];
    
    // Call the login function to check the credentials
    $result = login($email, $pass);
    
    // Check if the login was successful
    if ($result) {
        // If successful, redirect the user to the dashboard page
        header("Location: front/dashboard.php");
        exit();
    } else {
        // If unsuccessful, display an error message
        header('Location:index.php?error=Incorrect Email or Password!');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <title>Login Page</title>
</head>
<body>
<div class="custom-container">
    <div class="row justify-content-around text-center align-items-center h-100" id="login">
        <div class="col-lg-5 d-flex justify-content-center">
            <a href="index.php" class="text-decoration-none text-dark">
                <p class="fw-bold display-1">INSERT LOGO HERE</p>
                <!-- <img src="" alt=""> -->
            </a>
        </div>
        <div class="col-lg-5 px-sm-5 d-flex justify-content-center">
           <form action="" method="GET" class="rounded w-100 p-5">
           <?php if (isset($_GET['error'])){?><p class="error alert alert-danger"><?php echo $_GET['error'];?></p> <?php } ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" required>
            </div>
            <a href="#forgot" class="text-decoration-none text-dark" onclick="forgotPass()"><p class="text-start">Forgot Password?</p></a>
            <input type="submit" name="login" class="btn w-50 text-dark fw-bolder p-2 login" value="Login" style="background-color: #FAEDCD;">
           </form>
        </div>
    </div>

    <div class="row h-100 justify-content-center align-items-center text-center" id="forgot">
        <div class="col-lg-6 d-flex justify-content-center align-items-center text-center h-50">
            <form action="#" method="POST" class="w-75 rounded p-5">
                <div class="mb-3">
                    <label for="email" class="form-label">Enter your Email Address</label>
                    <input type="email" class="form-control" required>
                    <small>Will send you an email for you password reset request</small>
                </div>
                <input type="submit" name="reset" class="btn text-dark fw-bolder p-2 me-3" value="Reset Password" style="background-color: #FAEDCD;">
                <input type="button" class="d-inline btn text-dark fw-bolder p-2" value="Back to Login" style="background-color: #FAEDCD;" onclick="login()">
            </form>
        </div>
    </div>
</div>





    <!-- START SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- END SCRIPTS -->
</body>
</html>