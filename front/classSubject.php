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
                <a href="classSubject.php" class="nav-link active">Class Subject</a>
            </li>
            <li class="nav-item">
                <a href="students.php" class="nav-link ">Students</a>
            </li>
            <li class="nav-item">
                <a href="settings.php" class="nav-link">Settings</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
        </ul>
    </div>
</div>
</nav>

<div id="content-wrapper">
    <div class="container-lg section">
        <div class="row justify-content-center text-center mx-4 rounded" style="background-color: #E9EDC9;">
            <div class="col-lg-10 d-flex justify-content-center">
                <p class="m-0 p-1 fs-5">Hello Professor <strong>Jlad!</strong></p>
            </div>
        </div>
        <div class="row mt-3 justify-content-around gap-5 text-center px-0">
            <div class="col-lg-3 text-start p-3 position-relative rounded" style="background-color: #E9EDC9;">
                <p class="p-0 m-0 fw-bold">Math</p>
                <small>3:00PM-4:00PM</small>
                <div class="row text-end">
                    <p class="pe-3 pt-3 m-0 fs-4">35</p>
                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center align-items-center rounded" style="background-color: #E9EDC9;">
                <a href="" class="nav-link">                
                    <i class="fa-solid fa-plus fw-bolder fs-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>

    <!-- START SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/main.js"></script>
    <!-- END SCRIPTS -->
</body>
</html>