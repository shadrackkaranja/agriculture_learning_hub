<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

  <!-- Meta Tags -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="description" content="Agriculture Learning Hub" />
  <meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
  <meta name="author" content="Agriculture Learning Hub" />

  <!-- Page Title -->
  <title>Agriculture Learning Hub</title>

  <!-- Favicon and Touch Icons -->
  <link href="images/favicon.png" rel="shortcut icon" type="image/png">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
  <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

  <!-- Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/css-plugin-collections.css" rel="stylesheet" />
  <!-- CSS | menuzord megamenu skins -->
  <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet" />
  <!-- CSS | Main style file -->
  <link href="css/style-main.css" rel="stylesheet" type="text/css">
  <!-- CSS | Preloader Styles -->
  <link href="css/preloader.css" rel="stylesheet" type="text/css">
  <!-- CSS | Custom Margin Padding Collection -->
  <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
  <!-- CSS | Responsive media queries -->
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
  <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

  <!-- CSS | Theme Color -->
  <link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

  <!-- external javascripts -->
  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="js/jquery-plugin-collection.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="">
  <div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
      <div id="spinner">
        <div class="preloader-dot-loading">
          <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- start main-content -->
    <div class="main-content">
      <!-- Section: home -->
      <section id="home" class="divider parallax fullscreen layer-overlay overlay-white-9" data-bg-img="images/bg/bg1.jpg">
        <div class="display-table">
          <div class="display-table-cell">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-push-3">
                  <div class="text-center mb-60"><a href="#" class=""><img alt="" src="images/agriculture-logo.png"></a></div>

                  <?php
                  require('db.php');
                  // When form submitted, insert values into the database.
                  if (isset($_REQUEST['username'])) {
                    // removes backslashes
                    $name    = stripslashes($_REQUEST['name']);
                    //escapes special characters in a string
                    $name    = mysqli_real_escape_string($con, $name);
                    $email    = stripslashes($_REQUEST['email']);
                    $email    = mysqli_real_escape_string($con, $email);
                    $username = stripslashes($_REQUEST['username']);
                    $username = mysqli_real_escape_string($con, $username);
                    $location    = stripslashes($_REQUEST['location']);
                    $location    = mysqli_real_escape_string($con, $location);
                    $phonenumber    = stripslashes($_REQUEST['phonenumber']);
                    $phonenumber    = mysqli_real_escape_string($con, $phonenumber);
                    $password = stripslashes($_REQUEST['password']);
                    $password = mysqli_real_escape_string($con, $password);
                    $create_datetime = date("Y-m-d H:i:s");
                    $query    = "INSERT into `user_accounts` (name, email, username, location, phonenumber, password, create_datetime)
                     VALUES ('$name', '$email', '$username', '$location', '$phonenumber', '$password', '$create_datetime')";
                    $result   = mysqli_query($con, $query);
                    if ($result) {
                      echo "<script>
                        alert('Successfully Registered!');
                        window.location.href='select_course.php';
                        </script>";
                    } else {
                      echo "<script>
                        alert('Registeration unsuccessfull. Fill in missing fields!');
                        window.location.href='register.php';
                        </script>";
                    }
                  } else {
                  ?>
                    <form action="" class="register-form form-transparent" method="post">
                      <div class="icon-box mb-0 p-0">
                        <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                          <i class="pe-7s-users"></i>
                        </a>
                        <h4 class="text-theme-colored pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>

                      </div>
                      <hr>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="name">Name</label>
                          <input name="name" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Email Address</label>
                          <input name="email" class="form-control" type="email" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="location">Location</label>
                          <input name="location" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Phone Number</label>
                          <input name="phonenumber" class="form-control" type="number" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="username">Choose Username</label>
                          <input name="username" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="password">Choose Password</label>
                          <input name="password" class="form-control" type="text" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>
                      </div>
                      <div class="clear text-center pt-10">
                        <a class="text-theme-colored font-weight-600 font-12" href="login.php">Aready have an account? Login.</a>
                      </div>
                    </form>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="mb-0">Copyright ©2023 Agriculture Learning Hub. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->

  <!-- Footer Scripts -->
  <!-- JS | Custom script for all pages -->
  <script src="js/custom.js"></script>

</body>

</html>