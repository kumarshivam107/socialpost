<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Courses - Education Pioneers</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('public/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('public/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!--icoFont CSS -->
  <link href="{{asset('public/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <!-- Boxicons CDN -->
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <link href="{{asset('public/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <title>Hello, world!</title>
    <style>
        body{
	margin:0;
	padding:0;
}
/* .container{
	width:90%
	margin:10px auto;
} */
.portfolio-menu{
	text-align:center;
}
.portfolio-menu ul li{
	display:inline-block;
	margin:0;
	list-style:none;
	padding:10px 15px;
	cursor:pointer;
	-webkit-transition:all 05s ease;
	-moz-transition:all 05s ease;
	-ms-transition:all 05s ease;
	-o-transition:all 05s ease;
	transition:all .5s ease;
}

.portfolio-item .item{
	/*width:303px;*/
	float:left;
	margin-bottom:10px;
}
.item img{
    height:250px;
    width:100%;
}
.co-li{
    list-style-type: none;
    padding-left: 0px;
    margin-right: 0px;
    font-size: 16px;
}
.eheading{
    font-size:18px;
    border-bottom: 10px solid #5bc0de;
    font-weight: 900;
}

    </style>
  <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="index.php" class="logo mr-auto"><img src="{{asset('public/assets/images/admis.jpg')}}" alt="" class="img-fluid"><span style="padding-top:10px;" class="admission-title">ADMISSION</span></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{'index' == request()->path() ? 'active' : ''}}"><a href="{{url('/index')}}">Home</a></li>
          <li class="{{'about' == request()->path() ? 'active' : ''}}"><a href="{{url('/about')}}">About</a></li>
          <li class="{{'course-name' == request()->path() ? 'active' : ''}}"><a href="{{url('/course-name')}}">Course</a></li>
          <li class="drop-down" class="{{'bscc' == request()->path() ? 'active' : ''}}"><a href="">Colleges</a>
            <ul>
              <li><a href="{{url('/colleges')}}">All Colleges List</a></li>
              <li><a href="{{url('/get-all-bscc-college')}}">NAAC A Grade List</a></li>      
              </li>
            </ul>
          </li>
          <li class="drop-down" class="{{'bscc' == request()->path() ? 'active' : ''}}"><a href="">Services</a>
            <ul>
              <li><a href="{{url('bscc')}}">Bihar Student Credit Card</a></li>          
              </li>
            </ul>
          </li>
          <li class="{{'gallery' == request()->path() ? 'active' : ''}}"><a href="{{url('/gallery')}}">Gallery</a></li>
          <li class="{{'contact' == request()->path() ? 'active' : ''}}"><a href="{{url('/contact')}}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{url('apply-now')}}" class="get-started-btn">Apply Now</a>

    </div>
  </header>
  <!-- End Header -->

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container about-context">
        <h2>Gallery</h2>
      </div>
      <div>
         <img src="{{asset('public/assets/images/gallery.jpg')}}"  style="width:100%; max-height: 300px;;" alt="Image 1">
    </div>
     
    </div>
    <!-- End Breadcrumbs -->

  
    <div class="container" style="min-height:40vh;">
      <div class="row">
      </div>
      <div class="portfolio-menu mt-2 mb-4">
         <ul>
            <li class="btn btn-outline-dark active" data-filter="*">All</li>
            <li class="btn btn-outline-dark" data-filter=".ugraduate">Under Graduates</li>
            <li class="btn btn-outline-dark" data-filter=".graduate" id="graduate-li">Post Graduates</li>
            <li class="btn btn-outline-dark" data-filter=".diploma" id="diploma-li">Diploma</li>
         </ul>
      </div>
      <div class="portfolio-item row">
        <!-- Under Graduates Courses-->
        <div class="item ugraduate">
            <div class="row">
              
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Engineering</p>
                    <ul class="co-li" style="list-style-type: none;">
                        <li>B.Tech. (Computer Science & Engineering)</li>
                        <li><a>B.Tech. (Information Technology & Engineering)</a></li>
                        <li><a>B.Tech. (Electrical Engineering)</a></li>
                        <li><a>B.Tech. (Electronics and Communication Engineering)</a></li>
                        <li><a>B.Tech. (Mechanical Engineering)</a></li>
                        <li><a>B.Tech. (Petroleum Engineering)</a></li>
                         <li><a>B.Tech. (Mining Engineering)</a></li>
                          <li><a>B.Tech. (Automobile Engineering)</a></li>
                           <li><a>B.Tech. (Aeronautical Engineering)</a></li>
                            <li><a>B.Tech. (Chemical Engineering)</a></li>
                             
                    </ul>
                </div>
                
                 <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Medical</p>
                    <ul class="co-li">
                        <li><a>Mbbs (4 to 5 years)</a></li>
                        <li><a>BDS (Bachelor in Dental Surgery)</a></li>
                        
                             
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Commerce & Management</p>
                    <ul class="co-li">
                        <li><a>BBA</a></li>
                        <li><a>B.Com ( Hons.)</a></li>
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Computer science and Applications</p>
                    <ul class="co-li">
                        <li><a>BCA</a></li>
                        <li><a>B.Sc. Computer Science</a></li>
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Legal Studies</p>
                    <ul class="co-li">
                        <li><a>LL.B. (3 Years)</a></li>
                        <li><a>B.A. LL.B. (5 Years Integrated)</a></li>
                    </ul>
                </div>
                
                <div class="clearfix"></div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Education</p>
                    <ul class="co-li">
                        <li><a>B.Ed.</a></li>
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Hotel Management & Tourism</p>
                    <ul class="co-li">
                        <li><a>BHMCT</a></li>
                        <li><a>B.Sc. (Hotel Management)</a></li>
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Pharmacy</p>
                    <ul class="co-li">
                        <li><a>BPT</a></li>
                        <li><a>B.Pharm</a></li>
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Allied Medical Science & Nursing</p>
                    <ul class="co-li">
                        <li><a>B.Sc. Nursing</a></li>
                    </ul>
                </div>
                
                <div class="clearfix"></div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Journalism & Mass Communication</p>
                    <ul class="co-li">
                        <li><a>BJMC (Mass Communication)</a></li>
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Home science</p>
                    <ul class="co-li">
                        <li><a>B.Sc. ( H.Sc.)</a></li>
                    </ul>
                </div>
                
                 
                
            </div>
         </div>
         <!-- Post Graduates Course -->
         <div class="item graduate" id="graduatee" style="display: none;">
            <div class="row">
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Engineering</p>
                    <ul class="co-li">
                        <li><a>M.Tech (Information Technology)</a></li>
                        <li><a>M.Tech (Electronics and Communication Engineering)</a></li>
                        <li><a>M.Tech (Mechanical Engineering)</a></li>
                        <li><a>M.Tech (Computer Science)</a></li>
                    </ul>
                </div>
                
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Medical</p>
                    <ul class="co-li">
                        <li><a>MD / MS</a></li>
                        <li><a>MDS</a></li>
                        
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Computer science and Applications</p>
                    <ul class="co-li">
                        <li><a>MCA</a></li>
                        <li><a>M.Sc. Computer Science</a></li>
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Legal Studies</p>
                    <ul class="co-li">
                        <li><a>LL.M.</a></li>
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Education</p>
                    <ul class="co-li">
                        <li><a>M.Ed.</a></li>
                    </ul>
                </div>
                
                <div class="clearfix"></div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Pharmacy</p>
                    <ul class="co-li">
                        <li><a>MPT (Proposed)</a></li>
                        <li><a>M.Pharm</a></li>
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading" >Hotel Management & Tourism</p>
                    <ul class="co-li">
                        <li><a>MHMCT</a></li>
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Commerce & Management</p>
                    <ul class="co-li">
                        <li><a>MBA</a></li>
                        <li><a>M.Com</a></li>
                    </ul>
                </div>
            
           
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Home Science</p>
                    <ul class="co-li">
                        <li><a>M.Sc. ( Home Science)</a></li>
                    </ul>
                </div>
                
                 
                
            </div>
         </div>
         <!-- Diploma -->
         <div class="item diploma" id="diplomaa" style="display: none;">
            <div class="row">
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Engineering</p>
                    <ul class="co-li">
                        <li><a>M.Tech (Information Technology)</a></li>
                        <li><a>M.Tech (Electronics and Communication Engineering)</a></li>
                        <li><a>M.Tech (Mechanical Engineering)</a></li>
                        <li><a>M.Tech (Computer Science)</a></li>
                    </ul>
                </div>
                
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Medical</p>
                    <ul class="co-li">
                        <li><a>MD / MS</a></li>
                        <li><a>MDS</a></li>
                        
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Computer science and Applications</p>
                    <ul class="co-li">
                        <li><a>MCA</a></li>
                        <li><a>M.Sc. Computer Science</a></li>
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Legal Studies</p>
                    <ul class="co-li">
                        <li><a>LL.M.</a></li>
                    </ul>
                </div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Education</p>
                    <ul class="co-li">
                        <li><a>M.Ed.</a></li>
                    </ul>
                </div>
                
                <div class="clearfix"></div>
            
                <div class="col-md-6 col-lg-3 col-10">
                    <p class="eheading">Pharmacy</p>
                    <ul class="co-li">
                        <li><a>MPT (Proposed)</a></li>
                        <li><a>M.Pharm</a></li>
                    </ul>
                </div> 
                
            </div>
         </div>
         <!-- Others-->
 
         

      </div>
   </div>

  </main><!-- End #main -->
  <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 footer-contact">
        <h3>Mentor</h3>
        <p>406, Shiv Laxmi Plaza,Main Road Kankarbagh, Patna
          <strong>Phone:</strong> +91 9155555956<br>
          <strong>Email:</strong>Educationpioneers@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-4 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="gallery.php">Gallery</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>Suscribe For Newsletter TO Stay Updated About The Counselling & Admission Process</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="mr-md-auto text-center text-md-left">
    <div class="copyright">
      &copy; Copyright <strong><span>Education Pioneers</span></strong>. All Rights Reserved
    </div>
    <div class="credits">Designed by <a href="#">Shivam Kumar</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
   
  </div>
</div>
</footer>
<!-- End Footer -->


  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>


  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Jquery CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>

    <script>
        // College Custom Js
$(document).ready(function(){
      //When Click on Graduate Course:-
      $('#graduate-li').click(function(){
        $('#graduatee').css('display','block');
      });

      //When click on Diploma Course:-
      $('#diploma-li').click(function(){
        $('#diplomaa').css('display','block');
      });

      //When Click on Others Course:-
      $('#others-li').click(function(){
        $('#otherss').css('display','block');
      });
});

        $('.portfolio-menu ul li').click(function(){
         	$('.portfolio-menu ul li').removeClass('active');
         	$(this).addClass('active');
         	
         	var selector = $(this).attr('data-filter');
         	$('.portfolio-item').isotope({
         		filter:selector
         	});
         	return  false;
         });
         
        

    </script>
 <script src="{{asset('public/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
 <script src="{{asset('public/assets/vendor/counterup/counterup.min.js')}}"></script>
 <script src="{{asset('public/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
 <script src="{{asset('public/assets/vendor/aos/aos.js')}}"></script>

 <script src="{{asset('public/assets/js/main.js')}}"></script>
</body>

</html>