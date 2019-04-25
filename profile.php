<!DOCTYPE html>
<?php 	session_start();?>
<html lang="en">
  <head>
    <title>StuddyBuddy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.html">StuddyBuddy</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#programs-section" class="nav-link">Your Posts</a></li>
                <li><a href="#courses-section" class="nav-link">Buddies</a></li>
                <li><a href="#teachers-section" class="nav-link">Requests</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta">
				<form action="admin_code/logout.php" class="nav-link" method="post">
				<div class="form-group">
                    <input type="submit" name="submit" id="submit" value="LogOut" class="btn btn-primary">
                </div>
				</form>
				</li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section single-cover" id="home-section">
      
      <div class="slide-1 " style="background-image: url('images/img_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <script type="text/javascript">
				  var rows2 = JSON.parse('<?php include "admin_code/displayprofile.php" ?>');
					var name1 = rows2[0].name;
					console.log(name1);
					document.write('<h1 data-aos="fade-up" data-aos-delay="0">'+name1+'</h1>');
					</script>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5">

            <div class="mb-5">
				<h3 class="mb-5"> Buddies Posts</h3>
              <ul class="comment-list">
                <script type="text/javascript">
				var rows7 = JSON.parse('<?php include "admin_code/displaybuddypost.php" ?>');
				for (var key=0;key<rows7.length;key++) {  
				document.write('<li class="comment">'+
				'<div class="vcard bio">'+
                    '<img src="images/img_5.jpg" alt="Image placeholder">'+
                  '</div>'+
                  '<div class="comment-body">'+
				  '<h1>'+rows7[key].name+'</h1>'+
                    '<h3>'+rows7[key].title+'</h3>'+
                    '<div class="meta">'+rows7[key].link+'</div>'+
					'<p>'+rows7[key].summary+'</p>'+
                    '<p>'+rows7[key].description+'</p>'+
                  '</div>'+
                '</li>');
				}
				</script>
                
              </ul>
            </div>
			
			<div class="comment-form-wrap pt-5">
                <h3 class="mb-5">New Post</h3>
                <form action="admin_code/newpost.php" class="p-5 bg-light" method="post">
                  <div class="form-group">
                    <label for="name">Title*</label>
					<input type="hidden" name="email" value='<script type="text/javascript"> document.write(rows2[0].email);</script>'>
                    <input type="text" class="form-control" name="title">
                  </div>
                  <div class="form-group">
                    <label for="email">Summary*</label>
                    <input type="text" class="form-control" name="summary">
                  </div>
                  <div class="form-group">
                    <label for="website">Link</label>
                    <input type="url" class="form-control" name="link">
                  </div>

                  <div class="form-group">
                    <label for="message">Description</label>
                    <textarea  name="desc" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post" class="btn btn-primary">
                  </div>
                </form>
              </div>
		<div id="programs-section">
			
            <div class="pt-5">
              <h3 class="mb-5"> Your Posts</h3>
              <ul class="comment-list">
                <script type="text/javascript">
				var rows3 = JSON.parse('<?php include "admin_code/displayyourpost.php" ?>');
				for (var key=0;key<rows3.length;key++) {  
				document.write('<li class="comment">'+
				'<div class="vcard bio">'+
                    '<img src="images/img_1.jpg" alt="Image placeholder">'+
                  '</div>'+
                  '<div class="comment-body">'+
                    '<h3>'+rows3[key].title+'</h3>'+
                    '<div class="meta">'+rows3[key].link+'</div>'+
					'<p>'+rows3[key].summary+'</p>'+
                    '<p>'+rows3[key].description+'</p>'+
                  '</div>'+
                '</li>');
				}
				</script>
                
              </ul>
              <!-- END comment-list -->
              
              
            </div>


		</div>
          </div>
		  	
		  <div class="col-lg-4 pl-lg-5">

            <div class="mb-5 text-center border rounded course-instructor">
              <h3 class="mb-5 text-black text-uppercase h6 border-bottom pb-3">Profile Description</h3>
              <div class="mb-4 text-center">
                <img src="images/person_2.jpg" alt="Image" class="w-25 rounded-circle mb-4">  
                <script type="text/javascript">
					document.write('<h3 class="h5 text-black mb-4">University : '+rows2[0].university+'</h3>');
                	document.write('<p> Major : '+rows2[0].major+'</p>');
					document.write('<p> Phone : '+rows2[0].phone+'</p>');
					document.write('<p> Account Type : '+rows2[0].type+'</p>');
					document.write('<p> Email : '+rows2[0].email+'</p>');
				</script>
              </div>
            </div>

          </div>
          
        </div>
      </div>
    </div>

    <div class="site-section courses-title bg-dark" id="courses-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Make Buddies</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade" data-aos-delay="100">
      <div class="container">
        <div class="row">

        <script type="text/javascript">		
			   var rows4 = JSON.parse('<?php include "admin_code/display.php" ?>');
			   document.write('<div class="owl-carousel col-12 nonloop-block-14">');	
			   for (var key=0;key<rows4.length;key++) {
			   var name = rows4[key].name;
			   var university = rows4[key].university;
			   var major = rows4[key].major;
			   document.write('<div class="course bg-white h-100 align-self-stretch">' +
			   ' <figure class="m-0">' + 
			   '  <a href="course-single.html"><img src="images/ava4.jpg" alt="Image" class="img-fluid"></a>' +
			   '</figure>' + 
			   '<div class="course-inner-text py-4 px-4">');
			   document.write('<h3>' + name + '</h3>'); 
			   document.write('<p>'+university+'</p>');
			   document.write('<p>'+major+'</p>');
			   document.write('</div>');
			   document.write('<form action="admin_code/request.php" class="p-5 bg-light" method="post">'+
                  '<input type="hidden" name="email" value=' + rows2[0].email + '>'+
				  '<input type="hidden" name="emailto" value=' + rows4[key].email + '>'+
				  '<div class="form-group">'+
                  '  <input type="submit" value="Send Request" class="btn btn-primary">'+
                  '</div>'+
               ' </form>');
				 document.write('</div>');
			  
			  }
			   document.write('</div>');
		</script>  
        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Prev</button>
            <button class="customNextBtn btn btn-primary m-1">Next</button>
          </div>
        </div>
      </div>
    </div>
	
	<div class="site-section courses-title bg-dark" id="teachers-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Requests</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade" data-aos-delay="100">
      <div class="container">
        <div class="row">

        <script type="text/javascript">		
			   var rows6 = JSON.parse('<?php include "admin_code/checkreq.php" ?>');
			   document.write('<div class="owl-carousel col-12 nonloop-block-14">');	
			   for (var key=0;key<rows6.length;key++) {
			   var name = rows6[key].name;
			   var university = rows6[key].university;
			   var major = rows6[key].major;
			   document.write('<div class="course bg-white h-100 align-self-stretch">' +
			   ' <figure class="m-0">' + 
			   '  <a href="course-single.html"><img src="images/ava4.jpg" alt="Image" class="img-fluid"></a>' +
			   '</figure>' + 
			   '<div class="course-inner-text py-4 px-4">');
			   document.write('<h3>' + name + '</h3>'); 
			   document.write('<p>'+university+'</p>');
			   document.write('<p>'+major+'</p>');
			   document.write('</div>');
			   document.write('<form action="admin_code/acceptreject.php" class="p-5 bg-light" method="post">'+
				'<input type="hidden" name="emailfor" value=' + rows2[0].email + '>'+
				  '<input type="hidden" name="emailfrom" value=' + rows6[key].email + '>'+
                  '<center><div class="form-group">'+
                  '<input type="submit" name="submit" value="Accept" class="btn btn-primary">'+
				  '</div><div class="form-group">'+
				  '<input type="submit" name="cancel" value="Reject" class="btn btn-primary">'+
				  '</div></center>'+
               ' </form>');
				 document.write('</div>');
			  
			  }
			   document.write('</div>');
		</script>  
        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Prev</button>
            <button class="customNextBtn btn btn-primary m-1">Next</button>
          </div>
        </div>
      </div>
    </div>
     
    <footer class="footer-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About StuddyBuddy</h3>    
				<p>You can never be overdressed or overeducated ~By Oscar Wilde. This platform is an initiative by Zimple & Shivani to share educational knowledge among students over the barriers of physical boundaries.</p>      
			</div>  

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Buddies</a></li>
              <li><a href="#">Your Posts</a></li>
              <li><a href="#">Requests</a></li>
            </ul>
          </div>

          

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>