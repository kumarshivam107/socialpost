@extends('pioneers.layouts.master')
@section('content')
<title>Apply Now- Education Pioneers</title>
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
      <h2>Apply Now</h2>
    </div>
    <div>
       <img src="{{asset('public/assets/img/slider_image1.jpg')}}"  style="width:100%; max-height: 300px;;" alt="Image 1">
  </div>
   
  </div>
  <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

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
                <p>Educationpioneers@gmail.com</p>
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
            <form action="{{url('/handle-applynow')}}" method="post" id="applynow_form">@csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"/>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile"/>
              </div>
              <div class="form-group">
                <select class="form-control" name="course" id="course">
                    <option vlaue="select_course">Select Course</option>
                    <option vlaue="polytechnic">Polytechnic</option>
                    <option value="b.tech">Bachelor Of Technology(B.Tech)</option>
                    <option value="mba">Master Of Busniess Administration(MBA)</option>
                    <option value="bba">Bachelor Of Busniess Administration(MBA)</option>
                    <option value="bca">Bachelor Of Computer Science(BCA)</option>
                    <option vlaue="mca">Master Of Computer Application(MCA)</option>
                    <option vlaue="pharmacy">Pharmacy</option>
                    <option vlaue="argiculture">Agriculture</option>
                    <option value="nursing">Nursing</option>
                    <option value="hotel_management">Hotel Management</option>
                    <option value="balllb">BALLB</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="trade" id="trade" placeholder="Trade/Speclization" >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="state" id="state" placeholder="Parent State"/>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="choice" id="choice" placeholder="Enter Your College Choice (If Any)"/>
              </div>
              <div class="form-group">
                <select class="form-control" name="need" id="need">
                    <option value="need_student">Need Bihar Student Credit Card</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-success">Apply Now</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@include('pioneers.layouts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
        //Validiate Form:-
        var applynowForm = $('#applynow_form');
        applynowForm.validate({
            rules:{
                name:{
                    required:true,
                    minlength:5,
                    maxlength:100
                },
                email:{
                  required:true,
                  minlength:5,
                  maxlength:100
                },
                mobile:{
                  required:true,
                  minlength:10,
                  maxlength:12
                },
                course:{
                      required:true
                },
                trade:{
                  required:true,
                  minlength:2,
                  maxlength:100
                },
                state:{
                  required:true,
                  minlength:3,
                  maxlength:20
                },
                need:{
                  required:true,
                }
            
            },
            message:{
                name:{
                    required:"This Field is Required",
                    minlength:"Name Should have atleast 5 Characters.",
                    maxlength:"Name Should Not Consist more than 100 characters."
                },
                email:{
                  required:"This Field is Required",
                    minlength:"Email Should have atleast 5 Characters.",
                    maxlength:"Email Should Not Consist more than 100 characters."
                },
                mobile:{
                  required:"This Field is Required",
                  minlength:"Mobile Should have atleast 10 Characters.",
                  maxlength:"Mobile Should Not Consist more than 10 characters."
                },
                course:{
                  required:"This Field is Required",
                  minlength:"Please Select One Course for Apply.",
                },
                trade:{
                  required:"This Field is Required",
                  minlength:"Trade Should have atleast 2 Characters.",
                  maxlength:"Trade Should Not Consist more than 100 characters."
                },
                state:{
                  required:"This Field is Required",
                  minlength:"State Should have atleast 3 Characters.",
                  maxlength:"State Should Not Consist more than 100 characters."
                },
                need:{
                  required:"This Field is Required."
                }

            }
        });
    });

</script>
@endsection