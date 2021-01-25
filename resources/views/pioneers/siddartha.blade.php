
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
            <div class="col-lg-8">
              <!-- <img src="{{asset('public/assets/images/siddharth.jpg')}}" class="img-fluid" alt=""> -->
              <div style="background: url({{asset('public/assets/images/siddharth.jpg')}})" class="jumbotron bg-cover text-white">
                <div class="container py-5 text-center">
                    <h2 class="font-weight-bold">Siddharth Institute of Engineering and Technology, Puttur</h2>
                    <a href="#" role="button" class="btn btn-primary px-5">Download Brochure</a>
                </div>
            </div>
              <h3 style="font-size: 26px;">Siddharth Institute of Engineering and Technology, Puttur</h3>
           
            </div>
            <div class="col-lg-4">
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Place</h5>
                <p><a href="#">Ambala, Haryana</a></p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Key Point</h5>
                <p>NAAC A Grade</p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Admission Broucher</h5>
                <p><a href="https://www.mmumullana.org/wp-content/uploads/2020/03/MMDU-Prospectus-2020-21.pdf" target="_blank">Click Here</a></p>
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
               
                <p class="text-justify">Siddharth Institute of Engineering & Technology (SIETK) is an emerging center for excellence in Engineering & Management education, boast of energetic & experienced faculty, successful students, great infrastructure and excellent placements record. The management encourages the students and the faculty to “Dare to Dream and Strive to Achieve”. The institutes are indeed “dream come true” for many aspiring youngsters from rural areas in Chittoor District and Southern Andhra Pradesh.
                </p>
                <p class="text-justify">The institutions have achieved remarkable growth since their inception and have grown from strength to strength under the dynamic and innovative leadership of the Chairman, Dr. K. Ashok Raju. In addition to Graduate Engineering (B.Tech.), the institutions have been approved to run Post-graduate (M.Tech - nine specializations, MCA & MBA) and Diploma programmes. The total intake of students for SIETK has gone up from 180 in 2001 to 1842 in 2017, a testimony of abundant trust placed by the students and the parents in these institutions.<br>

                Established in 2001 (SIETK) in a sprawling 30-acre campus amid beautiful hill range of the Eastern Ghats, the institutions are located in Puttur town and are very proximate to Narayanavanam, a holy place, where Lord Venkateswara has married Goddess Padmavathi. The institutions are 22kms from Tirupati airport and are well connected by rail and road (Tirupati – Chennai highway).</p>
    
                <p class="text-justify">Siddharth Institute of Engineering & Technology has received NBA (National Board of Accreditations) accreditation for five programmes and has been accredited by NAAC with ‘A’ grade..</p>
    
                <h2 class="font-weight-bold mb-1 mt-3">More Focal Point About The MMU, Haryana:-</h2>
                <hr>
                <div class="focal-text p-3">
                    <p><strong class="text-dark">1.</strong>&nbsp;&nbsp;Aesthetically designed buildings with spacious, well-ventilated and well-furnished classrooms and laboratories</p>
                    <p><strong class="text-dark">2.</strong>&nbsp;&nbsp;Well-equipped laboratories with the latest equipment and continuously upgraded based on requirements.</p>
                    <p><strong class="text-dark">3.</strong>&nbsp;&nbsp;E-learning classrooms in every department to use technology and modern teaching methods to train the students more effectively.</p>
                    <p><strong class="text-dark">4.</strong>&nbsp;&nbsp;Air-conditioned library with latest collection of volumes. In addition, an exclusive Digital Library.</p>
                    <p><strong class="text-dark">4.</strong>&nbsp;&nbsp;Air-conditioned computer laboratories with brand new computers with latest configuration.</p>
                    <p><strong class="text-dark">5.</strong>&nbsp;&nbsp;Wi-Fi all over the campus.</p>
                    <p><strong class="text-dark">6.</strong>&nbsp;&nbsp;Exclusive hostels for girls and boys with modern facilities.</p>
                    <p><strong class="text-dark">7.</strong>&nbsp;&nbsp;A hygienic canteen within the campus catering to the needs of the students and the staff at concessional prices.</p>
                    <p><strong class="text-dark">7.</strong>&nbsp;&nbsp;Mineral water plants throughout the campus.</p>
                    <p><strong class="text-dark">8.</strong>&nbsp;&nbsp;Spacious playgrounds for extra-curricular development of the students.</p>
                    <p><strong class="text-dark">8.</strong>&nbsp;&nbsp;Entrepreneurship Development Cell undertakes training programs enabling promising students to emerge as prospective entrepreneurs.</p>
                    <p><strong class="text-dark">8.</strong>&nbsp;&nbsp;Special care is taken to focus on individual student by periodical personal counselling with thrust on discipline, attendance and academic progress.</p>
                    
                 
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
                            <td>&#x20B9; 29,000 (1st Year Fees)</td>
                            <td class="text-center">Graduation with 50% + CAT</td>
                        </tr>
                        <tr>
                            <th>B.Tech</th>
                            <td>&#x20B9; 72,700 (1st Year Fees)</td>
                            <td class="text-center">10+2 with 75% + JEE Main</td>
                        </tr>
                        <tr>
                            <th>M.Tech</th>
                            <td>&#x20B9; 57,000 (1st Year Fees)</td>
                            <td class="text-center">10+2</td>
                        </tr>
                        <tr>
                            <th>MCA</th>
                            <td>&#x20B9; 34,000 (1st Year Fees)</td>
                            <td class="text-center">10+2</td>
                        </tr>
                        <tr>
                            <th>Polytechnic</th>
                            <td>&#x20B9; 26,000 (1st Year Fees)</td>
                            <td class="text-center">10th</td>
                        </tr>
                    </tbody>
                </table>
                </div>
               <!-- Highlights -->
               <div class="highlights mt-5">
                    <h2 class="font-weight-bold text-dark" style="font-size:24px;">Siddharth Institute of Engineering and Technology Highlights:-</h2>
                    <p class="text-justify">Siddharth Institute of Engineering and Technology is a popular engineering college in Puttur, Andhra Pradesh, India. It is approved by AICTE and is ranked among the top 100 engineering colleges by AP.</p>
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
                                <td>Air Conditioned Seminar Halls, 12 LIBRARIES,6 Hostels & three Resedential Blocks, Sports Complex, Exclusive Hostel for Boys & Girls, 4000-capacity A/C auditorium with world class Audio and Video systems, Wi-Fi all over the campus.</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>Puttur, Andhra Pradesh, India</td>
                            </tr>
                            <tr>
                                <th>Year Of Establishment</th>
                                <td>2001</td>
                            </tr>
                            <tr>
                                <th>Course Offered</th>
                                <td>Diploma, Undergraduate, Postgraduate, Certificate.</td>
                            </tr>
                            <tr>
                                <th>Recogination</th>
                                <td>	University Grants Commission (UGC), All India Council for Technical Education (AICTE), NAAC A Grade & NIRF</td>
                            </tr>
                            <tr>
                                <th>Download Admission Broucher</th>
                                <td><a href="https://www.mmumullana.org/wp-content/uploads/2020/03/MMDU-Prospectus-2020-21.pdf" target="_blank">Click Here</a></td>
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