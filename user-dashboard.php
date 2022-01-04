<?php
session_start();
?>
<?php 
      if(!isset($_SESSION['uname']))  
      header("Location: index.php");  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Job Portal | UserPannel</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- =======================================================
  * Template Name: Resi - v4.7.0
  * Template URL: https://bootstrapmade.com/resi-free-bootstrap-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">Jobly.</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">View Jobs</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="#" data-toggle="modal"
                            data-target="#profileModal">Profile</a></li>
                    <li><a class="getstarted scrollto" href="user-logout.php">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <?php

$username = $_SESSION['uname'];

?>

    <!-- apply Job Modal -->
    <?php
        $connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
        $db=mysqli_select_db($connection,'epiz_30571078_jobportal');
        

        $query = "SELECT * FROM user WHERE username='$username' ";
        $query_run = mysqli_query($connection, $query);
        ?>
    <?php
            if ($query_run) {
              foreach ($query_run as $row) {
            ?>
    <div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="signupModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#5578ff">
                    <h5 class="modal-title" id="signupModal">Apply For Your Job Here...</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="apply-job.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="job_id" id="job_id">
                        <input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>">

                        <h3 class="text-center">Applicant's Details</h3>
                        <div class="form-group">
                            <b><label for="username">Username</label></b>
                            <input class="form-control" id="username" name="username"
                                placeholder="Choose a unique Username" type="text" value="<?php echo $username ?>"
                                required readonly>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <b><label for="firstName">First Name:</label></b>
                                <input type="text" class="form-control" id="firstName" name="firstName"
                                    placeholder="First Name" value="<?php echo $row['firstname'] ?>" required readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="lastName">Last name:</label></b>
                                <input type="text" class="form-control" id="lastName" name="lastName"
                                    placeholder="Last name" value="<?php echo $row['lastname'] ?>" required readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <b><label for="email">Email:</label></b>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter Your Email" value="<?php echo $row['email'] ?>" required readonly>
                        </div>
                        <?php
                }
            } else {
              echo "No Record Found";
            }
            ?>
                        <hr>

                        <h3 class="text-center">Job Details</h3>
                        <div class="form-group">
                            <b><label for="username">Job Title</label></b>
                            <input class="form-control" id="title" name="title" placeholder="Choose a unique Username"
                                type="text" required readonly>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <b><label for="firstName">Category:</label></b>
                                <input type="text" class="form-control" id="category" name="category"
                                    placeholder="First Name" required readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="lastName">Location:</label></b>
                                <input type="text" class="form-control" id="location" name="location"
                                    placeholder="Last name" required readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <b><label for="firstName">College Name :</label></b>
                                <input type="text" class="form-control" id="age" name="clgname"
                                    placeholder="College Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="lastName">Percentage/CGPA :</label></b>
                                <input type="text" class="form-control" id="education" name="percentage"
                                    placeholder="Percentage" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <b><label for="password">Skills:</label></b>
                                <input class="form-control" id="password" name="skill" placeholder="Enter Skills"
                                    type="text" required data-toggle="password">
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="password1">Updated CV/Resume :</label></b>
                                <input class="form-control" id="cpassword" name="cv" placeholder="Renter Password"
                                    type="file" accept=".pdf" required>
                            </div>
                        </div>
                        <button type="submit" name="apply-job" class="btn btn-success"> <i class="fa fa-check"> </i>
                            Apply </button>
                        &nbsp&nbsp&nbsp;
                        <button type="button" class="btn btn-secondary" class="close"
                            data-dismiss="modal">Close</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Profile Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="signupModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#5578ff">
                    <h5 class="modal-title" id="signupModal">My Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
        $connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
        $db=mysqli_select_db($connection,'epiz_30571078_jobportal');
        

        $query = "SELECT * FROM user WHERE username='$username' ";
        $query_run = mysqli_query($connection, $query);
        ?>
                <?php
            if ($query_run) {
              foreach ($query_run as $row) {
            ?>
                <div class="modal-body">
                    <div class="container text-center">
                        <i class="fa fa-user-circle-o fa-4x text-danger" aria-hidden="true"></i>
                        <hr>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>User Id :- </th>
                                    <td><?php echo $row['user_id']; ?></td>
                                </tr>
                                <tr>
                                    <th>User Name :-</th>
                                    <td><?php echo $row['username']; ?></td>
                                </tr>
                                <tr>
                                    <th>Full Name :-</th>
                                    <td><?php echo $row['firstname']; ?>&nbsp;<?php echo $row['lastname']; ?></td>
                                </tr>
                                <tr>
                                    <th>Email-Id :-</th>
                                    <td><?php echo $row['email']; ?></td>
                                </tr>
                                <tr>
                                    <th>Phone :-</th>
                                    <td><?php echo $row['phone']; ?></td>
                                </tr>
                                <tr>
                                    <th>Age :-</th>
                                    <td><?php echo $row['age']; ?></td>
                                </tr>
                                <tr>
                                    <th>Education :-</th>
                                    <td><?php echo $row['education']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal">Close</button>
                </div>
                <?php
              }
            } else {
              echo "No Record Found";
            }
            ?>
            </div>
        </div>
    </div>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">


        <div class="container">

            <?php

if(isset($_SESSION['login-msg']) && !empty($_SESSION['login-msg'])){
$msg = $_SESSION['login-msg'];
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> ' . $msg . '
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
}
if(isset($_SESSION['apply-msg']) && !empty($_SESSION['apply-msg'])){
    $msg1 = $_SESSION['apply-msg'];
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Congratulations !!</strong> ' . $msg1 . '
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    }
    unset($_SESSION["apply-msg"]);

