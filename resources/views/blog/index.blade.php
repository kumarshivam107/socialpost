@extends('pioneers.layouts.master')
@section('content')
<title>Blog -Admission Margdarshak</title>
<style>
    .card-comments img {
  width: 4rem; }
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

              <img src="{{asset('public/storage/uploads/blog/'.$blog_data->blog_image.'')}}" class="img-fluid"  style="max-height:300px;" alt="">

            </div>
            <!--/.Featured Image-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <!--Card content-->
              <div class="card-body">

                <p class="h5 my-4">{{$blog_data->subheading}}</p>
                {!! $blog_data->paraone_text !!}
              </div>

            </div>
            <!--/.Card-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body text-center">

              <p class="h5 my-4">What is Admission Margdarshak?</p>

              <p>Admission Margdarshak is Best Consutancy in Patna Which Provide Best Gudiance To His Students To Take Admission in Top Colleges And take advantage of different Goverment schemes like Bihat studeny Credit Card, Schlorship Scheme Etc.</p>

              <h5 class="my-4">
                <strong>Admission Margdarshak - trusted by  10,000 + Students</strong>
              </h5>
              <hr>

              <a class="btn btn-outline-primary" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
                role="button" target="_blank">Get Free Advice<i class="fas fa-download ml-2"></i></a>

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
                    <h5 class="mt-0 font-weight-bold">Admission Margdarshak
                    </h5>
                    <p class="text-justify">Admission Margdarshak Is a Educational Consultancy Which is Guide Student Towards Thier Dreams College and Take How to get Benefit of Different Goverment Schemes Like Bihar Student Credit Card, Schlorship Scheme and Various Schemes.</p>
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
                  <input type="hidden" id="blog_id" name="blog_id" class="form-control" value="{{$blog_data->blog_id}}"> 
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
            <div class="card blue-gradient mb-4 wow fadeIn">

              <!-- Content -->
              <div class="card-body text-white text-center">

                <h4 class="mb-4">
                  <strong>Learn Bootstrap 4 with MDB</strong>
                </h4>
                <p>
                  <strong>Best & free guide of responsive web design</strong>
                </p>
                <p class="mb-4">
                  <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video
                    and written versions available. Create your own, stunning website.</strong>
                </p>
                <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-md">Start
                  free tutorial
                  <i class="fas fa-graduation-cap ml-2"></i>
                </a>

              </div>
              <!-- Content -->
            </div>
            <!--Card: Jumbotron-->

            <!--Card : Dynamic content wrapper-->
            <div class="card mb-4 text-center wow fadeIn">

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

              <!--Card content-->
              <div class="card-body">

                <ul class="list-unstyled">
                  @foreach($latest_blog as $latest_blog)
                  <li class="media mt-2">
                    <img class="d-flex mr-3" src="{{url('public/storage/uploads/blog/'.$latest_blog->blog_image.'')}}" alt="Generic placeholder image" style="height:70px; ">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">{{$latest_blog->card_heading}}</h5>
                      </a>
                    jjjjj
                    </div>
                  </li>
                  @endforeach
                </ul>

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Post-->

    </div>
  </main>
  <!--Main layout-->

@include('pioneers.layouts.footer')

@endsection