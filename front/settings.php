<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <title>Class Subject</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-lg flex-lg-column px-lg-5">
            <a class="navbar-brand" href="dashboard.php">Place your logo Here</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me auto mb-2 mg-lg-0 text-center">
                    <li class="nav-item w-100">
                        <a href="dashboard.php" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="classSubject.php" class="nav-link ">Class Subject</a>
                    </li>
                    <li class="nav-item">
                        <a href="students.php" class="nav-link">Students</a>
                    </li>
                    <li class="nav-item">
                        <a href="settings.php" class="nav-link active">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="content-wrapper">
        <div class="container-lg section justify-content-center align-items-center">
            <div class="col-lg-10 rounded-2 p-5" style="background-color: #E9EDC9;">
                <h4>Settings</h4>
                <div class="row flex-column gap-2">
                    <div class="col-lg-5">
                        <img src="#" alt="profile_picture"><span class="fs-5 fw-bold">&nbsp; Jojie Lad M. Lanete</span>
                    </div>
                    <div class="col-lg-5">
                        <p class="mt-1 fs-5">Email Address: <strong>lanetejlad@gmail.com</strong></p>
                        <button class="btn mt-3 rounded-2 fs-5" style="background-color: #FAEDCD;"><?php echo date("Y");?>Change Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- START SCRIPTS -->
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/main.js"></script>
    <!-- END SCRIPTS -->
</body>

</html>