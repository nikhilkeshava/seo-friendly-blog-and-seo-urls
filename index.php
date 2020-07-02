<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <title>Dailyflownews.in|All type of information</title>
    <!-- Meta Keyword -->
    <meta name="keywords" content="<?php
   try {

         $stmt = $db->query('SELECT postID, postkey FROM blog_posts_seo');
                while($row = $stmt->fetch()){

                     echo ''.$row['postkey'].'>';
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        ?>
   
   ">
    <meta name="author" content="Dailyflownews.in">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="blog" />
    <meta property="og:title" content="Dailyflownews.in|All type of information" />
    <meta property="og:description" content="DailyFlowNews is one of top websites on google and have the best authors that deliver the best content that you will ever find and in this website it consist of all the information that you need from news, fashion, health, motivation and so much more that you will love and with the best content available on the internet. We are here to deliver the right and best content that you will ever need. You are just one click away from gaining more knowledge" />
    <meta property="og:url" content="https://dailyflownews.in/" />
    <meta property="og:site_name" content="dailyflownews.in" />
    <meta property="og:image" content="images/DAILYFLOWNEWS.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="description" content="DailyFlowNews is one of top websites on google and have the best authors that deliver the best content that you will ever find and in this website it consist of all the information that you need from news, fashion, health, motivation and so much more that you will love and with the best content available on the internet. We are here to deliver the right and best content that you will ever need. You are just one click away from gaining more knowledge">


    <link rel="shortcut icon" href="images/DAILYFLOWNEWS.png">
    <!-- Author Meta -->

    <!-- Meta Description -->



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

        function gtag() {
            dataLayer.push(arguments);
        }
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
            <section class="ftco-section ftco-no-pt ftco-no-pb">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-xl-8 py-5 px-md-5">
                            <div class="row pt-md-4">
                                <?php

                               

            try {

                $stmt = $db->query('SELECT postID, postTitle, postSlug, postDesc, postDate,postauth,image,cat_id,CategoryName,authname,authdesc FROM blog_posts_seo,tblcategory,tblauth WHERE blog_posts_seo.cat_id=tblcategory.id AND blog_posts_seo.auth_id=tblauth.auth_id ORDER BY postID DESC');
                while($row = $stmt->fetch()){

                     echo '<div class="col-md-12">';
                                    echo '<div class="blog-entry ftco-animate d-md-flex">';
                                        echo '<a href="'.$row['postSlug'].'" class="img img-2" style="background-image: url(admin/postimages/'.$row['image'].');"></a>';
                                        echo '<div class="text text-2 pl-md-4">';
                                            echo '<h3 class="mb-2"><a href="'.$row['postSlug'].'">'.$row['postTitle'].'</a></h3>';
                                            echo '<div class="meta-wrap">';
                                                echo '<p class="meta">';
                                                   echo  '<span><i class="icon-calendar mr-2"></i>'.date('jS M Y H:i:s', strtotime($row['postDate'])).'</span>';
                                                    echo '<span><a href="#"><i class="icon-folder-o mr-2"></i>'.$row['CategoryName'].'</a></span>';
                                                    echo '<span><i class="icon-comment2 mr-2"></i>'.$row['authname'].'</span>';
                                              echo  '</p>';
                                            echo '</div>';
                                            echo '<p class="mb-4">'.$row['postDesc'].'</p>';
                                            echo '<p><a href="'.$row['postSlug'].'" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>';
                                        echo '</div>
                                    </div>
                                </div>';
                    


                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        ?>

                            </div><!-- END-->
                            <div class="row">
                                <div class="col">
                                    <div class="block-27">

                                        <ul>
                                            <li><a href="#">&lt;</a></li>
                                            <li class="active"><span>1</span></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&gt;</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
                            <div class="sidebar-box pt-md-4">

                                <form class="search-form" action="search.php" method="post" name="form">
                                    <div class="form-group">

                                        <input class="form-control" name="search[keyword]" type="search" placeholder="Search and hit enter...">
                                    </div>
                                    <button class="btn link-btn btn-rounded btn-small" type="submit" name="submit"><i class="fa fa-search"></i>Search<span class="icon icon-search"></span></button>
                                </form>
                            </div>
                            <div class="fb_like">
                                <div class="title-holder">
                                    <h3 class="title">Facebook</h3>
                                    <span class="title-shape title-shape-dark"></span>
                                </div>
                                <!--  /.End of title -->
                                <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/dailyflownews/" data-tabs="timeline" data-width="268" data-height="214" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=268&amp;height=214&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fdailyflownews%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=268"><span style="vertical-align: bottom; width: 268px; height: 214px;"><iframe name="f153f226fc69b8" width="268px" height="214px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.12/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df14afc2153fc4b4%26domain%3Ddailyflownews.in%26origin%3Dhttps%253A%252F%252Fdailyflownews.in%252Ff6820dfcf14088%26relation%3Dparent.parent&amp;container_width=268&amp;height=214&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fdailyflownews%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=268" style="border: none; visibility: visible; width: 268px; height: 214px;" class=""></iframe></span></div>
                            </div>
                            <?php 
require('admin/includes/config.php');
 $query=mysqli_query($con,"select * from blog_posts_seo where cat_id=2");
  $query1=mysqli_query($con,"select * from blog_posts_seo where cat_id=3");
   $query2=mysqli_query($con,"select * from blog_posts_seo where cat_id=4");
    $query3=mysqli_query($con,"select * from blog_posts_seo where cat_id=5");
     $query4=mysqli_query($con,"select * from blog_posts_seo where cat_id=6");
      $query5=mysqli_query($con,"select * from blog_posts_seo where cat_id=7");
       $query6=mysqli_query($con,"select * from blog_posts_seo where cat_id=8");
$countposts=mysqli_num_rows($query);
$countposts1=mysqli_num_rows($query1);
$countposts2=mysqli_num_rows($query2);
$countposts3=mysqli_num_rows($query3);
$countposts4=mysqli_num_rows($query4);
$countposts5=mysqli_num_rows($query5);
$countposts6=mysqli_num_rows($query6);
?>




                            <div class="sidebar-box ftco-animate">
                                <h3 class="sidebar-heading">Categories</h3>
                                <ul class="categories">
                                    <li><a href="#">Fashion <span>(<?php echo htmlentities($countposts);?>)</span></a></li>
                                    <li><a href="#">Travel <span>(<?php echo htmlentities($countposts1);?>)</span></a></li>
                                    <li><a href="#">Health and Fitness <span>(<?php echo htmlentities($countposts2);?>)</span></a></li>
                                    <li><a href="#">Entertainment<span>(<?php echo htmlentities($countposts3);?>)</span></a></li>
                                    <li><a href="#">Food<span>(<?php echo htmlentities($countposts4);?>)</span></a></li>
                                    <li><a href="#">Technologies<span>(<?php echo htmlentities($countposts5);?>)</span></a></li>
                                    <li><a href="#">Motivation<span>(<?php echo htmlentities($countposts6);?>)</span></a></li>
                                </ul>
                            </div>

                            <div class="sidebar-box ftco-animate">
                                <h3 class="sidebar-heading">Popular Articles</h3>

                                <?php

                               

            try {

                $stmt = $db->query('SELECT postID, postTitle, postSlug, postDesc, postDate,postauth,image,cat_id,CategoryName FROM blog_posts_seo,tblcategory WHERE blog_posts_seo.cat_id=tblcategory.id ORDER BY postID ASC LIMIT 4');
                while($row = $stmt->fetch()){
echo '<div class="block-21 mb-4 d-flex">';
                                    echo '<a  href="'.$row['postSlug'].'" class="blog-img mr-4" style="background-image: url(admin/postimages/'.$row['image'].');"></a>';
                                   echo '<div class="text">';
                                        echo '<h3 class="heading"><a href="'.$row['postSlug'].'">'.$row['postTitle'].'</a></h3>';
                                        echo '<div class="meta">';
                                            echo '<div><a href="#"><span class="icon-calendar"></span> '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</a></div>';
                                            echo '<div><a href="#"><span class="icon-person"></span>'.$row['postauth'].'</a></div>';
                                           echo '<div><a href="#"><span class="icon-chat"></span> '.$row['CategoryName'].'</a></div>';
                                       echo '</div>
                                    </div>
                                </div>';


                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        ?>





                            </div>

                            <div class="sidebar-box ftco-animate">
                                <h3 class="sidebar-heading">Tag Cloud</h3>
                                <?php

                               

            try {

                $stmt = $db->query('SELECT postID, postkey FROM blog_posts_seo ORDER BY postID ASC LIMIT 4');
                while($row = $stmt->fetch()){
                     echo '<ul class="tagcloud">';
                    echo '<a href="#" class="tag-cloud-link">'.$row['postkey'].'</a>';
                    
                 echo '</ul>';


                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        ?>

                            </div>


                            <div class="sidebar-box ftco-animate">
                                <h3 class="sidebar-heading">Archives</h3>
                                <?php

                               

            try {

                $stmt = $db->query('SELECT postID, postDate FROM blog_posts_seo ORDER BY postID ASC LIMIT 4');
                while($row = $stmt->fetch()){
                     echo ' <ul class="categories">';
                    echo '<li><a href="#">'.$row['postDate'].'</a><li>';
                    
                 echo '</ul>';


                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        ?>

                            </div>



                        </div><!-- END COL -->
                    </div>
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