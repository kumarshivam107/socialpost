@extends('pioneers.layouts.master')
@section('content')

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<title>Education Pioneers</title>
<style>
  .login-popup{
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 1099;
    background-color:rgba(0,0,0,0.6);
    visibility: hidden;
    opacity: 0;
    transition: all 1s ease;
  }
  .login-popup.show{
    visibility:visible;
    opacity: 1;
  }
  .login-popup .box{
    background-color:#ffffff;
    width: 750px;
    position: absolute;
    left: 50%;
    top:50%;
    transform:translate(-50%,-50%);
    display: flex;
    flex-wrap: wrap;
    opacity: 0;
    margin-left: 50px;
    transition: all 1s ease;

  }
  .login-popup.show .box{
    opacity: 1;
    margin-left: 0;
  }
  .login-popup .box .img-area{
    flex:0 0 50%;
    max-width: 50%;
    position: relative;
    overflow: hidden;
    padding:30px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .login-popup .box .img-area h1{
    font-size: 30px;
  }
  .login-popup .box .img-area .img{
    position: absolute;
    left:0;
    top:0;
    width: 100%;
    height: 100%;
    background-image: url('{{asset('public/assets/images/about-us.jpg')}}');
    background-size: cover;
    background-position: center;
    animation: zoomInOut 7s linear infinite;
    z-index: -1;

  }
  @keyframes zoomInOut{
    0%,100%{
      transform: scale(1);
    }
    50%{
      transform: scale(1.1);
    }
  }
  .login-popup .box .form{
    flex:0 0 50%;
    max-width: 50%;
    padding:40px 30px;
  }

  .login-popup .box .form h1{
    color:#000000;
    font-size: 30px;
    margin:0 0 30px;
  }
  .login-popup .box .form .form-control{
    height: 45px;
    margin-bottom: 30px;
    width: 100%;
    border:none;
    border-bottom:1px solid #cccccc;
    font-size: 15px;
    color:#000000;
  }
  .login-popup .box .form .form-control:focus{
    outline: none;
  }
  .login-popup .box .form label{
    font-size: 15px;
    color:#555555;
  }
  .login-popup .box .form .btn{
    width: 100%;
    margin-top:40px;
    height: 45px;
    border:none;
    border-radius: 25px;
    font-size: 15px;
    text-transform: uppercase;
    color:#ffffff;
    cursor: pointer;
  }
  .login-popup .box .form .btn:focus{
    outline: none;
  }

  .login-popup .box .form .close{
    position: absolute;
    right: 10px;
    top:0px;
    font-size: 30px;
    cursor: pointer;
  }

  /*responsive*/
  @media(max-width: 767px){
    .login-popup .box{
      width: calc(100% - 30px);
    }
    .login-popup .box .img-area{
      display: none;
    }
    .login-popup .box .form{
      flex: 0 0 100%;
          max-width: 100%;
    }
  }
  .login-popup .box .form .form-control{
    margin-bottom:0px!important;
    height:auto;
  }

  .accordion a {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    padding: 1rem 3rem 1rem 1rem;
    color: #7288a2;
    font-size: 1.15rem;
    font-weight: 400;
    border-bottom: 1px solid #e5e5e5;
  }
  .accordion a:hover,
  .accordion a:hover::after {
    cursor: pointer;
    color:#5fcf80;
  }
  .accordion a:hover::after {
    border: 1px solid #5fcf80;
  }
  .accordion a.active {
    color: #5fcf80;
    border-bottom: 1px solid #5fcf80;
  }
  .accordion a::after {
    font-family: 'Ionicons';
    content: '\f218';
    position: absolute;
    float: right;
    right: 1rem;
    font-size: 1rem;
    color: #7288a2;
    padding: 5px;
    width: 30px;
    height: 30px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 1px solid #7288a2;
    text-align: center;
  }
  .accordion a.active::after {
    font-family: 'Ionicons';
    content: '\f209';
    color:#5fcf80;
    border: 1px solid #5fcf80;
  }
  .accordion .content {
    opacity: 0;
    padding: 0 1rem;
    max-height: 0;
    border-bottom: 1px solid #e5e5e5;
    overflow: hidden;
    clear: both;
    -webkit-transition: all 0.2s ease 0.15s;
    -o-transition: all 0.2s ease 0.15s;
    transition: all 0.2s ease 0.15s;
  }
  .accordion .content p {
    font-size: 1rem;
    font-weight: 300;
  }
  .accordion .content.active {
    opacity: 1;
    padding: 1rem;
    max-height: 100%;
    -webkit-transition: all 0.35s ease 0.15s;
    -o-transition: all 0.35s ease 0.15s;
    transition: all 0.35s ease 0.15s;
  }

  /* BSCC at a glance */
  #demo {
  height:100%;
  position:relative;
  overflow:hidden;
}


