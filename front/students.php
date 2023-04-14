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
                        <a href="students.php" class="nav-link active">Students</a>
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
            <div class="row mt-5 justify-content-end text-end">
                <div class="col-lg-3 text-end me-2">
                    <button class="btn p-2 m-0" style="background-color: #FAEDCD" data-bs-toggle="modal"
                        data-bs-target="#addStudent">
                        Add Student
                    </button>
                </div>
            </div>
            <!-- MODAL FOR ADDING STUDENTS -->
            <div class="modal" tabindex="-1" id="addStudent">
                <div class="modal-dialog">
                    <div class="modal-content p-3" style="background-color: #E9EDC9;">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Student</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST" style="background-color: #E9EDC9;">
                                <label for="fname" class="form-label bg-none">First Name</label>
                                <input type="text" class="form-control" required>
                                <label for="mname" class="form-label bg-none">Middle Name</label>
                                <input type="text" class="form-control" required>
                                <label for="lname" class="form-label bg-none">Last Name</label>
                                <input type="text" class="form-control" required>
                                <label for="email" class="form-label bg-none">Email Address</label>
                                <input type="email" class="form-control" required>
                                <label for="mnumber" class="form-label bg-none">Mobile number</label>
                                <input type="number" class="form-control" required>
                                <input type="submit" class="btn w-100 ms-auto mt-4" style="background-color: #FAEDCD;" name="addStudent" value="Add Student">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive mt-2">
                <table class="table text-center">
                    <thead style="background-color: #FEFAE0">
                        <tr>
                            <th scope="col" style="border-top-left-radius: 15px;">Student ID</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Year & Course</th>
                            <th scope="col">Email Address</th>
                            <th scope="col" style="border-top-right-radius: 15px;">Mobile Number</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                            <td scope="col">123123</td>
                            <td>Jlad Lanete</td>
                            <td>BSIT-4</td>
                            <td>jladaudrey@gmail.com</td>
                            <td>+639617969734</td>
                        </tr>
                    </tbody>
                </table>
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