<!-- Whatsapp Logo -->
<div id="myButton"></div>
<!-- Close Whatsapp Logo -->
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Education Pioneers</h3>
            <p>Above Bank Of India, Near Colony More, Salimar Sweets, Kankarbagh, Patna<br>
              <strong>Phone:</strong> +91 7717416198<br>
              <strong>Email:</strong>EducationPioneersPatna@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/index')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/about')}}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/bscc')}}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/gallery')}}">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Suscribe For Newsletter TO Stay Updated About The Counselling & Admission Process</p>
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
            <form action="{{url('/handle-newsletter')}}" method="post" require="true">@csrf
              <input type="email" id="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Education Pioneersk</span></strong>. All Rights Reserved
        </div>
        <div class="credits">Designed by <a href="#">Shivam Kumar</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/ADMISSIONMARGDARSHAK/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://twitter.com/gulshan4other/status/845157580737409024" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
       
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <!-- <div id="preloader"></div> -->
<!-- Bootstrap Js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<!-- Jquery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="{{asset('public/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('public/assets/js/main.js')}}"></script>

<!-- //What POP Up  -->
<script type="text/javascript" src="{{asset('public/assets/js/floating-wpp.js')}}"></script>
<script>
$(function () {
        $('#myButton').floatingWhatsApp({
            phone: '8986344241',
            popupMessage: 'Hello, how can we help you?',
            message: "I Want ot get knowledge of Bscc",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Welcome!',
            headerColor: 'crimson',
            backgroundColor: 'crimson',
            buttonImage: '<img src="{{asset('public/assets/images/whatsapp.svg')}}" />'
        });
    });
</script>