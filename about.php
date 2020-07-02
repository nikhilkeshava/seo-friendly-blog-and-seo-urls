<?php
include('admin/includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dailyflownews.in|AboutUs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/DAILYFLOWNEWS.png">
    <!-- Author Meta -->
    <meta name="author" content="Dailyflownews.in">
    <!-- Meta Description -->
    <meta name="description" content="DailyFlowNews is one of the top websites that consist of all the information that you need from news, fashion, health, motivation and so much more, with the best content available on the internet. We are here to deliver the right and best content that you will ever need. You are just one click away from gaining more knowledge.">
    <!-- Meta Keyword -->
    <meta name="keywords" content="DailyFlowNews,About DailyFlowNews,news, fashion, health, motivation,Scotish Blogger and Explorer,nikhil blog,nikhil Dailyflownews,About nikhil,About nikhil DailyFlowNews">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163814279-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-163814279-1');
</script>
<script data-ad-client="ca-pub-4522765493150456" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>

<body>
    <style type="text/css">
        img {

            width: 244px;
        }
    </style>
    <div id="colorlib-page">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="js-fullheight">
            <nav id="colorlib-main-menu" role="navigation">
                <ul>
                    <li class="colorlib-active"><a href="index.php">Home</a></li>

                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>

            <div class="colorlib-footer">
                <div id="logo">
                    <a href="index.php" style="width: 15vh;"><img src="images/DAILYFLOWNEWS.png" alt="" title="" /></a>
                </div>


                <p class="pfooter">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved from Dailyflownews.in</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </aside> <!-- END COLORLIB-ASIDE -->
        <div id="colorlib-main">
            <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
                <div class="container-fluid px-0">


                    <?php 
$pagetype='aboutus';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
                    <div class="row d-flex">
                        <div class="col-md-6 d-flex">
                            <div class="img d-flex align-self-stretch align-items-center js-fullheight" style="background-image:url(images/about.jpeg);">
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="text px-4 pt-5 pt-md-0 px-md-4 pr-md-5 ftco-animate">
                                <h2 class="mb-4"><?php echo htmlentities($row['PageTitle'])?></h2>
                                <p><?php echo $row['Description'];?></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <?php } ?>
                </div>
            </section>
        </div><!-- END COLORLIB-MAIN -->
    </div><!-- END COLORLIB-PAGE -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>