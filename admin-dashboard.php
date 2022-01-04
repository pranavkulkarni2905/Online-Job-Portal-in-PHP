
<?php
session_start();
?>
<?php 
      if(!isset($_SESSION['admin']))  
      header("Location: index.php");  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Job Portal | Admin</title>
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
                    <li><a class="nav-link scrollto" href="#" data-toggle="modal" data-target="#addjobModal">Add
                            Jobs</a></li>
                    <li><a class="nav-link scrollto" href="#services">View Jobs</a></li>
                    <li><a class="nav-link scrollto" href="" data-toggle="modal" data-target="#profileModal">Profile</a>
                    </li>
                    <li><a class="nav-link scrollto" href="" data-toggle="modal" data-target="#userModal">Users</a>
                    </li>
                    <li><a class="nav-link scrollto" href="" data-toggle="modal" data-target="#applicationModal">Applicant's Data</a>
                    </li>
                    <li><a class="nav-link scrollto" href="" data-toggle="modal" data-target="#contactModal">Messages</a>
                    </li>
                    <li><a class="getstarted scrollto" href="admin-logout.php" >Logout</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <?php

$username = $_SESSION['admin'];

?>


    <!-- Profile Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="signupModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#5578ff">
                    <h5 class="modal-title" id="signupModal">Admin Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
       $connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
       $db=mysqli_select_db($connection,'epiz_30571078_jobportal');

        $query = "SELECT * FROM admin WHERE username='$username' ";
        $query_run = mysqli_query($connection, $query);
        ?>
                <?php
            if ($query_run) {
              foreach ($query_run as $row) {
            ?>
                <div class="modal-body">
                    <div class="container text-center">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addNewAdminModal" style="float: left;"> <i class="fa fa-plus"></i> Add New Admin</button>
                        <i class="fa fa-user-circle-o fa-4x text-danger" aria-hidden="true"></i><hr>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Admin Id :- </th>
                                    <td><?php echo $row['admin_id']; ?></td>
                                </tr>
                                <tr>
                                    <th>User Name :-</th>
                                    <td><?php echo $row['username']; ?></td>
                                </tr>
                               
                                <tr>
                                    <th>Email-Id :-</th>
                                    <td>admin@gmail.com</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal">Close</button>&nbsp&nbsp&nbsp;
                    
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
    <!-- All Users Modal -->
    <div class="modal fade bd-example-modal-lg" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#5578ff">
                    <h5 class="modal-title" id="signupModal">All User's Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
        $connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
        $db=mysqli_select_db($connection,'epiz_30571078_jobportal');
        

        $query = "SELECT * FROM user ";
        $query_run = mysqli_query($connection, $query);
        ?>
               
                <div class="modal-body">
                    <div class="container text-center">
                    <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                            <th scope="col">UserId</th>
                            <th scope="col">Username</th>
                            <th scope="col">FirstName</th>
                            <th scope="col">LastName</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Age</th>
                            <th scope="col">Education</th>

                        </tr>
                    </thead>

                    <?php
            if ($query_run) {
                $i=1;
              foreach ($query_run as $row) {
            ?>
                    <tbody>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td scope="row"><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                           
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['education']; ?></td>
                           

                        </tr>

                    </tbody>
                    <?php
                    $i++;
                }
            } else {
              echo "No Record Found";
            }
            ?>
                </table>
                    </div>
                    <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal">Close</button>&nbsp&nbsp&nbsp;
                    
                </div>
            
            </div>
        </div>
    </div>
       <!-- Message Modal -->
       <div class="modal fade bd-example-modal-lg" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#5578ff">
                    <h5 class="modal-title" id="signupModal">All Messages By User's On Contact Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
       $connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
       $db=mysqli_select_db($connection,'epiz_30571078_jobportal');
        

        $query = "SELECT * FROM `contact` ";
        $query_run = mysqli_query($connection, $query);
        ?>
               
                <div class="modal-body">
                    <div class="container text-center">
                    <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ContactId</th>
                            <th scope="col">UserId</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            
                            <th scope="col">Reply</th>
                            

                        </tr>
                    </thead>

                    <?php
            if ($query_run) {
                $i=1;
              foreach ($query_run as $row) {
            ?>
                    <tbody>
                        <tr>
                        <td><?php echo $i ?></td>

                            <td scope="row"><?php echo $row['contact_id']; ?></td>

                            <td>
                            <?php
                                    if($row['user_id']==null || $row['user_id']==0){
                                    ?>
                                <button class="btn btn-warning"> Unknown</button>
                                <?php
                                    }else{
                                        ?>
                                <?php echo $row['user_id'] ?>
                                <?php
                                    }
                                ?>        
                        </td>

                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                           
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                           
                            
                            <td>

                            <?php
                                    if($row['reply']==null){
                                    ?>
                                <button class="btn btn-success reply" ><i class="fa fa-reply"></i> Give Reply</button>
                                <?php
                                    }else{
                                        ?>
                                <button class="btn btn-warning"> <?php echo $row['reply']; ?></button>
                                <?php
                                    }
                                ?>
                            </td>

                        </tr>

                    </tbody>
                    <?php
                    $i++;
                }
            } else {
              echo "No Record Found";
            }
            ?>
                </table>
                    </div>
                    <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal">Close</button>&nbsp&nbsp&nbsp;
                    
                </div>
            
            </div>
        </div>
    </div>
     <!-- Application Modal -->
     <div class="modal fade bd-example-modal-lg" id="applicationModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#5578ff">
                    <h5 class="modal-title" id="signupModal">All Applicant's Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
       $connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
       $db=mysqli_select_db($connection,'epiz_30571078_jobportal');
        

        $query = "SELECT * FROM `user-application` ";
        $query_run = mysqli_query($connection, $query);
        ?>
               
                <div class="modal-body">
                    <div class="container text-center">
                    <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                            <th scope="col">ApplicantId</th>
                            <th scope="col">UserId</th>
                            <th scope="col">JobId</th>
                            <th scope="col">Username</th>
                            <th scope="col">JobTitle</th>
                            <th scope="col">CollegeName</th>
                            <th scope="col">Percentage</th>
                            <th scope="col">Skills</th>
                            <th scope="col">Resume/CV</th>

                        </tr>
                    </thead>

                    <?php
            if ($query_run) {
                $i=1;
              foreach ($query_run as $row) {
            ?>
                    <tbody>
                        <tr>
                        <td><?php echo $i ?></td>
                            <td scope="row"><?php echo $row['application_id']; ?></td>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['job_id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                           
                            <td><?php echo $row['job_title']; ?></td>
                            <td><?php echo $row['clgname']; ?></td>
                            <td><?php echo $row['percentage']; ?></td>
                            <td><?php echo $row['skills']; ?></td>
                            <td><a href="uploads/<?php echo $row['cv'] ?>" target="_blank"><button class="btn btn-primary"><i class="fa fa-eye"></i> View Resume</button></a></td>
                           

                        </tr>

                    </tbody>
                    <?php
                    $i++;
                }
            } else {
              echo "No Record Found";
            }
            ?>
                </table>
                    </div>
                    <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal">Close</button>&nbsp&nbsp&nbsp;
                    
                </div>
            
            </div>
        </div>
    </div>
     <!--Give reply Modal -->
 

    <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="signupModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#5578ff">
                    <h5 class="modal-title" id="signupModal">Give Reply</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="reply.php" method="POST">
                    <input type="hidden" name="contact_id" id="contact_id">
                        <div class="form-group">
                            <b><label for="username">Sender's Mail(User)</label></b>
                            <input class="form-control" id="email" name="email" placeholder="email" type="text"
                                required readonly>
                        </div>
                        <div class="form-group">
                            <b><label for="username">Message</label></b>
                            <input class="form-control" id="msg" name="message" placeholder="Type Msg" 
                                required/>
                        </div>
                        <br>
                        <button type="submit" name="reply" class="btn btn-primary"><i class="fa fa-paper-plane"></i> 
                            Send Message</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
  <!--Add New Admin Modal -->
  <div class="modal fade" id="addNewAdminModal" tabindex="-1" role="dialog" aria-labelledby="signupModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#5578ff">
                    <h5 class="modal-title" id="signupModal">Add New Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add-admin.php" method="POST">
                        <div class="form-group">
                            <b><label for="username">Admin New Username</label></b>
                            <input class="form-control" id="username" name="username" placeholder="Username" type="text"
                                required>
                        </div>
                        <div class="form-group">
                            <b><label for="username">Admin New Password</label></b>
                            <input class="form-control" id="username" name="password" placeholder="Password" type="password"
                                required>
                        </div>
                        <br>
                        <button type="submit" name="add-admin" class="btn btn-primary"><i class="fa fa-plus"></i> Add
                            New Admin</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Add JOb Modal -->
    <div class="modal fade" id="addjobModal" tabindex="-1" role="dialog" aria-labelledby="signupModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#5578ff">
                    <h5 class="modal-title" id="signupModal">Add New Job</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add-job.php" method="POST">
                        <div class="form-group">
                            <b><label for="username">Job Title</label></b>
                            <input class="form-control" id="username" name="title" placeholder="Job Title" type="text"
                                required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <b><label for="firstName">Job Category</label></b>
                                <select class="custom-select" id="inputGroupSelect01" name="category" required>
                                    <option selected>Choose...</option>
                                    <option value="Computer">Computer</option>
                                    <option value="Mechanical">Mechanical</option>
                                    <option value="Civil">Civil</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="Chemical">Chemical</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="lastName">Job Location</label></b>
                                <select class="custom-select" id="inputGroupSelect01" name="location" required>
                                    <option selected>Choose...</option>
                                    <option value="Pune">Pune</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Chennai">Chennai</option>
                                    <option value="Banglore">Banglore</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Kolkatta">Kolkatta</option>
                                    <option value="Ahemadabad">Ahemadabad</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <b><label for="email">Job Status:</label></b>
                            <select class="custom-select" id="inputGroupSelect01" name="status" required>
                                <option selected>Choose...</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>

                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <b><label for="firstName">End Date</label></b>
                                <input type="date" class="form-control" id="age" name="date" placeholder="Age" required>
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="lastName">Graduation Year :</label></b>
                                <input type="text" class="form-control" id="education" name="grd-year"
                                    placeholder="Graduation Year" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <b><label for="lastName">Job Description :</label></b>
                            <textarea class="form-control" aria-label="With textarea" name="desc"
                                placeholder="Add Job Desc" required></textarea>
                        </div><br>
                        <button type="submit" name="add-job" class="btn btn-success"><i class="fa fa-plus"></i> Add
                            Job</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Edit JOb Modal -->
    <div class="modal fade" id="editjobModal" tabindex="-1" role="dialog" aria-labelledby="signupModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#5578ff">
                    <h5 class="modal-title" id="signupModal">Add New Job</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add-job.php" method="POST">
                        <div class="form-group">
                            <b><label for="username">Job Title</label></b>
                            <input class="form-control" id="username" name="title" placeholder="Job Title" type="text"
                                required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <b><label for="firstName">Job Category</label></b>
                                <select class="custom-select" id="inputGroupSelect01" name="category" required>
                                    <option selected>Choose...</option>
                                    <option value="Computer">Computer</option>
                                    <option value="Mechanical">Mechanical</option>
                                    <option value="Civil">Civil</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="Chemical">Chemical</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="lastName">Job Location</label></b>
                                <select class="custom-select" id="inputGroupSelect01" name="location" required>
                                    <option selected>Choose...</option>
                                    <option value="Pune">Pune</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Chennai">Chennai</option>
                                    <option value="Banglore">Banglore</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Kolkatta">Kolkatta</option>
                                    <option value="Ahemadabad">Ahemadabad</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <b><label for="email">Job Status:</label></b>
                            <select class="custom-select" id="inputGroupSelect01" name="status" required>
                                <option selected>Choose...</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>

                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <b><label for="firstName">End Date</label></b>
                                <input type="date" class="form-control" id="age" name="date" placeholder="Age" required>
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="lastName">Graduation Year :</label></b>
                                <input type="text" class="form-control" id="education" name="grd-year"
                                    placeholder="Graduation Year" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <b><label for="lastName">Job Description :</label></b>
                            <textarea class="form-control" aria-label="With textarea" name="desc"
                                placeholder="Add Job Desc" required></textarea>
                        </div><br>
                        <button type="submit" name="add-job" class="btn btn-success"><i class="fa fa-plus"></i> Add
                            Job</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- delete modal ######################################################################## -->

    <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Job Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="delete-job.php" method="POST">
                    <div class="modal-body">
                        <h2></h2>
                        <input type="hidden" name="delete_id" id="delete_id">
                        <h4>Are You Sure To Delete This Job?<i>
                                <h6>(it will permenantly deleted)</h6>
                            </i></h4>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" name="delete" class="btn btn-danger"> <i class="fas fa-trash"> </i> Yes!!
                            Delete it.</button>
                    </div>
                </form>
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

?>

            <div class="row">
                <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Welcome <b style="color: red;"><?php echo $username ?></b>, To Our Jobly Portal </h1>
                    <ul>
                        <li><i class="ri-check-line"></i> Find jobs, create trackable resumes and enrich your
                            applications</li>

                    </ul>
                    <div class="mt-3">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        <a href="#services" class="btn-get-quote">View All Jobs</a>
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
                    <p>List Of all Jobs</p>
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
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
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
                            <td><a href="edit-job.php?job_id=<?php echo $row['job_id']; ?>" class="btn btn-success"><i
                                        class="fa fa-edit"></i> Edit</a></td>
                            <td><button type="button" class="btn btn-danger deletebtn"><i class="fa fa-trash"></i>
                                    Delete</button></td>
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







    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        

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
                <a href="https://www.facebook.com/pranav.kulkarni.3557440/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/iampranav.kulkarni/" class="instagram"><i class="bx bxl-instagram"></i></a>
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
        $('.deletebtn').on('click', function() {


            $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);


        });
    });
    </script>

<script>
    $(document).ready(function() {
        $('.reply').on('click', function() {


            $('#replyModal').modal('show');
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#contact_id').val(data[1]);
            $('#email').val(data[4]);
           

        });
    });
    </script>
</body>

</html>