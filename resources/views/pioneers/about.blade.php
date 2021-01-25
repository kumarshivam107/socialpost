@extends('pioneers.layouts.master')
@section('content')
<title>About Us- Education Pioneers</title>
@include('pioneers.layouts.header')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container about-context">
        <h2>About Us</h2>
      </div>
      <div>
         <img src="{{asset('public/assets/images/about-us.jpg')}}"  style="width:100%; max-height: 300px;;" alt="Image 1">
    </div>
     
    </div>
    <!-- End Breadcrumbs -->

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
            <p>
              We Open The World Of Global Education For Students. We want to help students realise their dreams of becoming a successful professional, a successful person bty assisting them in the top most and best Universities which matches their Aspirations and Budget.
            </p>
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
            <span data-toggle="counter-up">1232</span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">64</span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">42</span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
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
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
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
                Best Consultancy Which Provide Us Guidance to Me to Get Admission In Marwadi University and Provide Me Full Support Of Geeting Bihar Student Credit Card.
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
                Best Consultancy Which Provide Us Guidance to Me to Get Admission In Marwadi University and Provide Me Full Support Of Geeting Bihar Student Credit Card.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('public/assets/images/dilip.jpg')}}" class="testimonial-img" alt="">
              <h3>Dilip Kumar</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Best Consultancy Which Provide Us Guidance to Me to Get Admission In Marwadi University and Provide Me Full Support Of Geeting Bihar Student Credit Card.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

         

        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main>
  @include('pioneers.layouts.footer')
@endsection
 