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
            <div style="background: url({{asset('public/assets/images/marwadi3.jpg')}})" class="jumbotron bg-cover text-white">
                <div class="container py-5 text-center">
                    <h2 class="font-weight-bold">Marwadi University, Gujrat</h2>
                    <a href="#" role="button" class="btn btn-primary px-5">Download Brochure</a>
                </div>
            </div>
              <h3 style="font-size: 28px;">Marwadi University, Rajkot, Gujrat</h3>
           
            </div>
            <div class="col-lg-4">
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Place</h5>
                <p><a href="#">Rajkot, Gujrat</a></p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Key Point</h5>
                <p>NAAC A+ Grade</p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Admission Broucher</h5>
                <p><a href="https://www.marwadiuniversity.ac.in/wp-content/uploads/2020/05/mu-brochure_-2020.pdf" target="_blank">Click Here</a></p>
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
               
                <p class="text-justify">Marwadi University is one of the leading private universities in Gujarat. It was established in the year 2016 under The Gujarati Private Universities Act 2016. The university was accredited with NAAC A+ which stands for excellence. The main objective of Marwadi University is to provide quality education to its students which is affordable at the same time.
                Marwadi University is committed to providing its students with nothing but the best when it comes to academics. It follows a 360-degree education model which ensures that students acquire technical and soft skills that are necessary for a successful career. The three-tier education structure of the university ensures that there are relevant opportunities for every student.
                </p>
                <p class="text-justify">The university offers various undergraduate, postgraduate, diploma and doctoral courses in the field of commerce, science, computer applications, law, pharmacy, and others. The course curriculum at Marwadi University is carefully thought and designed. The course structure integrates personal awareness and practical knowledge for the holistic development of the students.</p>
    
                <p class="text-justify">When it comes to infrastructure and facilities at Marwadi University, it offers its students an integrated and landscaped campus, relevant placement opportunities, industry interaction, recreational activities, and others.</p>
    
                <h2 class="font-weight-bold mb-1 mt-3">More Focal Point About The Marwadi University:-</h2>
                <hr>
                <div class="focal-text p-3">
                    <p><strong class="text-dark">1.</strong>&nbsp;&nbsp;9000+ Students From 31+ Countries Which Makes Campus Very Dymanic</p>
                    <p><strong class="text-dark">2.</strong>&nbsp;&nbsp;NAAC A++ Grade University</p>
                    <p><strong class="text-dark">3.</strong>&nbsp;&nbsp;500+ Faculty and 28000+ Alumni Strength</p>
                    <p><strong class="text-dark">4.</strong>&nbsp;&nbsp;Excellence Placement Record</p>
                    <p><strong class="text-dark">4.</strong>&nbsp;&nbsp;More Than 10,000 Jobs Oppurtunity Created at Last Year</p>
                    <p><strong class="text-dark">5.</strong>&nbsp;&nbsp;Getting Various Award For His Suprior Performace In Field Of Education Like EXCELLENCE IN PLACEMENT BY WORLD LEADERSHIP FEDERATION 2017, BEST ENGINEERING COLLEGE OF INDIA – WEST 2016</p>
                    <p><strong class="text-dark">6.</strong>&nbsp;&nbsp;Superior Infrastructure and Well Maintained Hostel</p>
                    <p>Industrial visits, seminars, counseling and project sessions conducted by the experts from well-reputed industries</p>
                    <p><strong class="text-dark">7.</strong>&nbsp;&nbsp;Soft skill training in communication, language, and character building.</p>
                    <p><strong class="text-dark">8.</strong>&nbsp;&nbsp;Superior Infrastructure and Well Maintained Hostel</p>
                    <p><strong class="text-dark">9.</strong>&nbsp;&nbsp;Providing Good Quality Of Food And Good Hostel Enviroment To Devlop the Skills Of The Students</p>
                    <p><strong class="text-dark">10.</strong>&nbsp;&nbsp;Collges Faculty Try to Not Only On Academics but Try to Build Overall Development Of the Course</p>
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
                            <td>&#x20B9; 1.2 Lakhs (1st Year Fees)</td>
                            <td class="text-center">Graduation with 50% + CAT</td>
                        </tr>
                        <tr>
                            <th>BBA</th>
                            <td>&#x20B9; 65,000 (1st Year Fees)</td>
                            <td class="text-center">10+2</td>
                        </tr>
                        <tr>
                            <th>BE</th>
                            <td>&#x20B9; 89,000 (1st Year Fees)</td>
                            <td class="text-center">10+2 with 75% + JEE Main</td>
                        </tr>
                        <tr>
                            <th>B.P.T.</th>
                            <td>&#x20B9; 70,000 (1st Year Fees)</td>
                            <td class="text-center">10+2</td>
                        </tr>
                        <tr>
                            <th>MSC</th>
                            <td>&#x20B9; 63,000 (1st Year Fees)</td>
                            <td class="text-center">Graduation</td>
                        </tr>
                        <tr>
                            <th>BCA</th>
                            <td>&#x20B9; 50,000 (1st Year Fees)</td>
                            <td class="text-center">10+2</td>
                        </tr>
                        <tr>
                            <th>BCA {Hons.}</th>
                            <td>&#x20B9; 47,500 (1st Year Fees)</td>
                            <td class="text-center">10+2</td>
                        </tr>
                    </tbody>
                </table>
                </div>
               <!-- Highlights -->
               <div class="highlights mt-5">
                    <h2 class="font-weight-bold text-dark">Marwadi University Highlights:-</h2>
                    <p>The campus of Marwadi University is spread over 32 acres of land. The university has world-class facilities for its students and staff members. The university has received many awards since its inception. More highlights about the university are mentioned in the table below.</p>
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
                                <td>32 Acres Of Land, 2000+ Boys Hostel Capcity, 500+ Girls Hostel Capacity,Jogging track, CCTV, Medical Room</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>Rajkot-Morbi Road Rajkot 360 003 Gujarat, India</td>
                            </tr>
                            <tr>
                                <th>Year Of Establishment</th>
                                <td>2016</td>
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
                                <td><a href="https://www.marwadiuniversity.ac.in/wp-content/uploads/2020/05/mu-brochure_-2020.pdf" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                                <th>Download Placement Broucher</th>
                                <td><a href="https://www.marwadiuniversity.ac.in/wp-content/uploads/2020/05/placement-2020.pdf" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                                <th>Contact For Admission</th>
                                <td>+91-91555555956 Email:-EducationPioneersPatna@gmail.com</td>
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
 