.green{
  background-color:#6fb936;
}
        .thumb{
            margin-bottom: 30px;
        }
        
        .page-top{
            margin-top:85px;
        }

   
img.zoom {
    width: 100%;
    height: 300px;
    border-radius:5px;
    object-fit:cover;
    
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
        
 
.transition {
    -webkit-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
    .modal-header {
   
     border-bottom: none;
}
    .modal-title {
        color:#000;
    }
    .modal-footer{
      display:none;  
    }
</style>
@include('pioneers.layouts.header')
<!-- End Hero -->
<div class="mt-5 pt-2">
  <div id="carouselExampleCaptions pt-5" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <!-- <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="max-height:80vh;">
        <img src="{{asset('public/assets/img/slider_image2.jpg')}}" class="d-block w-100" style="max-height:80vh;" alt="...">
        <div class="carousel-caption d-none d-md-block">
      <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" style="margin-bottom:30vh;">Get your <span>Education</span> today!</h1>
        </div>
      </div>
      <div class="carousel-item" style="max-height:80vh;">
        <img src="{{asset('public/assets/img/slider_image1.jpg')}}"  class="d-block w-100" style="max-height:80vh;" alt="...">
        <div class="carousel-caption d-none d-md-block">
      <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" style="margin-bottom:30vh;">Get your <span>Education</span> today!</h1>
        </div>
      </div>
      <div class="carousel-item" style="max-height:80vh;">
        <img src="{{asset('public/assets/img/slider_image3.jpg')}}"  class="d-block w-100" style="max-height:80vh;" alt="...">
        <div class="carousel-caption d-none d-md-block">
           <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" style="margin-bottom:30vh;">Get your <span>Education</span> today!</h1>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about text-justify">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('public/assets/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Education Pioneers Consultancy With 15 Years Of Experience.</h3>
            <p class="font-italic">
              We Open The World Of Global Education For Students. We want to help students realise their dreams of becoming a successful professional, a successful person bty assisting them in the top most and best Universities which matches their Aspirations and Budget.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Get Direct & Confirm Admisssion In Top Colleges.</li>
              <li><i class="icofont-check-circled"></i> Providing Best Assistance For Getting BSCC.</li>
              <li><i class="icofont-check-circled"></i> Detail Information Of Placement Record & Infrasture About NAAC A Grade Colleges In India.<li>
            </ul>
            <p>We also provide the students for not only to taking admission in Best College but also provide him assistance for taking benefit for various goverment schemes like Bihar Student Credit Card Scheme, Schlorship Scheme and Various Other Schemes.</p>
            </p>
            <a href="about.html" class="learn-more-btn">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">2500</span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">56</span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">11</span>
            <p>States</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">08</span>
            <p>Counsellers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Education Pioneers?</h3>
              <p class="text-justify">
                Education Pioneers Having Experience Of 15 Years In The Field Of Educational Society. From Last 15 years, Our Best Counsellers Are Guiding All The Students Towards Thier Education Carrer and Guided to Get Top COlleges According to Thier Rank Or Marks. 
              </p>
              <div class="text-center">
                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>15 Years Of Experience</h4>
                    <p>We have 15 Years Of Experience to Guiding To Students Towards Thier Dreams.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Best Counselling Team</h4>
                    <p>We Have The Best & Dedicated Counselling Team According To Different Courses.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Wide Range Of Colleges</h4>
                    <p>We Guide Towards Different  Colleges According to Marks and Thier Ranks.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Colleges</h2>
          <p>Popular Colleges</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{asset('public/assets/images/marwadi.jpg')}}" style="width:100%; height:160px;" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Gujrat,Rajkot</h4>
                  <p class="price">NAAC A+</p>
                </div>

                <h3><a href="{{url('/marwadi-university')}}" class="stretched-link">Marwadi University</a></h3>
                <p class="text-justify">Marwadi University is a private university located in Rajkot, Gujarat, India. It was established in 2016 by the Marwadi Education Foundation.</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="{{asset('public/assets/img/svcop.jpg')}}" style="width:100%; height:160px;"  alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Chittor, A.p.</h4>
                  <p class="price">NAAC A</p>
                </div>

                <h3><a href="{{url('/venkateshwara-group-of-institutions')}}" class="stretched-link">Sri Venketswara College, Chittor</a></h3>
                <p class="text-justify">Sri Venkateswara Group of Institutions (SVGEI) comprises twenty-three (23) colleges promoted by Srinivasa Educational Academy spread all over Andhra Pradesh.</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="{{asset('public/assets/img/MIT, Pune.jpg')}}" style="width:100%; height:160px;"  alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Ambala, Haryana</h4>
                  <p class="price">NAAC A</p>
                </div>

                <h3><a href="{{url('/maharshi-markandey-university')}}" class="stretched-link">MMU, Haryana</a></h3>
                <p>Maharishi Markandeshwar University, Mullana, officially Maharishi Markandeshwar, Mullana, is a deemed university at Mullana near Ambala in the state of Haryana, India</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div> 

          <!-- Nit Polytechnic -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="{{asset('public/assets/images/nitpolytechnic.jpg')}}" style="width:100%; height:160px;"  alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Nagpur, Maharastra</h4>
                  <p class="price">NBA</p>
                </div>

                <h3><a href="{{url('/nit-polytechnic')}}" class="stretched-link">NIT Polytechnic, Maharastra</a></h3>
                <p class="text-justify">Nit Polytechnic, Nagpur, Maharastra Is NBA Accrediated Leading Institute of Maharastra Situated in Nagpur Run and Managed By Shri Sai Shikshan Sanstha.</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div> 

          <!-- Sanjivani Colleges-->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="{{asset('public/assets/images/sanjivani.jpg')}}" style="width:100%; height:160px;"  alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Kopargaon, Maharastra</h4>
                  <p class="price">NBA</p>
                </div>

                <h3><a href="{{url('/sanjivani-polytechnic-college-Kopargaon')}}" class="stretched-link">S.K.B.P. Polytechnic, Maharastra</a></h3>
                <p class="text-justify">Sanjivani K.B.P. set a benchmark of standard academia. Sanjivani Group of Institutions, kopargaon has come a long way since gaining Institutes title in 1983.</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div> 

          <!-- Dhanlaxmi College -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="{{asset('public/assets/images/dhanlaxmi.jpg')}}" style="width:100%; height:160px;"  alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Chennai, Maharastra</h4>
                  <p class="price">NBA</p>
                </div>

                <h3><a href="{{url('/DHANALAKSHMI-SRINIVASAN-ENGINEERING-COLLEGE')}}" class="stretched-link">DSEC, Chennai</a></h3>
                <p class="text-justify">Dhanalakshmi Srinivasan Engineering College Established in the year 2001, the college strives to impart quality education in the field of engineering and technology through a stimulating and innovative environment. .</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div> 
          <!-- End Colleges Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Counsellers</h2>
          <p>Our Professional Counsellers</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('public/assets/images/gulshan.jpg')}}" style="width:100%; height:350px;" alt="">
              <div class="member-content">
                <h4>Gulshan Kumar</h4>
                <span>5+ Years Of Experience</span>
                <p>
                  Mr. Gulshan Kumar is Chairman Of Education Pioneers. He Has the 15 Years Of Experience for Working For Different College and he has the Best View of All Over India Colleges, Thier Infrastructure and Quality Education.
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('public/assets/images/shivam2.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Shivam Kumar</h4>
                <span>3+ Years Of Experience</span>
                <p>Mr. Shivam Kumar is a Carrer Counseller and Continuously Guided Students Towards Right Carrer Goal and help all the students to take bernfit of Different Carrer Options.
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('public/assets/images/dilip.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Manish Singh</h4>
                <span>2+ Years Experience</span>
                <p>
                  Mr. Mainsh Singh 2 Years Of Experience In The Field OF Educational Consultancy and Guided Studens Towards Thier Dreams.
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->
<!-- FAQ Section -->

<section style="background-color: #f6f7f6;">
  <div class="container">
      <div class="section-title">
        <h2>FAQ</h2>
        <p style="font-size:24px;">Frequently Asked Questions</p>
      </div>
  
    <div class="accordion">
      <div class="accordion-item">
        <a>Why Education Pioneers?</a>
        <div class="content">
          <p>Education Pioneers Guided Students In the Right Way According to thier Marks and Rank to the Budget Range Colleges. Education Pioneers also help students to guide towards to take benefit of different schemes like BIhar Student Credit Card and Much More....</p>
        </div>
      </div>
      <div class="accordion-item">
        <a>How Can I Contact With Education Pioneers?</a>
        <div class="content">
          <p>For Contacting the Education Pioneers, You Must Personally Visit the Office Which Address is Above Bank Of India, Near Coloy More (Salimar Sweets), Kankarbagh, Patna-800020. Alternatively You May Contact on Whatsapp (+91 8986344241) and Email: krshivam4545@gmaill.com</p>
        </div>
      </div>
      <div class="accordion-item">
        <a>What is Bihar Student Credit Card Scheme ?</a>
        <div class="content">
          <p>Bihar Student Credit Card Scheme is Runned and Managed By Bihar Goverment Where Bihar Goverment Will Finance Up to 4 Lakhs For All of those Students Which Will Take Admission in Any Colleges Which is Obtained By NAAC A Grade or Accrediated By NBA, or in Within 200 Overall Ranking in India of NIRF. For Detailed Knowledge of Bihar Student Credit Card, You may Visit our Bihar Student Credit Card Page by <span style="color:blue;" id="bscc-visit">Clicking Here</span></p>
        </div>
      </div>
      <div class="accordion-item">
        <a>What id NAAC ?</a>
        <div class="content">
          <p>The Full Name of NAAC is National Assessment and Accreditation Council. The National Assessment and Accreditation Council is a government organization that assesses and accredits Higher Education Institutions in India. It is an autonomous body funded by University Grants Commission and headquartered in Bangalore.</p>
        </div>
      </div>
      <div class="accordion-item">
        <a>How Can i get Bihar Student Credit Card Approved Colleges?</a>
        <div class="content">
          <p>Bihar Goverment Will Set a Cateria For Colleges to Benfit of Bihar Student Credit Card Yojana. You Can Easily Get List of Colleges By State Wise By <span style="color:blue;" id="collgelist-visit">Clicking Here<span></p>
        </div>
      </div>
    </div>
    
  </div>
</section>
<!-- Testimonial Section-->
<section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('public/assets/images/ajit.jpg')}}" class="testimonial-img" alt="">
              <h3>Shivam Kumar</h3>
              <h4> Student</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               Best Consultancy Which Provide Us Guidance to Me to Get Admission In Marwadi University and Provide Me Full Support Of Geeting Bihar Student Credit Card.
                <i class="bx bxs-quote-alt-right quote-icon-right')}}"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('public/assets/images/suman.jpg')}}" class="testimonial-img" alt="">
              <h3>Suman Kumari</h3>
              <h4>Student</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Best Consultancy Which Provide Us Guidance to Me to Get Admission In Maharshi Markendeswar University, Ambala and Provide Me Full Support Of Geeting BSCC.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('public/assets/images/ajit.jpg')}}" class="testimonial-img" alt="">
              <h3>Ajit Kumar</h3>
              <h4>Student</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Best Consultancy In Patna
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('public/assets/images/dilip.jpg')}}" class="testimonial-img" alt="">
              <h3>Dilip Kumar</h3>
              <h4>Teacher</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Best Consultancy And Provide Best Support and Staff is Very Supportive and Dedicated.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

         

        </div>

      </div>
