<?php
session_start();
if (isset($_SESSION['student_id'])) {
} else {
    echo "<script>alert('Please Login First')</script>";
    echo "<script>location.href='studentLogin.html'</script>";
}


?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UPMS-Schedule</title>
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>

<nav class="navbar sticky-top navbar-expand-lg navbar-warning bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-dark" href="index.php">
                <img src="img/logo.png" alt="" width="60" height="50">


                UPMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-dark"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">

                    <li class="dropdown nav-item">
                        <a class="nav-link text-dark" href="index.php" class="dropbtn">Home</a>
                        <div class="dropdown-content">
                            <a href="team.php" target="_blank">Project Proposal</a>
                            <a href="teacher.php" target="_blank">Teachers</a>
                            <a href="schedule.php" target="_blank">Defence Schedule</a>
                            <a href="notice.php" target="_blank">Notice</a>
                            <a href="result.php" target="_blank">Result</a>
                            <a href="reqs.php" target="_blank">Project Requirement</a>


                        </div>
                    </li>
                    <!-- <li class="nav-item ">
                        <a class="nav-link active text-dark" aria-current="page" href="index.php">Home</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="profile.php">Profile</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="project.php">Project</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-dark" href="studentLogin.html">Login/Register</a>
                    </li> -->
                    <li class="nav-item ">
                        <a class="nav-link text-dark" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="logout.php">Logout</a>
                    </li>

                </ul>
                <form class="d-flex" action="search.php" method="post">

                    <input class="form-control me-2" type="search" name="search" placeholder="Search"
                        aria-label="Search" />
                    <button class="btn btn-outline-success" name="searchh " type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!--------------------------- Headings ------------------->



    <?php


include 'config.php';

//date
$query = "SELECT s_date FROM `schedule` Where p_code='CSE-3300'";
$query_run = mysqli_query($conn, $query);
$row = mysqli_fetch_array($query_run);

$query = "SELECT s_date FROM `schedule` Where p_code='CSE-4800'";
$query_run = mysqli_query($conn, $query);
$row1 = mysqli_fetch_array($query_run);


$query = "SELECT s_date FROM `schedule` Where p_code='CSE-4801'";
$query_run = mysqli_query($conn, $query);
$row2 = mysqli_fetch_array($query_run);









?>







    <!-- Teachers -->

    <div class="container-fluid mt-2">
        <div class="row border border-danger py-3 bg-dark">
            <div class="col-12">
                <h1 class="text-white text-center">Defence Schedule</h1>
            </div>
        </div>
    </div>



    <div class="container mt-2">
        <div class="card text-center mb-2">
            <div class="card-header bg-success text-white">
                Schedule
            </div>
            <div class="card-body bg-i">
                <h5 class="card-title">3<sup>rd</sup> year | CSE-3300</h5>
                <p class="card-text">Check Your 3<sup>rd</sup> Year Defence Schedule Here </p>
                <a href="schedule3300.php" class="btn btn-danger">Schedule</a>
            </div>
            <div class="card-footer text-muted">
                <?php echo "Uploaded Date: $row[s_date]"?>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-header bg-success text-white">
                Schedule
            </div>
            <div class="card-body bg-white">
                <h5 class="card-title">4<sup>th</sup> year | CSE-4800</h5>
                <p class="card-text">Check Your 4<sup>th</sup> Year Defence Schedule Here</p>
                <a href="schedule4800.php" class="btn btn-danger">Schedule</a>
            </div>
            <div class="card-footer text-muted">
            <?php echo "Uploaded Date: $row1[s_date]"?>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-header bg-success text-white">
                Schedule
            </div>
            <div class="card-body bg-white">
                <h5 class="card-title">4<sup>th</sup> year | CSE-4801</h5>
                <p class="card-text">Check Your 4<sup>th</sup> Year Defence Schedule Here</p>
                <a href="schedule4801.php" class="btn btn-danger">Schedule</a>

            </div>
            <div class="card-footer text-muted">
            <?php echo "Uploaded Date: $row2[s_date]"?>
            </div>
        </div>

    </div>







     <!-- footer start -->
     <div class="container-fluid mt-5" style="margin-left: -8px;">
         <footer>
             <div class="footer-content">
                 <h3>University Project Management System</h3>
                 <p>We are dedicated to make project management much easier and comfortable</p>
                 <ul class="socials">
                     <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                     <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
                     <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                     <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                 </ul>
             </div>
             <div class="footer-bottom">
                 <p>copyright &copy;2023 UPMS. designed by <span>UPMS-Team</span></p>
             </div>
         </footer>
     </div>

       <!-- footer end -->










    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>