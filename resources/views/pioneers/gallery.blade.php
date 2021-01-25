<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gallery - Education Pioneers</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('public/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('public/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="{{asset('public/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
 <!-- Boxicons CDN -->
 <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <link href="{{asset('public/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
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

.portfolio-item{
	/*width:100%;*/
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
          <li class="{{'home' == request()->path() ? 'active' : ''}}"><a href="{{url('/index')}}">Home</a></li>
          <li class="{{'about' == request()->path() ? 'active' : ''}}"><a href="{{url('/about')}}">About</a></li>
          <li class="drop-down" class="{{'bscc' == request()->path() ? 'active' : ''}}"><a href="">Colleges</a>
            <ul>
              <li><a href="{{url('/colleges')}}">All Colleges List</a></li>
              <li><a href="{{url('/get-all-bscc-college')}}">NAAC A Grade List</a></li>      
              </li>
            </ul>
          </li>
          <li class="drop-down" class="{{'bscc' == request()->path() ? 'active' : ''}}"><a href="">Services</a>
            <ul>
              <li><a href="{{asset('/bscc')}}">Bihar Student Credit Card</a></li>          
              </li>
            </ul>
          </li>
          <li class="{{'gallery' == request()->path() ? 'active' : ''}}"><a href="{{url('/gallery')}}">Gallery</a></li>
          <li class="{{'contact' == request()->path() ? 'active' : ''}}"><a href="{{url('/contact')}}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{url('/apply-now')}}" class="get-started-btn">Apply Now</a>

    </div>
</header><!-- End Header -->

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

  
    <div class="container">
      <div class="row">
      </div>
      <div class="portfolio-menu mt-2 mb-4">
         <ul>
            <li class="btn btn-outline-dark active" data-filter="*">All</li>
            <li class="btn btn-outline-dark" data-filter=".college">Colleges</li>
            <li class="btn btn-outline-dark" data-filter=".award">Awards</li>

            <li class="btn btn-outline-dark text" data-filter=".office">Office</li>
            <li class="btn btn-outline-dark text" data-filter=".info">Information</li>
         </ul>
      </div>
      <div class="portfolio-item row">
         <div class="item college col-lg-4 col-md-6 col-12 col-sm">
            <a href="{{asset('public/assets/images/marwadi3.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
              <img class="img-fluid" src="{{asset('public/assets/images/marwadi3.jpg')}}" alt="">
              <p class="text-center font-weight-bold">Marwadi University, Rajkot, Gujrat</p>
            </a>
         </div>
         <div class="item college col-lg-4 col-md-6 col-12 col-sm">
              <a href="{{asset('public/assets/images/galgotigrnoida.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="{{asset('public/assets/images/galgotigrnoida.jpg')}}" alt="">
                  <p class="text-center font-weight-bold">C.V. Ramana College, Udaipur</p>
              </a>
         </div>
         <div class="item college col-lg-4 col-md-6 col-12 col-sm">
          <a href="{{asset('public/assets/images/nitpolytechnic.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
              <img class="img-fluid" src="{{asset('public/assets/images/nitpolytechnic.jpg')}}" alt="">
              <p class="text-center font-weight-bold">Nit Polytechnic, Nagpur</p>
              </a>
         </div>
         <div class="item college col-lg-4 col-md-6 col-12 col-sm">
              <a href="{{asset('public/assets/images/MMU, Haryana.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
              <img class="img-fluid" src="{{asset('public/assets/images/MMU, Haryana.jpg')}}" alt="">
              <p class="text-center font-weight-bold font-weight-bold">MMU, Haryna</p>
              </a>
         </div>
         <div class="item college col-lg-4 col-md-6 col-12 col-sm">
           <a href="{{asset('public/assets/images/SRM, Chennai.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
              <img class="img-fluid" src="{{asset('public/assets/images/SRM, Chennai.jpg')}}" alt="">
              <p class="text-center font-weight-bold font-weight-bold">S.R.M. Chennai</p>
              </a>
         </div>
         <div class="item college col-lg-4 col-md-6 col-12 col-sm">
              <a href="{{asset('public/assets/images/sanjivani.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
              <img class="img-fluid" src="{{asset('public/assets/images/sanjivani.jpg')}}" alt="">
              <p class="text-center font-weight-bold font-weight-bold">Sanjivani K.B.P. Polytechnic, Kopargoan</p>
              </a>
         </div>
         <div class="item college col-lg-4 col-md-6 col-12 col-sm">
              <a href="{{asset('public/assets/images/siddharth.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
              <img class="img-fluid" src="{{asset('public/assets/images/siddharth.jpg')}}" alt="">
              <p class="text-center font-weight-bold font-weight-bold">Siddharth Institute of Engineering and Technology</p>
              </a>
         </div>
         <div class="item office col-lg-4 col-md-6 col-12 col-sm">
               <a href="{{asset('public/assets/images/whatsapp1.jpeg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
              <img class="img-fluid" src="{{asset('public/assets/images/whatsapp1.jpeg')}}" alt="">
              <p class="text-center font-weight-bold">Office Image</p>
              </a>
         </div>
         <div class="item office col-lg-4 col-md-6 col-12 col-sm">
              <a href="{{asset('public/assets/images/whatsapp13.jpeg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
              <img class="img-fluid" src="{{asset('public/assets/images/whatsapp13.jpeg')}}" alt="">
              <p class="text-center font-weight-bold">Office Image</p>
              </a>
         </div>
        
         <div class="item office col-lg-4 col-md-6 col-12 col-sm">
          <a href="{{asset('public/assets/images/whatsapp4.jpeg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
              <img class="img-fluid" src="{{asset('public/assets/images/whatsapp5.jpeg')}}" alt="">
              <p class="text-center font-weight-bold">Office Image</p>
              </a>
         </div>
         <div class="item award col-lg-4 col-md-6 col-12 col-sm">
              <a href="{{asset('public/assets/images/whatsapp6.jpeg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
              <img class="img-fluid" src="{{asset('public/assets/images/whatsapp6.jpeg')}}" alt="">
              <p class="text-center font-weight-bold">Getting Award From Annand Kumar</p>
              </a>
         </div>
         <div class="item award col-lg-4 col-md-6 col-12 col-sm">
           <a href="{{asset('public/assets/images/whatsapp17.jpeg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
              <img class="img-fluid" src="{{asset('public/assets/images/whatsapp17.jpeg')}}" alt="">
              <p class="text-center font-weight-bold">Getting Award</p>
              </a>
          </div>
          <div class="item award col-lg-4 col-md-6 col-12 col-sm">
              <a href="{{asset('public/assets/images/whatsapp8.jpeg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="{{asset('public/assets/images/whatsapp8.jpeg')}}" alt="">
                  <p class="text-center font-weight-bold">Getting Award</p>
              </a>
          </div>
          <div class="item award col-lg-4 col-md-6 col-12 col-sm">
              <a href="{{asset('public/assets/images/whatsapp14.jpeg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="{{asset('public/assets/images/whatsapp14.jpeg')}}" alt="">
                  <p class="text-center font-weight-bold">Getting Award</p>
              </a>
          </div>
          <div class="item award col-lg-4 col-md-6 col-12 col-sm">
              <a href="{{asset('public/assets/images/whatsapp15.jpeg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="{{asset('public/assets/images/whatsapp15.jpeg')}}" alt="">
                  <p class="text-center font-weight-bold">Getting Award</p>
              </a>  
          </div>
          <div class="item info col-lg-4 col-md-6 col-12 col-sm">
              <a href="{{asset('public/assets/images/whatsapp9.jpeg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="{{asset('public/assets/images/whatsapp9.jpeg')}}" alt="">
                  <p class="text-center font-weight-bold">Prospectus-01</p>
              </a>
          </div>
          <div class="item info col-lg-4 col-md-6 col-12 col-sm">
              <a href="{{asset('public/assets/images/whatsapp10.jpeg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="{{asset('public/assets/images/whatsapp10.jpeg')}}" alt="">
                  <p class="text-center font-weight-bold">Prospectus-02</p>
              </a> 
          </div>
          <div class="item info col-lg-4 col-md-6 col-12 col-sm">
              <a href="{{asset('public/assets/images/whatsapp12.jpeg')}}" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="{{asset('public/assets/images/whatsapp12.jpeg')}}" alt="">
                  <p class="text-center font-weight-bold">Prospectus-03</p>
              </a>
          </div>
         
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
          <strong>Email:</strong>EducationPioneersPatna@gmail.com<br>
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
    <div class="credits">Designed by <a href="https://bootstrapmade.com/">Shivam Kumar</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="https://twitter.com/gulshan4other/status/845157580737409024" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="https://twitter.com/gulshan4other/status/845157580737409024" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
   
  </div>
</div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Bootstrap Js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script>
        $('.portfolio-menu ul li').click(function(){
         	$('.portfolio-menu ul li').removeClass('active');
         	$(this).addClass('active');
         	
         	var selector = $(this).attr('data-filter');
         	$('.portfolio-item').isotope({
         		filter:selector
         	});
         	return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
         	enabled : true
         }
         });
         });
    </script>
  <!-- Vendor JS Files -->
  <script src="{{asset('public/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/aos/aos.js')}}"></script>


<!-- Template Main JS File -->
<script src="{{asset('public/assets/js/main.js')}}"></script>
</body>

</html>