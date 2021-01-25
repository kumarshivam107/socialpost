
@extends('pioneers.layouts.master')
@section('content')
<style>
    .bg-cover {
        background-size: cover !important;
    }
    @media screen and (max-width:768px){
        .topcollege-header{
            padding-right:0px;
            padding-left:0px;
        }
    }
</style>
@include('pioneers.layouts.header')
<main id="main">
    <!-- ======= Cource Details Section ======= -->
     <section id="course-details" class="course-details mt-3" style="padding-bottom:15px;">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-8 topcollege-header">
            <div style="background: url({{asset('public/assets/images/dhanlaxmi.jpg')}})" class="jumbotron bg-cover text-white">
                <div class="container py-5 text-center">
                    <h2 class="font-weight-bold">Dhanalakshmi Srinivasan Engineering College, Chennai</h2>
                    <a href="#" role="button" class="btn btn-primary px-5">Download Brochure</a>
                </div>
            </div>
              <h3 style="font-size: 26px;">Dhanalakshmi Srinivasan Engineering College, Chennai</h3>
           
            </div>
            <div class="col-lg-4">
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Place</h5>
                <p><a href="#">Perambalur, Chennai</a></p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Key Point</h5>
                <p>NAAC A Grade</p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Admission Broucher</h5>
                <p><a href="{{url('public/collegesdocs/dhanlaxmi.pdf')}}" target="_blank">Click Here</a></p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Call For Admission</h5>
                <p>+91 7717416198</p>
              </div>
  
            </div>
          </div>
  
        </div>
      </section>
      <!-- End Cource Details Section -->
    <!-- Marwadi University -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-12 marwadi-text">
               
                <p class="text-justify">Dhanalakshmi Srinivasan Engineering College, Chennai Established in the year 2001, the college strives to impart quality education in the field of engineering and technology through a stimulating and innovative environment. The college is recognized by AICTE, New Delhi and affiliated to Anna University, Chennai. Since inception, the college strives to establish itself as a world class nodal center of learning, research and training. In recognition of our commitment to quality education, the globally renowned British Standards Institution, London has conferred the college with ISO 9001:2000 certification complying with BS EN ISO9001:2000 standards just after three years since inception. The college is under the process of accrediting two of its undergraduate programmes namely, B.E., Electronics & Communication Engineering and B.E., Computer Science Engineering.
                </p>
                <h5 class="font-weight-bold">Vision of The Institute:-</h5>
                <p class="text-justify">An active and committed centre of advanced learning focused on research and training in the fields of Engineering, Technology and Management to serve the nation better.</p>
                <h5 class="font-weight-bold">MISSION OF THE INSTITUTION:-</h5>
                <ul>
                    <li>To develop eminent scholars with a lifelong follow up of global standards by offering UG, PG and doctoral programmes</li>
                    <li>To pursue professional and career growth by collaborating mutually beneficial partnership with industries and higher institutes of research</li>
                    <li>To promote sustained research and training with emphasis on human values and leadership qualities.</li>
                    <li>To contribute solutions for the need based issues of our society by proper ways and means as dutiful citizen</li>
                </ul>
    
                <h2 class="font-weight-bold mb-1 mt-3">More Focal Point About The MMU, Haryana:-</h2>
                <hr>
                <div class="focal-text p-3">
                    <p><strong class="text-dark">1.</strong>&nbsp;&nbsp;Collaborative with industry/ R&D establishments for effective industry institution interaction</p>
                    <p><strong class="text-dark">2.</strong>&nbsp;&nbsp;Zeal to excel in academic and R&D activities</p>
                    <p><strong class="text-dark">3.</strong>&nbsp;&nbsp;Additional employment and career enhancement programs along with regular process/course works</p>
                    <p><strong class="text-dark">4.</strong>&nbsp;&nbsp;Consultancy & industrial services for industry & business establishments</p>
                    <p><strong class="text-dark">4.</strong>&nbsp;&nbsp;Entrepreneurial development programs</p>
                    <p><strong class="text-dark">5.</strong>&nbsp;&nbsp;95% OVERALL PLACEMENT HIGHEST PACKAGE OFFERED 20 LACS</p>
                    <p><strong class="text-dark">6.</strong>&nbsp;&nbsp;Superior Infrastructure and Well Maintained Hostel</p>
                    <p><strong class="text-dark">7.</strong>&nbsp;&nbsp;COMFORTABLE HOSTEL ACCOMMODATION FOR 1000+ STUDENTS</p>
                    <p><strong class="text-dark">8.</strong>&nbsp;&nbsp;10,000+ SUCCESS STORIES & DEDICATED PLACEMENT CELL</p>
                 
                </div>
               
               <!-- Fee & Egibility -->
               <div class="egiblity">
               <h2 class="font-weight-bold mt-5">FEES & ELIGIBILITY</h2>
               <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th class="bg-info th-egiblity text-center">Course</th>
                        <th class="bg-info th-egiblity text-center">Fee</th>
                        <th class="bg-info th-egiblity text-center">Egibility</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>MBA</th>
                            <td>&#x20B9; 1.28 Lakhs (1st Year Fees)</td>
                            <td class="text-center">Graduation with 50% + CAT</td>
                        </tr>
                        <tr>
                            <th>B.Tech</th>
                            <td>&#x20B9; 1.10 Lakh (1st Year Fees)</td>
                            <td class="text-center">10+2 with 75% + JEE Main</td>
                        </tr>
                    </tbody>
                </table>
                </div>
               <!-- Highlights -->
               <div class="highlights mt-5">
                    <h2 class="font-weight-bold text-dark" style="font-size:22x;">Dhanalakshmi Srinivasan Engineering College, Chennai Highlights:-</h2>
                    <p class="text-justify">Dhanalakshmi Srinivasan Engineering College Established in the year 2001, the college strives to impart quality education in the field of engineering and technology through a stimulating and innovative environment. The college is recognized by AICTE, New Delhi and affiliated to Anna University, Chennai. Since inception, the college strives to establish itself as a world class nodal center of learning, research and training.

</p>
                    <div class="table-responsive">
                    <table class="table table-bordered custom-table">
                        <thead>
                            <tr>
                            <th>Type Of University</th>
                            <td>Private</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Infrastructure</th>
                                <td>Library(E-library & Physical Library), Hostel With Superior Quality of Food & Enviroment, Transpotation (Local Students Only), Banking, Sports and Games(Indoor and Outdoor Booth) and Much More</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>Perambalur, Tamil Nadu, India</td>
                            </tr>
                            <tr>
                                <th>Year Of Establishment</th>
                                <td>2001</td>
                            </tr>
                            <tr>
                                <th>Course Offered</th>
                                <td>Diploma, Undergraduate, Postgraduate, Doctorate, Certificate.</td>
                            </tr>
                            <tr>
                                <th>Recogination</th>
                                <td>	University Grants Commission (UGC), All India Council for Technical Education (AICTE), Bar Council of India (BCI), Pharmacy Council of India (PCI)</td>
                            </tr>
                            <tr>
                                <th>Download Admission Broucher</th>
                                <td><a href="{{url('/public/collegesdocs/dhanlaxmi.pdf')}}" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                                <th>Contact For Admission</th>
                                <td>+91-91555555956 Email:-EducationPioneerspatna@gmail.com</td>
                            </tr>
                        </tbody>
                    </table>
</div>
               </div> 
    
            </div>
        </div>
    </div>
</main>
@include('pioneers.layouts.footer')
@endsection