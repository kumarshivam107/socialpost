@extends('pioneers.layouts.master')
@section('content')
<title>Blog - Education Pioneers</title>
<style>
    .card-comments img {
      width: 4rem; 
    }
    @media screen and (max-width:768px){
      #suscribe-div{
        display:none;
      }
    }
</style>
@include('pioneers.layouts.header')

  <!--Main layout-->
  <main class="">
    <div class="container">

      <!--Section: Post-->
      <section class="mt-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-8 mb-4">

            <!--Featured Image-->
            <div class="card mb-4 wow fadeIn">

              <img src="{{asset('public/assets/blog/thirdblog//thumb.jpg')}}" class="img-fluid"  style="max-height:300px;" alt="">

            </div>
            <!--/.Featured Image-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <!--Card content-->
              <div class="card-body">
                <h3 class="font-weight-bold">बिहार स्टूडेंट क्रेडिट कार्ड योजना 2021: ऑनलाइन आवेदन</h3>
                <p class="h5 my-4">स्टूडेंट क्रेडिट कार्ड योजना ऑनलाइन | Bihar Student Credit Card Yojana Registration | स्टूडेंट क्रेडिट कार्ड योजना एप्लीकेशन फॉर्म | Student Credit Card Yojana Course list</p>
                <p class="text-justify"><span class="font-weight-bold">बिहार स्टूडेंट क्रेडिट कार्ड योजना</span> का शुभारम्भ राज्य के मुख्यमंत्री नितीश कुमार जी के द्वारा 2 अक्टूबर 2016 को राज्य के विद्यार्थियों को उच्च शिक्षा के लिए लोन उपलब्ध कराने के लिए किया गया है । इस योजना के अंतर्गत बिहार राज्य के गरीब 12 वी पास छात्र छात्राओं को उच्च शिक्षा प्राप्त करने के लिए राज्य सरकार द्वारा 4 लाख रूपये तक का लोन वित्तीय सहायता के रूप में (A loan of up to 4 lakh rupees should be provided by the state government as a financial aid to the poor 12th pass students of Bihar state for pursuing higher education.) प्रदान किया जायेगा | <span class="font-weight-bold">स्टूडेंट क्रेडिट कार्ड योजना</span> के तहत लोन लेने वाले विधार्थियो को किसी तरह का कोई ब्याज नहीं देना होगा ।</p>
                <p class="font-weight-bold">बिहार स्टूडेंट क्रेडिट कार्ड योजना की पात्रता</p>
                <ul>
                  <li>आवेदक बिहार राज्य का स्थायी निवासी होना चाहिए ।</li>
                  <li>विद्यार्थी जिस शिक्षण संस्थान से पड़ा हो वो राज्य या केंद्र सरकार सम्बंधित नियामक एजेंसी द्वारा मान्यता प्राप्त हो ।</li>
                  <li>स्टूडेंट क्रेडिट कार्ड योजना 2021 के अंतर्गत उच्च शिक्षा के लिए विद्यार्थी को सामान्य पाठ्यक्रम, तकनीकी या व्यवसाहिक कार्यकर्मो को लिए ऋण दिया जायेगा।</li>
                  <li>इस योजना के अंतर्गत राज्य के विधार्थी 12 वी पास होना चाहिए ।</li>
                </ul>
                <h3 class="text-danger">बिहार स्टूडेंट क्रेडिट कार्ड योजना में आवेदन कैसे करे ?</h3>
                <!-- First Part -->
                <ul class="pb-0 mb-0">
                  <li>सर्वप्रथम आवेदक को शिक्षा विभाग , ,योजना एवं विकास विभाग एवं श्रम संसाधन विभाग कि ऑफिसियल वेबसाइट पर जाना होगा ।ऑफिसियल वेबसाइट पर जाने के बाद आपके समाने होम पेज खुल जायेगा ।</li>
                </ul>
                <img src="{{asset('public/assets/blog/secondblog/homepage.jpg')}}" class="img-fluid p-3" style="max-height:300px; display:block; margin:auto;" alt="Home Page">
                <!-- Second Part -->
                <ul class="pb-0 mb-0">
                  <li>इस होम पेज पर आपको New Applicant Registration का ऑप्शन दिखाई देगा आपको इस ऑप्शन पर क्लिक करना होगा ।ऑप्शन पर क्लिक करने के बाद आपके सामने कंप्यूटर स्क्रीन पर अगला पेज खुल जायेगा ।</li>
                </ul>
                <img src="{{asset('public/assets/blog/secondblog/registration.jpg')}}" class="img-fluid p-3" style="max-height:300px; display:block; margin:auto;" alt="Home Page">
                <!-- Third Part -->
                <ul class="pb-0 mb-0">
                  <li>इस पेज पर आपको रजिस्ट्रेशन फॉर्म खुल जायेगा इस फॉर्म में आपको अपनी पूछी गयी सभी जानकारी जैसे आवेदक का नाम ,इमेल आईडी आधार कार्ड नंबर , मोबाइल नंबर ,यदि आवेदन वसुधा केंद्र से किया गया है तो YES पर क्लिक करें नहीं तो NO का चयन करें।*</li>
                  <li>कृपया अपने मोबाइल पर भेजे गए ओटीपी को दर्ज करें*, कृपया अपने ईमेल आईडी पर भेजे गए ओटीपी को दर्ज करना होगा ।आदि भरनी होगी ।</li>
                </ul>
                <img src="{{asset('public/assets/blog/secondblog/registration2.jpg')}}" class="img-fluid p-3" style="max-height:300px; display:block; margin:auto;" alt="Home Page">
                <!-- Fourth Part -->
                <ul class="pb-0 mb-0">
                  <li>व्यक्तिगत विवरण भरने के बाद आपको सबमिट करना होगा ।सबमिट करने के बाद आपके सामने  अन्य 3 विकल्प अन्य विकल्प खुल जायेगे ।इन तीन विकल्पों में से स्टूडेंट क्रेडिट कार्ड के विकल्प का चयन करना है जिसके बाद एक नया एप्लिकेशन फॉर्म खुल जाएगा।जिसके बाद आवेदन में पूछी गई जानकारी और विवरण भरना होगा ।फिर आपको सबमिट बटन का उपयोग करके इसे जमा करना होगा ।</li>
                </ul>
                <img src="{{asset('public/assets/blog/secondblog/registration3.jpg')}}" class="img-fluid p-3" style="max-height:300px; display:block; margin:auto;" alt="Home Page">
                <img src="{{asset('public/assets/blog/secondblog/filling3.jpg')}}" class="img-fluid p-3" style="max-height:300px; display:block; margin:auto;" alt="Home Page">
                <!-- Fifth Part -->
                <ul class="pb-0 mb-0">
                  <li>आवेदन पत्र जमा करने के बाद, छात्रों को एक विशिष्ट पहचान संख्या दी जाएगी। यह यूनिक आईडी नंबर उनके मोबाइल नंबर और ई-मेल आईडी पर भेजा जाएगा।</li>
                  <li>छात्रों को प्रस्तुत आवेदन पत्र की पीडीएफ कॉपी और उनके ई-मेल आईडी पर आवश्यक दस्तावेजों का विवरण भी प्राप्त होगा। काउंटर पर आवेदन पत्र और दस्तावेजों की आवश्यकता होगी।</li>
                </ul>
                <img src="{{asset('public/assets/blog/secondblog/submission.jpg')}}" class="img-fluid p-3" style="max-height:300px; display:block; margin:auto;" alt="Home Page">
                <h3 class="font-weight-bold">बिहार स्टूडेंट क्रेडिट कार्ड योजना 2021: ऑनलाइन आवेदन</h3>
                <p>राज्य के जिन लाभार्थियों ने इस योजना के तहत आवेदन किया है और वह अपने  आवेदन की स्थिति देखना चाहते है तो वहन नीचे दिए गए तरीके को फॉलो करे।</p>
                <ul class="mb-0 pb-0">
                  <li>सबसे पहले आपको ऑफिसियल वेबसाइट पर जाना होगा। ऑफिसियल वेबसाइट पर जाने के बाद आपके सामने होम पेज खुल जायेगा। इस होम पेज पर आपको Application Status का विकल्प दिखाई देगा।</li>
                  <li>आपको इस ऑप्शन पर क्लिक करना होगा। ऑप्शन पर क्लिक करने के बाद आपके सामने अगला पेज खुल जायेगा।</li>
                  <li>सबसे पहले आपको ऑफिसियल वेबसाइट पर जाना होगा। ऑफिसियल वेबसाइट पर जाने के बाद आपके सामने होम पेज खुल जायेगा। इस होम पेज पर आपको Application Status का विकल्प दिखाई देगा।</li>
                  <li>आपको इस ऑप्शन पर क्लिक करना होगा। ऑप्शन पर क्लिक करने के बाद आपके सामने अगला पेज खुल जायेगा।</li>
                </ul>
                <img src="{{asset('public/assets/blog/secondblog/status.jpg')}}" class="img-fluid p-3" style="max-height:300px; display:block; margin:auto;" alt="Home Page">
              </div>

            </div>
            <!--/.Card-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body text-center">

              <p class="h5 my-4">What is Education Pioneers?</p>

              <p>Education Pioneers is Best Consutancy in Patna Which Provide Best Gudiance To His Students To Take Admission in Top Colleges And take advantage of different Goverment schemes like Bihat studeny Credit Card, Schlorship Scheme Etc.</p>

              <h5 class="my-4">
                <strong>Education Pioneers - trusted by  10,000 + Students</strong>
              </h5>
              <hr>

              <a class="btn btn-outline-primary" href="{{url('/apply-now')}}"
                role="button">Apply Now<i class="fas fa-download ml-2"></i></a>

            </div>

            </div>
            <!--/.Card-->
            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <div class="card-header font-weight-bold">
                <span>About author</span>
                <span class="pull-right">
                  <a href="">
                    <i class="fab fa-facebook-f mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-twitter mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-instagram mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-linkedin-in mr-2"></i>
                  </a>
                </span>
              </div>

              <!--Card content-->
              <div class="card-body">

                <div class="media d-block d-md-flex mt-3">
                  <img class="d-flex mb-3 mx-auto z-depth-1" src="{{url('public/assets/images/logo.png')}}"
                    alt="Generic placeholder image" style="width: 100px;">
                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Education Pioneers
                    </h5>
                    <p class="text-justify">Education Pioneers Is a Educational Consultancy Which is Guide Student Towards Thier Dreams College and Take How to get Benefit of Different Goverment Schemes Like Bihar Student Credit Card, Schlorship Scheme and Various Schemes.</p>
                  </div>
                </div>

              </div>

            </div>
            <!--/.Card-->

             
            <!--Reply-->
            <div class="card mb-3 wow fadeIn">
              <div class="card-header font-weight-bold">Leave a reply</div>
              <div class="card-body">
              @if(Session::has('flash_message_comment'))
                <div class="alert alert-sm alert-success alert-block" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>{!! session('flash_message_comment') !!}</strong>
                </div>
              @endif
                
                <!-- Default form reply -->
                <form action="{{url('/add-comment')}}" method="post">@csrf
                  <input type="hidden" id="blog_id" name="blog_id" class="form-control" value="2"> 
                  <!-- Comment -->
                  <div class="form-group">
                    <label for="replyFormComment">Your comment</label>
                    <textarea class="form-control" id="comment" name="comment" rows="5" required></textarea>
                  </div>

                  <!-- Name -->
                  <label for="replyFormName">Your name</label>
                  <input type="text" id="name" name="name" class="form-control" required>

                  <br>

                  <!-- Email -->
                  <label for="replyFormEmail">Your e-mail</label>
                  <input type="email" id="email" name="email" class="form-control" required>


                  <div class="text-center mt-4">
                    <button class="btn btn-info btn-md" type="submit">Post</button>
                  </div>
                </form>
                <!-- Default form reply -->



              </div>
            </div>
            <!--/.Reply-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 mb-4">

         

            <!--Card : Dynamic content wrapper-->
            <div class="card mb-4 text-center wow fadeIn" id="suscribe-div">

              <div class="card-header">Do you want to get informed about new articles?</div>

              <!--Card content-->
              <div class="card-body">
              @if(Session::has('flash_message_suscribe'))
                <div class="alert alert-sm alert-success alert-block" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>{!! session('flash_message_suscribe') !!}</strong>
                </div>
              @endif
                <!-- Default form login -->
                <form action="{{url('/suscribe')}}" method="post">@csrf

                  <!-- Default input email -->
                  <label for="defaultFormEmailEx" class="grey-text">Your email</label>
                  <input type="email" id="email" name="email" class="form-control">

                  <br>

                  <!-- Default input password -->
                  <label for="defaultFormNameEx" class="grey-text">Your name</label>
                  <input type="text" id="name" name="name" class="form-control">

                  <div class="text-center mt-4">
                    <button class="btn btn-info btn-md" type="submit">Suscribe</button>
                  </div>
                </form>
                <!-- Default form login -->

              </div>

            </div>

            <!--/.Card : Dynamic content wrapper-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <div class="card-header">Related articles</div>
              <!--First Blog-->
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
              <!--First Blog-->
               <!--Third Card-->
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
              <!--Third Blog-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Post-->

    </div>
  </main>
  <!--Main layout-->

@include('pioneers.layouts.footer')

@endsection