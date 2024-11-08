<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UPMS-Notice Upload</title>
    <link rel="stylesheet" href="../css/vnab.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <style>
        form {
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }

        .btn-color {
            background-color: #0e1c36;
            color: #fff;

        }

        .profile-image-pic {
            height: 200px;
            width: 200px;
            object-fit: cover;
        }

        .cardbody-color {
            background-color: #ebf2fa;
        }
    </style>


</head>

<body>
    <main>

        <div class="container justify-content-center border-dark mt-5">

            <div class="row mt-5">
                <div class="col-lg-2 col-md-12">

                    <!--Main Navigation-->
                    <header>
                        <!-- Sidebar -->
                        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
                        <div class="position-sticky">
                            <div class="list-group list-group-flush mx-3 mt-4">
                                <a href="adminPanel.php" class="list-group-item list-group-item-action py-2 ripple"
                                    aria-current="true">
                                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Admin Home</span>
                                </a>
                                <a href="teacherData.php" class="list-group-item list-group-item-action py-2 ">
                                    <i class="fas fa-chart-area fa-fw me-3"></i><span>Teachers</span>
                                </a>
                                <a href="studentData.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-lock fa-fw me-3"></i><span>Students</span></a>
                                <a href="proposalData.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-chart-line fa-fw me-3"></i><span>Proposals</span></a>
                                <a href="supervisors.php" class="list-group-item list-group-item-action py-2 ripple">
                                    <i class="fas fa-chart-pie fa-fw me-3"></i><span>Supervisors</span>
                                </a>
                                <a href="feedback.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-chart-bar fa-fw me-3"></i><span>Feedback</span></a>
                                <a href="assignSupervisor.php"
                                    class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-globe fa-fw me-3"></i><span>Assign Supervisor</span></a>
                                <a href="noticeUpload.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-building fa-fw me-3"></i><span>Notice</span></a>
                                <a href="../scheduleUp.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-calendar fa-fw me-3"></i><span>Defence Schedule</span></a>
                                <a href="../resultUp.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-users fa-fw me-3"></i><span>Result</span></a>
                                <a href="reqUpload.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-money-bill fa-fw me-3"></i><span>Project Requirement</span></a>
                            </div>
                        </div>
                        </nav>
                        <!-- Sidebar -->

                        <!-- Navbar -->
                        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
                            <!-- Container wrapper -->
                            <div class="container-fluid">
                                <!-- Toggle button -->
                                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                                    data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <i class="fas fa-bars"></i>
                                </button>

                                <!-- Brand -->
                                <a class="navbar-brand" href="#">
                                    <img src="../img/logo.png" height="50" alt="UPMS Logo" loading="lazy" />
                                </a>
                            </div>
                        </nav>
                    </header>

                </div>












                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-6 ">

                            <div class="card my-5">

                                <form action="noticeUploadAction.php" method="post"
                                    class=" card-body cardbody-color p-lg-5" enctype="multipart/form-data">
                                    <h2 class="text-center text-dark mt-2">Upload Notice</h2>



                                    <div class="mb-3">
                                        <input type="text" name="topic" class="form-control" placeholder="Topic Name"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="t_description" class="form-control py-5"
                                            placeholder="Topic Details" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="text-center"><button type="submit" name="login"
                                            class="btn btn-color px-5 w-100">Upload</button></div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>











    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>