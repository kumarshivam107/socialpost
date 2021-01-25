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

              <img src="{{asset('public/assets/images/bscc.png')}}" class="img-fluid"  style="max-height:300px;" alt="">

            </div>
            <!--/.Featured Image-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <!--Card content-->
              <div class="card-body">
                <h3 class="font-weight-bold mb-0">बिहार स्टूडेंट क्रेडिट कार्ड स्कीम के बारे में जानें 5 बड़ी बातें</h3>
                <p class="h5 my-4">BSCCS योजना का लाभ बिहार के ऐसे विद्यार्थी उठा सकते हैं, जो राज्य से 12वीं की परीक्षा पास कर चुके हैं.</p>
                <p>कई लड़के-लड़कियां इच्छा के बावजूद उच्च शिक्षा हासिल नहीं कर पाते हैं. पैसे की कमी के चलते कुछ बेहतर प्रयास करने की उनकी हसरत दम तोड़ देती है.

                ऐसे ही गरीब विद्यार्थियों की मदद के लिए बिहार की सरकार ने एक शानदार योजना (BSCCS) शुरू की है. इसे 2 अक्टूबर 2016 को लॉन्च किया गया था. BSCCS योजना को लागू करने के लिए सरकार ने शिक्षा वित्त निगम (Education Finance Corporation) की स्थापना की है.</p>
                <p class="font-weight-bold">किसे मिल सकता है BSCCS योजना का लाभ?</p>
                <p>बिहार स्टूडेंट क्रेडिट कार्ड स्कीम (बीएससीसीएस या BSCCS) का लाभ ऐसे विद्यार्थी उठा सकते हैं, जो 12वीं की परीक्षा पास कर चुके हैं. BSCCS योजना के तहत गरीब छात्रों को बैंक से आगे की पढ़ाई के लिए लोन मिलता है. BSCCS योजना की खास बात यह है कि इसके तहत लिए गए कर्ज की गांरटर राज्य सरकार खुद है.</p>
                <p class="font-weight-bold">कैसे करें BSCCS में आवेदन?</p>
                <p>BSCCS योजना इसलिए भी अच्छी है कि विद्यार्थी एप या पोर्टल के जरिए आवेदन कर सकते हैं. उन्हें बैंक की शाखाओं का चक्कर लगाने की जरूरत नहीं है.
                बिहार के ऐसे विद्यार्थी को https://www.7nishchay-yuvaupmission.bihar.gov.in पर आवेदन करना होगा.<p>
                <p class="font-weight-bold">BSCCS के लिए कौन-कौन से दस्तावेज जरूरी?<p>
                <ul>
                <li>BSCCS योजना का लाभ उठाने के लिए कई दस्तावेज जरूरी हैं. इसलिए अगर आप इस योजना में आवेदन करना चाहते हैं तो आपको ये दस्तावेज पहले से तैयार रखने चाहिए.</li>
                <li>आवेदक और सह-आवेदक के आधार कार्ड</li>
                <li>आवेदक और सह-आवेदक का पैन</li>
                <li>10वीं और 12वीं के सर्टिफिकेट एवं मार्क्सशीट</li>
                <li>उच्च शिक्षण संस्थान में दाखिले का प्रमाणपत्र</li>
                <li>विद्यार्थी, माता-पिता और गांरटर में से सभी के 2-2 फोटो</li>
                <li>निवास प्रमाण पत्र</li>
                </ul>
                <p class="font-weight-bold">क्या है BSCCS का मकसद?</p>
                    BSCCS योजना के जरिए राज्य सरकार कई मकसद पूरा करना चाहती है.
                <ul>
                    <li>पहला, वह राज्य में उच्च शिक्षा के लिहाज से साक्षरता के आंकड़े को सुधारना चाहती हैं. राज्य में विद्यार्थियों का बड़ा हिस्सा 10वीं-12वीं के बाद पढ़ाई छोड़ देता है.</li>
                    <li>दूसरा, सरकार राज्य में मौजूद टैलेंट को बढ़ावा देना चाहती है. साल 2021 तक राज्य भर के विद्यार्थियों को इस स्कीम के दायरे में लाने का लक्ष्य है.</li>
                    <li>तीसरा, सरकार चाहती है कि लोन के लिए छात्र को बैंक का चक्कर नहीं काटना पड़े. करीब एक महीने में इस स्कीम में लोन की प्रक्रिया पूरी हो जाती है.</li>
                </ul>
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
                role="button">Apply For Free<i class="fas fa-download ml-2"></i></a>

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
                  <input type="hidden" id="blog_id" name="blog_id" class="form-control" value="1"> 
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

            <!--Card: Jumbotron-->
          
            <!--Card: Jumbotron-->

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

      <div class="card-header">Related articles</div>
      <!--Section: Cards-->
      <div class="container text-center">
      
        <!--Grid row-->
        <div class="row mb-4 wow fadeIn">
          
          <!-- third Card-->
          <div class="card mb-3">

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
          <!--third Card-->

            <!--second Card-->
            <div class="card mb-3">

              <!--Card image-->
              <div class="view overlay">
                <img src="{{asset('public/assets/blog/thirdblog//thumb.jpg')}}" style="height:200px;" class="card-img-top" alt="">
                <a href="{{url('/blog-post/how-to-apply-bihar-student-credit-card')}}">
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
          <!--Grid column-->       

        </div>
        <!--Grid row-->

      </div>
      <!--Section: Cards-->
</section>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      
      <!--Section: Post-->

    </div>
  </main>
  <!--Main layout-->

@include('pioneers.layouts.footer')

@endsection