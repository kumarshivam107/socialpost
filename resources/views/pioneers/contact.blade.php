
@extends('pioneers.layouts.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Contact Us- Education Pioneers</title>
<style>
    .error{
        font-size:16px;
        color:red;
        font-style: italic;
        text-transform:capitalize;
        width:100%;
        margin-bottom:0px;
    }
</style>
@include('pioneers.layouts.header')
  <main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container about-context">
      <h2>Contact</h2>
    </div>
    <div>
       <img src="{{asset('public/assets/images/contact_us.jpg')}}"  style="width:100%; max-height: 300px;;" alt="Image 1">
  </div>
   
  </div>
  <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    
      <div class="container" data-aos="fade-up">
      <!-- Contact Section  -->
      <div class="row mt-2">
        <div class="col-lg-4 col-md-4 col-4">
          <p class="text-center"><a href="tel:8986344241" class="btn btn-outline-success"><i class="fa fa-phone"></i> Call</a></p>
        </div>
        <div class="col-lg-4 col-md-4 col-4">
          <p class="text-center"><a href="mailto:krshivam4545@gmail.com" class="btn btn-outline-success"><i class="fa fa-envelope"></i> Gmail</a></p>
        </div>
        <div class="col-lg-4 col-md-4 col-4">
          <p class="text-center"><a href="https://wa.me/918986344241" target="_blank" class="btn btn-outline-success"><i class="fa fa-whatsapp"></i> Whatsapp</a></p>
        </div>
      </div>

        <div class="row mt-3">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Above Bank Of India, Near Colony More (Salimar Sweets), Kankarbagh, Patna - 800020</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>EducationPioneers@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 7717416198</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
          @if(Session::has('flash_message_error'))
            <div class="alert alert-sm alert-danger alert-block" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>{!! session('flash_message_error') !!}</strong>
            </div>
          @endif
            
            @if(Session::has('flash_message_success'))
            <div class="alert alert-sm alert-success alert-block" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>{!! session('flash_message_success') !!}</strong>
            </div>
            @endif
            <!-- Showing the Server Side Validiation Error -->
            @if($errors->any())
                <h4 style="color:red; font-size:16px; text-transform:uppercase;">{{$errors->first()}}</h4>
            @endif

            <form action="{{url('/handle-contact')}}" method="post" id="contacttwo-form">@csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required/>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required/>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required/>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-success">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
      <div data-aos="fade-up" class="mt-2"> 
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14392.680803667497!2d85.1480166!3d25.59926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbe2c9dd1104d1f2d!2sADMISSION%20MARGDARSHAK!5e0!3m2!1sen!2sin!4v1603928850076!5m2!1sen!2sin" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @include('pioneers.layouts.footer')
@endsection