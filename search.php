<?php require('includes/config.php'); 
define("ROW_PER_PAGE",6);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dailyflownews.in|All type of information</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/DAILYFLOWNEWS.png">
    <!-- Author Meta -->
    <meta name="author" content="Dailyflownews.in">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
</head>
<script data-ad-client="ca-pub-4522765493150456" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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

<!--//header-->
    <?php   
    $search_keyword = '';
    if(!empty($_POST['search']['keyword'])) {
        $search_keyword = $_POST['search']['keyword'];
    }
    $sql = 'SELECT * FROM blog_posts_seo WHERE postTitle LIKE :keyword OR postDesc LIKE :keyword  OR postkey LIKE :keyword OR postauth LIKE :keyword ORDER BY postID DESC ';
    
    /* Pagination Code starts */
    $per_page_html = '';
    $page = 1;
    $start=0;
    if(!empty($_POST["page"])) {
        $page = $_POST["page"];
        $start=($page-1) * ROW_PER_PAGE;
    }
    $limit=" limit " . $start . "," . ROW_PER_PAGE;
    $pagination_statement = $db->prepare($sql);
    $pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pagination_statement->execute();

    $row_count = $pagination_statement->rowCount();
    if(!empty($row_count)){
        $per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
        $page_count=ceil($row_count/ROW_PER_PAGE);
        if($page_count>1) {
            for($i=1;$i<=$page_count;$i++){
                if($i==$page){
                    $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current btn-warning" />';
                } else {
                    $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page btn-danger" />';
                }
            }
        }
        $per_page_html .= "</div>";
    }

    $query = $sql.$limit;
    $pdo_statement = $db->prepare($query);
    $pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    ?>
    <!--/banner-->
    
    <!--//banner-->
    <!--/main-->
    
                <?php  if ($row_count==0) {
        # code...
                            echo "<p style=color:#E9573F><b>sorry your search for:<u style=color:black>$search_keyword</u> returned zero results</b></p>";
                            echo "<p><b style=color:#4FC1E9>Suggestions<b><br>Your search item is not available on Our Website<br>Try being more specific with key words<br>Enter key word using title<br>Try search using category<br>Try again later<br></p>";
                            echo "<p><a href=\"http://www.google.com/search?q=" 
                            . $search_keyword . "\" target=\"_blank\" title=\"Look up 
                            " . $search_keyword . " on Google\" style=color:#37BC9B>Click here</a> to try the 
                            search on google</p>";
                        }
                        else{
                            echo "<p style=color:#4FC1E9><b>you searched for:<u style=color:black> $search_keyword</u></b></p>";
                            echo "<p style=color:#37BC9B><b>Results($row_count)..</b></p>";
                        }
                        ?>
                <!--left-->
             <main class="col-xs-12 col-sm-8 col-md-7 content p_r_40">
                    <div class="row">
                        <?php
                        if(!empty($result)) { 
                            foreach($result as $row) {
                                ?>


                                <div class="col-md-12">
                                    <div class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                                        <a href="<?php echo $row['postSlug']; ?>" class="img img-2" style="background-image: url(admin/postimages/<?php echo $row['image']; ?>);"></a>
                                        <div class="text text-2 pl-md-4">
                              <h3 class="mb-2"><a href="<?php echo $row['postSlug']; ?>"><?php echo $row['postTitle']; ?></a></h3>
                              <div class="meta-wrap">
                                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i><?php echo $row['postDate']; ?></span>
                                    <span><i class="fa fa-user mr-2"></i><?php echo $row['postauth']; ?></a></span>
                                </p>
                            </div>
                              <p class="mb-4"><?php echo $row['postDesc']; ?></p>
                              <p><a href="<?php echo $row['postSlug']; ?>" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                            </div>
                                    </div>
                                </div>


                                
                        <?php
                                  }
                              }
                              ?>
                              
                              <?php echo $per_page_html; ?>



                            </div><!-- END-->
                           
                        </div>
                       
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




	