</section>

<!--- Pop Up Box-->
  <div class="login-popup pt-5">
  	 <div class="box">
  	 	 <div class="img-area">
  	 	 	<div class="img">
  	 	 	</div>
  	 	 	<h1>Your Logo</h1>
  	 	 </div>
  	 	 <div class="form">
  	 	 	<div class="close">&times;</div>
          <p class="pl-5" style="font-weight:bold; color: #002147;     text-shadow: 2px 2px 8px; 
     font-size: 16px; text-align:center!important;">Call @+91-7717416198</p>
        <form>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="name" name="name" placeholder="Enter Your Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Id">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile Number">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Course</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="course" name="course" placeholder="Enter Your Course">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-success btn-block">Request Call Back</button>

            </div>
          </div>
        </form>
  	 	 </div>
  	 </div>
  </div>
<!-- Blog Page -->
<section style="background-color:#f6f7f6;">

      <!--Section: Cards-->
      <div class="container text-center">
      <div class="section-title text-left">
        <h2>Blog</h2>
        <p>Our Popular Blog</p>
      </div>
        <!--Grid row-->
        <div class="row mb-4 wow fadeIn">

          <!--First column-->
          
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="{{asset('public/assets/images/bscc.png')}}" style="height:200px;" class="card-img-top"
                  alt="">
                <a href="{{url('/blog-post/5-things-about-bihar-student-credit-card')}}">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title font-weight-bold">बिहार स्टूडेंट क्रेडिट कार्ड स्कीम के बारे में जानें 5 बड़ी बातें</h4>
                <!--Text-->
                <p class="card-text">बिहार स्टूडेंट क्रेडिट कार्ड योजना बिहार सरकार के सात निश्चय योजनाओं में एक मुख्य योजना है इसके तहत 52 कोर्स के लिए बिहार सरकार बिना गारंटी के 4 लाख तक का ब्याज मुक्त लोन देती है।</p>
                <a href="{{url('/blog-post/5-things-about-bihar-student-credit-card')}}"
                  class="btn btn-primary btn-md stretched-link">Read Full Article
                  <i class="fas fa-play ml-2"></i>
                </a>
              </div>

            </div>
            <!--/.Card-->

          </div>
        
          <!--First column-->

          <!--Second column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="{{asset('public/assets/blog/thirdblog//thumb.jpg')}}" style="height:200px;" class="card-img-top" alt="">
                <a href="{{url('/blog-post/how-to-apply-bihar-student-credit-card')}}" target="_blank">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title font-weight-bold">बिहार स्टूडेंट क्रेडिट कार्ड योजना 2021  के  लिए कैसे अप्लाई करे?</h4>
                <!--Text-->
                <p class="card-text">बिहार स्टूडेंट क्रेडिट कार्ड योजना के बारे में सम्बन्ध में छात्रों में कई आशंकाये है।  इस योजना से जुड़ी सभी जानकारी विस्तार से इस ब्लॉग में जानते है। </p>
                <a href="{{url('/blog-post/how-to-apply-bihar-student-credit-card')}}" class="btn btn-primary btn-md stretched-link">Read Full Article
                  <i class="fas fa-play ml-2"></i>
                </a>
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Second column-->

        <!--Third column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="{{asset('public/assets/images/creditcard2.jpg')}}" style="height:200px;" class="card-img-top" alt="">
              <a href="{{url('/blog-post/how-to-choose-collge-for-getting-bihar-student-credit-card')}}">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h5 class="card-title font-weight-bold">बिहार स्टूडेंट क्रेडिट कार्ड योजना का लाभ लेने के लिए छात्रों को कॉलेज का चुनाव किस तरह करना चाहिए?</h5>
              <!--Text-->
              <p class="card-text">बिहार स्टूडेंट क्रेडिट कार्ड योजना 2021 का लाभ पाने के लिए छात्रों को कॉलेज का चुनाव में काफी सावधानी बरतनी चाहिए। आइये जानते है इसके बारे में विस्तार से ..... </p>
              <a href="{{url('/blog-post/how-to-choose-collge-for-getting-bihar-student-credit-card')}}" class="btn btn-primary btn-md stretched-link">Read More Article
                <i class="fas fa-play ml-2"></i>
              </a>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!-- Third column-->
           

       

          </div>
          <!--Grid column-->       

        </div>
        <!--Grid row-->

      </div>
      <!--Section: Cards-->
