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
    <title>Login Page</title>
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
                <a href="dashboard.php" class="nav-link active">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="classSubject.php" class="nav-link">Class Subject</a>
            </li>
            <li class="nav-item">
                <a href="students.php" class="nav-link">Students</a>
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
    <div class="container-xxxl px-2 section">
        <div class="row justify-content-center text-center mx-4 rounded">
            <div class="col-lg-8 d-flex justify-content-center rounded-2" style="background-color: #E9EDC9;">
                <p class="m-0 p-1 fs-5">Hello Professor <strong>Jlad!</strong></p>
            </div>
        </div>
        <div class="row mt-4 justify-content-around text-center px-0">
            <div class="col-lg-11 px-0">
                <div class="table-responsive">
                <table class="table">
                    <thead style="background-color: #FEFAE0;">
                        <tr>
                            <th scope="col" style="border-top-left-radius: 10px;">Monday</th>
                            <th scope="col">Tuesday</th>
                            <th scope="col">Wednesday</th>
                            <th scope="col">Thursday</th>
                            <th scope="col">Friday</th>
                            <th scope="col" style="border-top-right-radius: 10px;">Saturday</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                            <td><a href="#" class="nav-link">Math<small class="d-block">3:00PM-4:00PM</small></a></td>
                            <td><a href="#" class="nav-link">Capstone<small class="d-block">3:00PM-4:00PM</small></a></td>
                            <td><a href="#" class="nav-link">Platform Technologies 2<small class="d-block">3:00PM-4:00PM</small></a></td>
                            <td><a href="#" class="nav-link">Statistics<small class="d-block">3:00PM-4:00PM</small></a></td>
                            <td><a href="#" class="nav-link">Discrete Math<small class="d-block">3:00PM-4:00PM</small></a></td>
                            <td><a href="#" class="nav-link">Panitikan<small class="d-block">3:00PM-4:00PM</small></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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