?>

            <div class="row">
                <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Welcome <b style="color: red;"><?php echo $username ?></b>, To This Job Portal </h1>
                    <ul>
                        <li><i class="ri-check-line"></i> Find jobs, create trackable resumes and enrich your
                            applications</li>

                    </ul>
                    <div class="mt-3">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        <a href="#services" class="btn-get-quote">View Jobs</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6">
                        <h2>24k Talented people are getting Jobs</h2>
                        <h3></h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            A job portal, also known as a career portal, is a modern name for an online job board that
                            helps applicants find jobs and aids employers in their quest to locate ideal candidates.
                            Career websites, such as Monster, Indeed and SimplyHired, have job portals that offer a
                            broad range of jobs in a vast number of fields. Some government agencies, nonprofit
                            organizations, universities and private businesses have their own job portals that
                            applicants can access on the organization's website.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Quality Service</li>
                            <li><i class="ri-check-double-line"></i> Easy Registration</li>
                            <li><i class="ri-check-double-line"></i> Current Openings</li>
                        </ul>
                        <p class="fst-italic">
                            Well these days, online jobs portal are playing a major role in employment sector. They are
                            the simplest ‘Keys’ that has made a huge difference in building employment as well as making
                            employment easier.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>View Jobs</h2>
                    <p>List Of all Available Jobs</p>
                </div>
                <?php

$connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
$db=mysqli_select_db($connection,'epiz_30571078_jobportal');
        

        $query = "SELECT * FROM job ";
        $query_run = mysqli_query($connection, $query);
        ?>

                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">JobTitle</th>
                            <th scope="col">Category</th>
                            <th scope="col">Location</th>
                            <th scope="col">Status</th>
                            <th scope="col">Desc</th>
                            <th scope="col">LastDate</th>
                            <th scope="col">GraduationYear</th>
                            <th scope="col">Apply</th>

                        </tr>
                    </thead>

                    <?php
            if ($query_run) {
              foreach ($query_run as $row) {
            ?>
                    <tbody>
                        <tr>
                            <td scope="row"><?php echo $row['job_id']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['category']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td>
                                <?php
                                    if($row['status']=='Active'){
                                    ?>
                                <button class="btn btn-primary"> <?php echo $row['status']; ?></button>
                                <?php
                                    }else{
                                        ?>
                                <button class="btn btn-warning"> <?php echo $row['status']; ?></button>
                                <?php
                                    }
                                ?>

                            </td>
                            <td><?php echo $row['desc']; ?></td>
                            <td><?php echo $row['end-date']; ?></td>
                            <td><?php echo $row['grd-year']; ?></td>
                            <td><button class="btn btn-success editbtn"><i class="fa fa-check-square-o"></i>
                                    Apply</button></td>

                        </tr>

                    </tbody>
                    <?php
                }
            } else {
              echo "No Record Found";
            }
            ?>
                </table>


            </div>


        </section><!-- End Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                            <h3><a href="">Amazon</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                            <h3><a href="">Goldman Sanchs</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                            <h3><a href="">Facebook</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                            <h3><a href="">Microsoft</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-database-2-line" style="color: #47aeff;"></i>
                            <h3><a href="">Wipro</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                            <h3><a href="">Infosys</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                            <h3><a href="">Capegimini</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                            <h3><a href="">Cognizant</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-anchor-line" style="color: #b2904f;"></i>
                            <h3><a href="">TCS</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-disc-line" style="color: #b20969;"></i>
                            <h3><a href="">Accenture</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-base-station-line" style="color: #ff5828;"></i>
                            <h3><a href="">Dell</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                            <h3><a href="">Oracle</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->





        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Get In Touch With Us</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p>Pune , India 411005</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>online.job@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Us</h3>
                                    <p>+91 9878277287</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php
        $connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
        $db=mysqli_select_db($connection,'epiz_30571078_jobportal');
        

        $query = "SELECT * FROM user WHERE username='$username' ";
        $query_run = mysqli_query($connection, $query);
        ?>



                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <form action="contact.php" method="POST">
                            <?php
            if ($query_run) {
              foreach ($query_run as $row) {
            ?>
                            <input type="hidden" name="user_id" value=" <?php echo $row['user_id'] ?>">
                            <?php
                }
            } else {
              echo "No Record Found";
            }
            ?>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>

                            <div class="text-center"><button type="submit" class="btn btn-warning" name="contact">Send
                                    Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Jobly</h3>
                        <p>
                            Shivajinagar<br>
                            Pue, MH 411005<br>
                            India <br><br>
                            <strong>Phone:</strong> +91 9862627672<br>
                            <strong>Email:</strong> online.job@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Send Your Email</h4>
                        <p></p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Send">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>2021-22</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/resi-free-bootstrap-html-template/ -->
                    Designed by <a href="https://portfolio-pranavkulkarni.netlify.com">Pranav Kulkarni</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://twitter.com/PranavK26768181" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/pranav.kulkarni.3557440/" class="facebook"><i
                        class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/iampranav.kulkarni/" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href="https://github.com/pranavkulkarni2905/" class="google-plus"><i class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/pranavk2905/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
    $(document).ready(function() {
        $('.editbtn').on('click', function() {


            $('#applyModal').modal('show');
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#job_id').val(data[0]);
            $('#title').val(data[1]);
            $('#category').val(data[2]);
            $('#location').val(data[3]);


        });
    });
    </script>
</body>

</html>