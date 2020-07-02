<?php require('includes/config.php'); 
require('admin/includes/config.php'); 



$stmt = $db->prepare('SELECT postID, postTitle,postDesc,postCont,postDate,postauth,postkey,image,cat_id,CategoryName,authname,authdesc,authimage FROM blog_posts_seo,tblcategory,tblauth WHERE postSlug = :postSlug AND blog_posts_seo.cat_id=tblcategory.id AND blog_posts_seo.auth_id=tblauth.auth_id');
$stmt->execute(array(':postSlug' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hASh_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['id']);
$st1='0';
$query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
  unset($_SESSION['token']);
else :
 echo "<script>alert('Something went wrong. PleASe try again.');</script>";  

endif;

}
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
    <title>Dailyflownews.in|<?php echo $row['postTitle'];?></title>
 
    <!-- Author Meta -->
    <meta name="author" content="Dailyflownews.in">
    <!-- Meta Description -->

    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?php echo $row['postTitle'];?>"/>
    <meta name="robots" content="index, follow,single">
    <meta property="og:description" content="<?php echo $row['postDesc'];?>"/>
    <meta property="og:url"content="https://dailyflownews.in/<?php echo $row['postTitle'];?>"/>
    <meta property="article:published_time" content=""/>
    <meta property="article:modified_time" content=""/>
    <meta property="article:author" content="dailyflownews"/>
    <meta property="article:section" content="mobile"/>
    
        <meta property="article:tag" content="<?php echo $row['postkey'];?>"/>

    
    <meta property="og:site_name" content="dailyflownews"/>

    <meta name="description" content="<?php echo $row['postDesc'];?>"/>
    
        <meta name="keywords" content="<?php echo $row['postkey'];?>"/>
    
    
    <meta property="og:image:alt" content="<?php echo $row['postTitle'];?>" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="<?php echo $row['postTitle'];?>">
    <meta name="twitter:description" content="<?php echo $row['postDesc'];?>">
    <meta name="twitter:creator" content="">
    
    <meta name="twitter:image:alt" content="<?php echo $row['postTitle'];?>" />
    <meta name="twitter:domain" content="https://dailyflownews.in">
    


<!-- link-->
    <link rel="shortcut icon" href="images/DAILYFLOWNEWS.png">
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
                    <a href="index.php" style="width: 15vh;"><img src="images/DAILYFLOWNEWS.png" alt="" title="" style=" width: 244px;" /></a>
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
                        <div class="col-lg-8 px-md-5 py-5">
                            <div class="row pt-md-4">

                                <?php	
			echo '<div>';
				echo '<h1>'.$row['postTitle'].'</h1>';
				echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<p>'.$row['postDesc'].'</p>';				
			echo '</div>';

		            echo '<p>
		              <img src="admin/postimages/'.$row['image'].'" alt="" class="img-fluid">
		            </p>';
		            echo '<p>'.$row['postCont'].'</p>';
		            echo '<div class="tag-widget post-tag-container mb-5 mt-5">';
		              echo '<div class="tagcloud">';
		                echo '<a href="#" class="tag-cloud-link">'.$row['postkey'].'</a>';
		                
		              echo '</div>
		            </div>';
		           
		           echo '<div class="about-author d-flex p-4 bg-light">
		              <div class="bio mr-5">
		                <img src="admin/authimages/'.$row['authimage'].'" alt="Image placeholder" class="img-fluid mb-4">
		              </div>
		              <div class="desc">';
		               echo '<h3>'.$row['authname'].'</h3>';
		               echo '<p>'.$row['authdesc'].'</p>';
		             echo '</div>
		            </div>';
 ?>


                                <div class="pt-5 mt-5">
                                    <div class="comment-form-wrap pt-5">
                                        <h3 class="mb-5">Leave a comment</h3>
                                        <form class="p-3 p-md-5 bg-light" name="Comment" method="post">
                                            <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
                                            <div class="form-group">
                                                <label for="name">Name *</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter your fullname">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email *</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Valid email">
                                            </div>


                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <textarea name="comment" id="message" cols="30" rows="5" class="form-control" placeholder="Comment"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                                            </div>

                                        </form>
                                    </div>
                                    <?php $query=mysqli_query($con,"select * from tblcomments");
$countposts=mysqli_num_rows($query);
?>

                                    <h3 class="mb-5 font-weight-bold"><?php echo htmlentities($countposts);?> User Comments</h3>
                                    <?php 
 $sts=0;
 $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where status='$sts' ORDER BY id DESC");
while ($row=mysqli_fetch_array($query)) {
?>

                                    <ul class="comment-list">
                                        <li class="comment">
                                            <div class="vcard bio">
                                                <img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt="Dailyflownews user comment">
                                            </div>
                                            <div class="comment-body">
                                                <h3><?php echo htmlentities($row['name']);?> </h3>
                                                <div class="meta"><?php echo htmlentities($row['postingDate']);?></div>
                                                <p><?php echo htmlentities($row['comment']);?> </p>

                                            </div>
                                        </li>


                                    </ul>
                                    <?php } ?>

                                    <!-- END comment-list -->


                                </div>

                            </div><!-- END-->
                        </div>
                        <div class="col-lg-4 sidebar ftco-animate bg-light pt-5">
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