</section>

<!-- Bscc at Glance -->
<section>
  <div class="container page-top">
      <div class="section-title">
        <h2>Bihar Student Credit Card</h2>
        <p>BSCC AT NEWS</p>
      </div>
        <div class="row">
              <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                  <a href="{{asset('public/assets/images/home1.jpeg')}}" class="fancybox" rel="ligthbox">
                      <img  src="{{asset('public/assets/images/home1.jpeg')}}" class="zoom img-fluid "  alt="">
                    
                  </a>
              </div>
              <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                  <a href="{{asset('public/assets/images/homegallery1.jpeg')}}" class="fancybox" rel="ligthbox">
                      <img  src="{{asset('public/assets/images/homegallery1.jpeg')}}" class="zoom img-fluid "  alt="">
                    
                  </a>
              </div>
              <div class="col-lg-4 col-md-6 col-xs-6 thumb">
                  <a href="{{asset('public/assets/images/indexgallery2.jpeg')}}" rel="ligthbox">
                      <img  src="{{asset('public/assets/images/indexgallery2.jpeg')}}" class="zoom img-fluid"  alt="">
                  </a>
              </div>
              
              <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                  <a href="{{asset('public/assets/images/homegallery3.jpeg')}}" class="fancybox" rel="ligthbox">
                      <img  src="{{asset('public/assets/images/homegallery3.jpeg')}}" class="zoom img-fluid "  alt="">
                  </a>
              </div>
              
              <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                  <a href="{{asset('public/assets/images/homegallery5.jpg')}}" class="fancybox" rel="ligthbox">
                      <img  src="{{asset('public/assets/images/homegallery5.jpg')}}" class="zoom img-fluid "  alt="">
                  </a>
              </div>

              <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                  <a href="{{asset('public/assets/images/homegallery6.jpg')}}" class="fancybox" rel="ligthbox">
                      <img  src="{{asset('public/assets/images/homegallery6.jpg')}}" class="zoom img-fluid "  alt="">
                  </a>
              </div>

        </div>
  </div>
