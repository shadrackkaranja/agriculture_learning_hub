<?php
// include("auth_session.php");
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Agriculture Learning Hub" />
    <meta name="keywords" content="academy, course, education, education, elearning, learning," />
    <meta name="author" content="ThemeMascot" />

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

    <script language="javascript">
        function SelectRedirect() {
            // ON selection of section this function will work
            //alert( document.getElementById('s1').value);

            switch (document.getElementById('s1').value) {
                case "Mushroom":
                    window.location.href = "mushroom-home.php";
                    break;

                case "Pig Production":
                    window.location = "pig-production.php";
                    break;

                case "Bee Keeping":
                    window.location = "bee-keeping.php";
                    break;

                case "Black Soldier Fly":
                    window.location = "bsf.php";
                    break;

                    /// Can be extended to other different selections of SubCategory //////
                default:
                    window.location = "../"; // if no selection matches then redirected to home page
                    break;
            } // end of switch 
        }
        ////////////////// 
    </script>

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
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur elit.</p> -->
                                    <form action="" method="post" class="form-transparent clearfix">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="select_course">Select Course</label>
                                                <select id="s1" NAME="section" onChange="SelectRedirect();" class="form-control">
                                                    <option value="">Select Section</option>
                                                    <option value="Mushroom">Mushroom</option>
                                                    <option value="Pig Production">Pig Production</option>
                                                    <option value="Bee Keeping">Bee Keeping</option>
                                                    <option value="Black Soldier Fly">Black Soldier Fly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
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