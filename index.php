<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog Details</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <!-- fontawesome css link -->
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <!-- flaticon css link -->
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <!-- bootstrap css link -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- owl carousel css link -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <!-- lightcase css link -->
  <link rel="stylesheet" href="assets/css/lightcase.css">
  <!-- main style css link -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- responsive css link -->
  <link rel="stylesheet" href="assets/css/responsive.css">

  <style>

   html{
       background:#fff !important;
   }


  .widget-menu li a{
      background:#ECF0F1  ;
      padding:10px 30px;
      border-radius:5px;
      
  }

  .widget-menu li{
      display:inline-block;
      padding:10px;
  }

  .widget-menu-image li img{
      
      width:110px;
      height:100px;
      
  }

  .widget-menu-image li{
      display:inline-block;
      padding:10px;
  }

  .widget-menu-image-fans li img{
      
      width:30px;
      height:30px;
      
  }

  .widget-menu-image-fans li{
      display:inline-block;
      
  }


  .fb-profile img.fb-image-lg{
    z-index: 0;
    width: 100%;  
    margin-bottom: 10px;
}

.fb-image-profile
{
    
    margin: -30px 10px 0px 50px;
    z-index: 9;
    width: 20%; 
}

.fb-profile-text>h3{
    position:relative;
    font-weight: 700;
    font-size:35px;
    top:150px;
    left:20px;
}
.single-blog-section{
    margin-top:20px;
}

@media (max-width:768px)
{
    
.single-blog-section{
    margin-top:60px;
}

.fb-profile-text>h3{
    position:absolute;
    font-weight: 700;
    font-size:25px;
    top:425px;
    left:50px;
    
}

.fb-image-profile
{
    margin: 145px 10px 0px 25px;
    z-index: 9;
    width: 50%; 
}
}


.single-comment-wrap .name{
    font-size:12px;
}
.single-comment-wrap .content p{
    font-size:10px;
}
.single-comment-wrap .thumb{
    width:30px;
    height:30px;
}

.single-comment-wrap .content{
    border:none;
    margin-bottom:-30px;
}
.single-comment-wrap .content p{
    margin-top:-6px;
}

.navbar-nav > li > a{
    font-size:13px;
    height:0px;
    margin-top:-15px;
    margin-bottom:5px;
}

.fa-instagram{
    background:#E6B0AA ;
    color:#fff;
    border-radius:3px;
    padding:5px 10px;
}

.fa-facebook{
    background:#2980B9 ;
    color:#fff;
    border-radius:3px;
    padding:5px 10px;
}

.fa-youtube{
    background:red ;
    color:#fff;
    border-radius:3px;
    padding:5px 10px;
}

.fa-twitter{
    background:#5DADE2  ;
    color:#fff;
    border-radius:3px;
    padding:5px 10px;
}

.socialmedia li{
    display:inline-block;
}

  </style>
