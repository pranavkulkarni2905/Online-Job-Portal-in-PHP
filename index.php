<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Job Portal</title>
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
    <!-- =======================================================
  * Template Name: Resi - v4.7.0
  * Template URL: https://bootstrapmade.com/resi-free-bootstrap-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>

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
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                   
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                  
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="#" data-toggle="modal"
                            data-target="#signupModal">SignUp</a></li>
                    <li><a class="getstarted scrollto" href="#" data-toggle="modal"
                            data-target="#loginModal">SignIn</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->




    <!-- Login Modal -->

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #5578ff">
                    <h5 class="modal-title" id="loginModal">Login Here</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="login-user.php" method="POST">
                        <div class="text-left my-2">
                            <b><label for="username">Username</label></b>
                            <input class="form-control" id="loginusername" name="loginusername"
                                placeholder="Enter Your Username" type="text" required>
                        </div>
                        <div class="text-left my-2">
                            <b><label for="password">Password</label></b>
                            <input class="form-control" id="loginpassword" name="loginpassword"
                                placeholder="Enter Your Password" type="password" required data-toggle="password">
                        </div>
                        <button type="submit" name="login-user" class="btn btn-success">Submit</button>
                    </form>
                    <p class="mb-0 mt-1">Don't have an account? <a href="#" data-dismiss="modal" data-toggle="modal"
                            data-target="#signupModal">Sign up now</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign up Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#5578ff">
                    <h5 class="modal-title" id="signupModal">SignUp Here</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add-user.php" method="POST">
                        <div class="form-group">
                            <b><label for="username">Username</label></b>
                            <input class="form-control" id="username" name="username"
                                placeholder="Choose a unique Username" type="text" required minlength="3"
                                maxlength="15">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <b><label for="firstName">First Name:</label></b>
                                <input type="text" class="form-control" id="firstName" name="firstName"
                                    placeholder="First Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="lastName">Last name:</label></b>
                                <input type="text" class="form-control" id="lastName" name="lastName"
                                    placeholder="Last name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <b><label for="email">Email:</label></b>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter Your Email" required>
                        </div>
                        <div class="form-group">
                            <b><label for="phone">Phone No:</label></b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon">+91</span>
                                </div>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="Enter Your Phone Number" required pattern="[0-9]{10}" maxlength="10">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <b><label for="firstName">Age :</label></b>
                                <input type="tel" class="form-control" id="age" name="age" placeholder="Age" required>
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="lastName">Education :</label></b>
                                <input type="text" class="form-control" id="education" name="education"
                                    placeholder="Education" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <b><label for="password">Password:</label></b>
                                <input class="form-control" id="password" name="password" placeholder="Enter Password"
                                    type="password" required data-toggle="password" minlength="4" maxlength="21">
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="password1">Renter Password:</label></b>
                                <input class="form-control" id="cpassword" name="cpassword"
                                    placeholder="Renter Password" type="password" required data-toggle="password"
                                    minlength="4" maxlength="21">
                            </div>
                        </div>
                        <button type="submit" name="add-user" class="btn btn-success">Submit</button>
                    </form>
                    <p class="mb-0 mt-1">Already have an account? <a href="#" data-dismiss="modal" data-toggle="modal"
                            data-target="#loginModal">Login here</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Get your Dream Job With Jobly.</h1>
                    <ul>
                        <li><i class="ri-check-line"></i> Find jobs, create trackable resumes and enrich your
                            applications</li>

                    </ul>
                    <div class="mt-3">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        <a href="" class="btn-get-quote" data-toggle="modal" data-target="#signupModal">Let's Register
                            Yourself</a>
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

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <h2 class="text-center">How It Works ? </h2>
                    <div class="col-lg-4">
                        <div class="box">
                            <span>01</span>
                            <h4>Create an Account</h4>
                            <p>
                                Sign up by creating an account with required details in order to avail our services. The
                                optimal feeding of correct information will help us fine tune your job search.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box">
                            <span>02</span>
                            <h4>Search Desired Job</h4>
                            <p>Providing you with our wide database of job opportunities notified by numerous companies.
                                You can add filters to search your desired jobs and still have a list of options to
                                choose from.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box">
                            <span>03</span>
                            <h4> Send Your Resume</h4>
                            <p>Once you narrow down with the right choices, get ready to send your resumes. Forward your
                                updated resume to the optimal employers and gear up for the recruitment.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Job Seekers</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="70" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Companies</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="230" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Vaccines</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>It is a platform that joins recruiters and the job seekers to complete their goals and
                        requirements. Recruiters look for a right candidate who has the right qualification to handle
                        the responsibilities efficiently. </p>
                </div>

                <div class="row">
                    <div class="content col-xl-5 d-flex flex-column justify-content-center">
                        <img src="assets/img/services.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-xl-7">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-lg-6 d-flex align-items-stretch" data-aos="zoom-in"
                                    data-aos-delay="100">
                                    <div class="icon-box iconbox-blue">
                                        <div class="icon">
                                            <svg width="100" height="100" viewBox="0 0 600 600"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                                </path>
                                            </svg>
                                            <i class="bx bxl-dribbble"></i>
                                        </div>
                                        <h4><a href="">International Search</a></h4>
                                        <p>A perfect job search portal has an ‘International Search’ option as it allows
                                            Job Seekers freedom to search and apply for jobs available not only in
                                            his/her own country but anywhere in the world.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                                    data-aos-delay="200">
                                    <div class="icon-box iconbox-orange ">
                                        <div class="icon">
                                            <svg width="100" height="100" viewBox="0 0 600 600"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                                    d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                                </path>
                                            </svg>
                                            <i class="bx bx-file"></i>
                                        </div>
                                        <h4><a href="">Keywords</a></h4>
                                        <p>Searching by Keywords renders job search a lot easier. It allows the user to
                                            search area-specific, skill-specific, or knowledge specific keywords and
                                            he/she gets results accordingly. Further filter down can show the city or
                                            state-specific job search results.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                    data-aos-delay="300">
                                    <div class="icon-box iconbox-pink">
                                        <div class="icon">
                                            <svg width="100" height="100" viewBox="0 0 600 600"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                                    d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                                </path>
                                            </svg>
                                            <i class="bx bx-tachometer"></i>
                                        </div>
                                        <h4><a href="">Job Alerts
                                            </a></h4>
                                        <p>It sends alerts to users whenever new jobs are being posted. If this feature
                                            is not available on your online job portal development process, it would
                                            lose its purpose then.</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                    data-aos-delay="100">
                                    <div class="icon-box iconbox-teal">
                                        <div class="icon">
                                            <svg width="100" height="100" viewBox="0 0 600 600"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                                    d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                                </path>
                                            </svg>
                                            <i class="bx bx-layer"></i>
                                        </div>
                                        <h4><a href="">User Interface
                                            </a></h4>
                                        <p>The peculiarity of all perfect job search portals is easy User Interface. The
                                            way the job search website is designed is crucial to its popularity and
                                            utility. Easy and well-crafted web layout and user interface enhance its
                                            efficiency. Here custom web development solutions would help meet the
                                            objectives.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

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



        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Here Are The Team Members</p>
                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Pranav Kulkarni</h4>
                                <span>Java Full Stack Developer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Mansi Kothale</h4>
                                <span>Web Developer</span>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </section><!-- End Team Section -->



        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">How long should be my
                            resume/cover letter?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Your cover letter should be no more than a page. It should simply explain who you are
                                and why you are the best candidate very concisely. It should keep the hiring manager
                                waiting for more.

                                Your resume should also be limited to a page in length. Especially, if your work
                                experience is less than 10 years. Employers spend a fraction of seconds on a single
                                resume, hence it is important to impart strong keywords for yours to stand out.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">What is the most
                            important thing to include in a resume?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Other than your personal details and contact information, your resume should have
                                information about your work history, educational qualifications and related skills. For
                                every job applications, these needs to be tailored.

                                Add professional recognitions and accomplishments to stand out.


                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">I don’t have the required
                            experience. Should I apply for the job?
                            <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                If you think you can pull off the job requirements well, you should definitely apply to
                                the job. If you do not have the required number of years or miss any hard skill, it does
                                not rule you out as an applicant. If you’re the best candidate, years of experience
                                won’t matter in the end.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Can I wear semi formals
                            to an interview if the culture is casual?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Whatever might be the culture of the organization you are appearing for a job interview,
                                you should be properly dressed. Choose a formal suit for every interview.


                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">What are some key ways to
                            make an impact on the hiring manager?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                            <ul>
                                <li> Tell me about yourself</li>
                                <li>Where do you see yourself in 5 years from now?</li>
                                <li>Why should we hire you?</li>
                                <li>Do have any questions for us?</li>
                            </ul>
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">How long should I wait
                            before following up? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                If you do not get a response right away, wait till the interviewer’s deadline has
                                passed. If you still do not hear anything, send a brief follow up note and remind the
                                interviewer that how you fit the position well and your interest in the role.

                                You should follow-up 2 more times with an interval of 7-10 days each. If you still do
                                not get a response, you should move on.
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

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

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <form action="contact.php" method="POST" >
                        <input type="hidden" name="user_id">
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
                            
                            <div class="text-center"><button type="submit" class="btn btn-warning" name="contact">Send Message</button></div>
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
</body>

</html>