</section>


  <!-- ======= Footer ======= -->
@include('pioneers.layouts.footer')

<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    const loginPopup = document.querySelector(".login-popup");
  const close = document.querySelector(".close");


  window.addEventListener("load",function(){
 
   showPopup();
   // setTimeout(function(){
   //   loginPopup.classList.add("show");
   // },5000)

  })

  function showPopup(){
        const timeLimit = 60 // seconds;
        let i=0;
        const timer = setInterval(function(){
         i++;
         if(i == timeLimit){
          clearInterval(timer);
          loginPopup.classList.add("show");
         } 
         console.log(i)
        },1000);
  }


  close.addEventListener("click",function(){
    loginPopup.classList.remove("show");
  })



    // FAQ Section JS Starts Here
    // Code By Webdevtrick ( https://webdevtrick.com )
      const items = document.querySelectorAll(".accordion a");

      function toggleAccordion(){
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('active');
      }

      items.forEach(item => item.addEventListener('click', toggleAccordion));

    //BSCC AT GLANCE:-
    $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
                
            $(".zoom").hover(function(){        
                $(this).addClass('transition');
            }, function(){
                $(this).removeClass('transition');
            });
        });

      $(document).ready(function(){
        $("#bscc-visit").click(function(){
          window.location.href ="{{url('/bscc')}}";
        });

        $('#collgelist-visit').click(function(){
          window.location.href ="{{url('/get-all-bscc-college')}}";
        });
      });
</script>

@endsection