</head>
<body>

  <!-- preloader start -->
  <div id="preloader">
      <div id="loader"></div>
  </div>
  <!-- preloader end -->

   <!-- header-section start  -->
  <header class="header-section">
    <div class="header-top" style="background:black;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4">
          <a class="site-logo site-title" href="#"><img src="assets/images/logo.png" alt="site-logo"></a>
          </div>
          <div class="col-lg-4">
          <h3 style="color:white; text-align:center;"> LIFE ART FESTIVAL</h3>
          </div>
          <div class="col-lg-4">
          <ul class="socialmedia" style="float:right;">
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>
          </div>
        </div>
      </div>
    </div><!--header-top end--> 
    <div class="header-bottom">
      <div class="container" >
          <nav class="navbar navbar-expand-lg" >
            <a class="site-logo site-title" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="menu-toggle"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav main-menu ml-auto">
                <li class="menu"><a href="#">Home</a>
                </li>
                <li class="menu"><a href="#">Submit</a>
                </li>
                <li class="menu"><a href="#">Forum</a>
                </li>
                <li class="menu"><a href="#">Events</a>
                </li>
                <li class="menu"><a href="#">Awards</a>
                </li>
                <li class="menu"><a href="#">Sound</a>
                </li>
                <li class="menu"><a href="#">Press</a>
                </li>
                <li class="menu"><a href="#">About</a>
                </li>
                <li class="menu"><a href="#">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
      </div>
    </div><!-- header-bottom end -->
  </header>
  <!--  header-section end  -->

  <!-- banner-section start -->
  <section class="single-banner blog-details-banner" style="height:350px;">
    <div class="banner-content-area">
      <div class="container">
        <!-- image profile-->
        <div class="fb-profile">
        <img align="left" class="fb-image-profile thumbnail" src="images/somesh.jpg" alt="Profile image example"/>
        <div class="fb-profile-text">
            <h3>Barak Obama</h3>
            <!-- <p>Girls just wanna go fun.</p> -->
        </div>
    </div>
        <!-- / image profile -->
      </div>
    </div>
  </section>
  <!-- banner-section end -->

  <!-- blog-grid-section start -->
  <section class="single-blog-section section-padding ">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="entry-single" style="background-color:#fff; box-shadow:none;">
            

          <div class="widget" >
              <ul class="widget-menu">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Photos</a></li>
                <li><a href="#">Feed</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Feed</a></li>
                
              </ul>
              <hr>

              <ul class="widget-menu-image">
                <li><img src="images/somesh.jpg" alt="image"></li>
                <li><img src="images/somesh.jpg" alt="image"></li>
                <li><img src="images/somesh.jpg" alt="image"></li>
                <li><img src="images/somesh.jpg" alt="image"></li>
                <li><img src="images/somesh.jpg" alt="image"></li>
                
              </ul>

              <hr>

              <div class="row">
                <div class="col-lg-6">
                    <span style="font-weight:bold; font-size:13px;">Community Status</span>
                    <span><img style="width:50px; height:25px; margin-left:20px;" src="https://cdn.vox-cdn.com/thumbor/PfYN2LpBpukHDDctosOXcNKF4po=/0x0:639x426/1200x800/filters:focal(0x0:639x426)/cdn.vox-cdn.com/assets/3523791/new_facebook_like_640.png"></span>
                    <span><img style="width:50px; height:15px; margin-left:5px;" src="https://nstsa.ca/wp-content/uploads/2015/07/Twitter-follow-button.png"></span>
                    <span style="border:1px solid gray; padding:2px 5px; border-radius:10px; font-size:8px;">67 Followers</span>
                    <p style="font-size:14px; font-weight:bold;">Status</p>
                    <p style="font-size:12px; margin-top:5px;">My 'KIRAN' movie Album Song `BAKHUDA` faetures in an INDI Hollywood Film 'CALL ME BROTHER OF MONOLITH FIJI PRODUCTIONS', Austia, Tx, USA</p>
                    <p style="font-size:12px; font-weight:bold; color:blue; margin-top:5px">48839 Fans</p>
                    <ul class="widget-menu-image-fans" style="margin-top:5px;">
                    <li><img src="images/somesh.jpg" alt="image"></li>
                    <li><img src="images/somesh.jpg" alt="image"></li>
                    <li><img src="images/somesh.jpg" alt="image"></li>
                    <li><img src="images/somesh.jpg" alt="image"></li>
                    <li><img src="images/somesh.jpg" alt="image"></li>
                    <li><img src="images/somesh.jpg" alt="image"></li>
                    <li><img src="images/somesh.jpg" alt="image"></li>
                    <li><img src="images/somesh.jpg" alt="image"></li>
                    <li><img src="images/somesh.jpg" alt="image"></li>
                    <li><img src="images/somesh.jpg" alt="image"></li>
                </ul>
                <p><button style="font-size:10px; background:white; border:1px solid gray; margin-top:5px;">Become a fan</button></p>
                <p style="font-size:13px; font-weight:bold; margin-top:10px;">Comments</p>
            
            <ul class="comment-list" style="margin-top:10px;">
              <li>
                <div class="single-comment-wrap d-flex">
                  <div class="thumb">
                    <img src="assets/images/blog/comment1.png" alt="comment-thumb">
                  </div>
                  <div class="content">
                    <h5 class="name">David Jacson</h5>
                    <p>There are many variations of passages of Lorem Ipsum</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="single-comment-wrap d-flex">
                  <div class="thumb">
                    <img src="assets/images/blog/comment2.png" alt="comment-thumb">
                  </div>
                  <div class="content">
                    <h5 class="name">Jena Lambert</h5>
                    <p>There are many variations of passages of Lorem Ipsum</p>
                  </div>
                </div>
              </li>
            </ul>

           

                </div>
                <div class="col-lg-6">
                    <div class="entry-single-thumb" >
                        <h6 style="margin-bottom:10px; margin-top:10px;">Featured Video</h6>
                        <img src="assets/images/blog/b1.jpg" alt="single-post-image" style="border-radius:3px;">
                        <h6 style="text-transform:capitalize; margin-top:10px; font-size:8px;">roshni || song || I am Roshni || Nikita K Chandramani || Crescendo music</h6>
                        <span style="color:#D0D3D4; font-size:10px; margin-top:-30px;">Duration- 4.16 &nbsp &nbsp Views- 1.2K &nbsp &nbsp Likes-23</span>
                        <div style="color:blue; font-size:10px;"><a href="#"><b>All videos >></b></a></div>
                    </div>
                </div>

              </div>
              <hr>


            </div>
           
          </div>
         
        </div><!-- blog-list-wrapper end -->
        <div class="col-lg-4">
          <div class="sidebar-area">
          
          
            <div class="widget">
              <h5 class="widget-title">recent blogs</h5>
              <ul class="small-post-list">
                <li class="post-item d-flex align-items-center">
                  <div class="post-thumb">
                    <a href="#"><img src="assets/images/blog/s1.jpg" alt="post-image"></a>
                  </div>
                  <div class="post-content">
                    <span class="post-date">07 December 2018</span>
                    <h6 class="post-title"><a href="#">Some Good Resources That are Available Students</a></h6>
                  </div>
                </li><!-- post-item end -->
                <li class="post-item d-flex align-items-center">
                  <div class="post-thumb">
                    <a href="#"><img src="assets/images/blog/s2.jpg" alt="post-image"></a>
                  </div>
                  <div class="post-content">
                    <span class="post-date">07 December 2018</span>
                    <h6 class="post-title"><a href="#">Some Good Resources That are Available Students</a></h6>
                  </div>
                </li><!-- post-item end -->
                <li class="post-item d-flex align-items-center">
                  <div class="post-thumb">
                    <a href="#"><img src="assets/images/blog/s3.jpg" alt="post-image"></a>
                  </div>
                  <div class="post-content">
                    <span class="post-date">07 December 2018</span>
                    <h6 class="post-title"><a href="#">Some Good Resources That are Available Students</a></h6>
                  </div>
                </li><!-- post-item end -->
                <li class="post-item d-flex align-items-center">
                  <div class="post-thumb">
                    <a href="#"><img src="assets/images/blog/s4.jpg" alt="post-image"></a>
                  </div>
                  <div class="post-content">
                    <span class="post-date">07 December 2018</span>
                    <h6 class="post-title"><a href="#">Some Good Resources That are Available Students</a></h6>
                  </div>
                </li><!-- post-item end -->
                <li class="post-item d-flex align-items-center">
                  <div class="post-thumb">
                    <a href="#"><img src="assets/images/blog/s5.jpg" alt="post-image"></a>
                  </div>
                  <div class="post-content">
                    <span class="post-date">07 December 2018</span>
                    <h6 class="post-title"><a href="#">Some Good Resources That are Available Students</a></h6>
                  </div>
                </li><!-- post-item end -->
              </ul>
            </div><!-- widget end -->
          
          </div>
        </div><!-- sidebar-area end -->
      </div>
    </div>
  </section>
  <!-- blog-grid-section end -->

  

  <!-- jquery js link -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- bootstrap js link -->
  <script src="assets/js/bootstrap.bundle.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- owl carousel js link -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- lightcase js link -->
  <script src="assets/js/lightcase.js"></script>
  <!-- waypoints js link -->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <!-- countup js link -->
  <script src="assets/js/jquery.countup.min.js"></script>
  <!-- circle-progress js link -->
  <script src="assets/js/circle-progress.min.js"></script>
  <!-- countdown js link -->
  <script src="assets/js/jquery.countdown.js"></script>
  <!-- goolg-map-activate js link -->
  <script src="assets/js/goolg-map-activate.js"></script>
  <!-- main js link -->
  <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from thesoftking.com/html/iskul/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2019 09:55:31 GMT -->
</html>