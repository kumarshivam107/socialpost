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
              <div style="background: url({{asset('public/assets/images/thumb-venten.jpg')}})" class="jumbotron bg-cover text-white">
                <div class="container py-5 text-center">
                    <h2 class="font-weight-bold">Sri Venkateswara Group of Educational Institutions, Chittor</h2>
                    <a href="#" role="button" class="btn btn-primary px-5">Download Brochure</a>
                </div>
            </div>
              <h3 style="font-size: 24px;">Sri Venkateswara Group of Educational Institutions, Chittor(A.P.)</h3>
           
            </div>
            <div class="col-lg-4">
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Place</h5>
                <p><a href="#">Chittor, A.P.</a></p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Key Point</h5>
                <p>NAAC A Grade</p>
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
    <!-- Venketswara Group Of Colleges -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-12 marwadi-text">
                <p class="text-justify">Sri Venkateswara Group of Institutions (SVGEI) comprises twenty-three (23) colleges promoted by Srinivasa Educational Academy spread all over Andhra Pradesh. Sri Venkateswara College of Engineering and Technology (Autonomous), Chittoor is the flagship institute of the SVGEI, which has contributed much to the success story of the group.</p>
                <p class="text-justify">The university offers various undergraduate, postgraduate, diploma and doctoral courses in the field of commerce, science, computer applications, law, pharmacy, and others. The course curriculum at Sri Venkateswara Group of Institutions is carefully thought and designed. The course structure integrates personal awareness and practical knowledge for the holistic development of the students.</p>
    
                <p class="text-justify">When it comes to infrastructure and facilities at Sri Venkateswara Group of Institutions, it offers its students an integrated and landscaped campus, relevant placement opportunities, industry interaction, recreational activities, and others.</p>
                <!--  SRi Venketswara College Of Enggineering & Technology -->
                <div class="colleges-div mt-3">
                    <h2 class="font-weight-bold">Colleges Under SVGEI, Chittor(A.P.):-</h2>
                    <hr>
                    <h3 class="text-dark font-weight-bold">Sri Venkateswara College of Engineering and Technology (Autonomous) (SVCET):-</h3>
                    <img src="{{asset('public/assets/images/srivenken.gif')}}" class="img-fluid" style="min-width:100%;" alt="SVCET">
                    <p class="text-justify">Sri Venkateswara College of Engineering and Technology (Autonomous) (SVCET), Chittoor, Ranked with 201-250 Band Among Top Engineering Colleges by NIRF 2020, MHRD, Govt. of India. SVCET is also NBA Accredited under Tier-I for three years upto 30.06.2021 and Accredited by NAAC with A Grade Accredited Institution. Established in the year 1998, the Institute is Affiliated to Jawaharlal Nehru Technological University, Ananthapuramu and Recognized by AICTE, New Delhi. It is also Recognized by the UGC under Section 2(f) and 12(b). The Institute has been Granted Autonomy by UGC from Academic Year 2011-2012. The Institute offers Eight(8) UG and Six(6)PG programs in Engineering and Technology, MBA , MCA and offers Four(5) Diploma programms</p>
                    <h3 class="font-weight-bold text-danger">Key Points About The SVCET:-</h3>
                    <ul>
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>SVCET(A),Chittoor is now Ranked with 201-250 BAND  Among Top Engineering Colleges by NIRF 2020, MHRD, Govt. of India.</span></l1>
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>SVCET has been Recognized as College with Potential for Excellence by UGC,2016</span></li>
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>SVCET has been ranked 15th in Competitive sucess review-2015.</span></li>
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>SVCET has been Ranked 31st in Top Engineering Colleges of Excellence,Competitive sucess review, july 2012-june 2013.</span></li>
                        <!-- <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>SVCET has been Ranked 31st in Top Engineering Colleges of Excellence,Competitive sucess review, july 2012-june 2013</span><li> -->
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>SVCET has been ranked 4th among the Top Engineering Colleges in Andhra Pradesh in a survey conducted by CSR-GHRDC in August, 2010</span></li>
                    </ul>
                    <table class="venken-table table-responsive table table-bordered mt-3">
                    <thead>
                        <tr>
                        <th>Type Of College</th>
                        <td>Private</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Infrastructure</th>
                            <td>10 Acres Of Land, 1000+ Boys Hostel Capcity,Jogging track, CCTV, Medical Room</td>
                        </tr>
                        <tr>
                            <th>Year Of Establishment</th>
                            <td>2002</td>
                        </tr>
                        <tr>
                            <th>Course Offered</th>
                            <td>Diploma(CE/EEE/ECE/ME/CSE), B.Tech(CE/EEE/ECE/CSE/ME/IT/CSE in Data Science) & M.Tech(CAD/CAM & Power Electronic</td>
                        </tr>
                        <tr>
                            <th>Affiliated With</th>
                            <td>Jawaharlal Nehru Technological University Anantapuramu</td>
                        </tr>
                        <tr>
                            <th>Recogination</th>
                            <td>All India Council for Technical Education (AICTE), Union Grant Commission, Accredited By NACC With Grade 'A'0</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>R.V.S. Nagar, Tirupati Road, Chittoor – 517127. Andhra Pradesh. India.</td>
                        </tr>
                        
                        <tr>
                            <th>Download Admission Broucher</th>
                            <td><a href="#" target="_blank">Click Here</a></td>
                        </tr>
                        <tr>
                            <th>Contact For Admission</th>
                            <td>+91-91555555956 Email:-EducationPioneersPatna@gmail.com</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <!-- Sri Venkentaswara College of nursing -->   
                <div class="colleges-div mt-4">
                    <h3 class="text-dark font-weight-bold">Sri VENKATESWARA COLLEGE OF NURSING (SVCON):-</h3>
                    <hr>
                    <img src="{{asset('public/assets/images/venten_nursing.jpg')}}" class="img-fluid" style="min-width:100%;" alt="SVCET">
                    <p>Sri Venkateswara College of Nursing was started in the year 1982 with the ambience of providing Nursing education to the poor and under privileged The Motto of the College is to provide excellent education and expertised skills in Nursing Practice The College has been sanctioned by the AP State Government, approved by AP Nursing Council and Recognized by Indian Nursing Council, New Delhi. It is affiliated by Dr. NTR University of Health Sciences, VijayawadaS.This institute is promoted by Srinivasa Educational Academy Under the watchful eyes of Dr. Ravuri Venkataswamy, the Group has group of selfless, dedicated and hardworking people whose endeavor in providing and establishing good professional education to the students has been a relentless effort on their part. The Institute has got adequate buildings and other infrastructure facilities located very near to the temple city</p>
                    <h3 class="font-weight-bold text-danger text-justify">Key Points About The SVCON:-</h3>
                    <ul>
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>SVCON have owwn parent hospital Named RVS Hospitals & Research Foundation thats Student can take more Pratical Exposure.</span></l1>
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>RVS Hospitals & Research Foundation is a Multi Specialty Hospital which consists of 350 beds with well equipped departments.</span></li>
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>NAAC A Grade Accredited</span></li>
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>18 Years Experience to Provide best quality of Education.</span></li>
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>Best Campus Infrastructure ,Labolatry and Hostel Facility</span></li>
                    </ul>
                    <table class="venken-table table table-responsive table-bordered mt-3">
                    <thead>
                        <tr>
                        <th>Type Of College</th>
                        <td>Private</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Infrastructure</th>
                            <td>10 Acres Of Land, 1000+ Boys Hostel Capcity,Jogging track, CCTV, Medical Room</td>
                        </tr>
                        <tr>
                            <th>Year Of Establishment</th>
                            <td>2002</td>
                        </tr>
                        <tr>
                            <th>Course Offered</th>
                            <td>B.SC. Nursing, General Nursing and Midwifery(GNM) & M.Sc Nursing</td>
                        </tr>
                        <tr>
                            <th>Affiliated With</th>
                            <td>Dr. NTR University Of Health Sciences, Vijayawada</td>
                        </tr>
                        <tr>
                            <th>Recogination</th>
                            <td>All India Nurisng Council & Accredited By NACC With 'A' Grade</td>
                        </tr>
                        <tr>
                            <th>Download Admission Broucher</th>
                            <td><a href="#" target="_blank">Click Here</a></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>R.V.S. Nagar, Tirupati Road, Chittoor – 517127. Andhra Pradesh. India.</td>
                        </tr>
                        <tr>
                            <th>Contact For Admission</th>
                            <td>+91-91555555956 Email:-EducationPioneersPatna@gmail.com</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <!-- Sri Venkentaswara College of Pharmacy -->   
                <div class="colleges-div mt-4">
                    <h3 class="text-dark font-weight-bold">Sri VENKATESWARA COLLEGE OF PHARMACY (SVCOP):-</h3>
                    <hr>
                    <img src="{{asset('public/assets/images/svcop.jpg')}}" class="img-fluid" style="min-width:100%;" alt="SVCET">
                    <p class="mt-2 text-justify">Sri Venkateswara College of Pharmacy (SVCOP), is a brainchild of ‘Bharatha Jyothi’ Dr. R.Venkataswamy, a Philanthropist and Educationist. He is the President of Srinivasa Educational Academy,Cestablished in the year 1991, which is running 23 Institutions under various streams of education. His love for education and care for his native district manifested itself in the form of colleges. The college was started offering B.Pharmacy course in 2007.</p>
                    <p>We now feel optimistic that our college students will excel in the academic achievements by utilizing the services of excellent faculty and the facilities and make our dream of creating a top tier institution among the pharmacy colleges. The management will strive hard to provide all the required facilities from time to time.</p>
                    <h3 class="font-weight-bold text-danger">Key Points About The SVCON:-</h3>
                    <ul>
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>57th Rank in National Institute Of Ranking FrameWork(nirf) Ranking</span></li>
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>Accredited By NAAC By A Grade</span></li>
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>Well Maintained and Large Infrastructure With Boys Hostel, Medical, Zym, Mess annd other Facilities </span></li>
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>Approved By Pharmacy Council Of India(PCI) and All India Council Of Technical Education(AICTE) </span></li>
                        <!-- <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>Approved By Pharmacy Council Of India(PCI) and All India Council Of Technical Education(AICTE)</span><li> -->
                        <li class="ml-2"><i class="fa fa-circle"></i> &nbsp;<span>Best Campus Infrastructure ,Labolatry and Hostel Facility</span></li>
                    </ul>
                    <table class="venken-table table table-responsive table-bordered mt-3">
                    <thead>
                        <tr>
                        <th>Type Of College</th>
                        <td>Private</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Infrastructure</th>
                            <td style="width:20vw!important;"><span>15 Acres Of Land, 300+ Boys Hostel Capcity,Jogging track,ZYM, Mess, Playground CCTV, Medical Room</spam></td>
                        </tr>
                        <tr>
                            <th>Year Of Establishment</th>
                            <td>2007</td>
                        </tr>
                        <tr>
                            <th>Course Offered</th>
                            <td>B.Pharmacy, M.Pharmacy, D.Pharmacy & P.H.D</td>
                        </tr>
                        <tr>
                            <th>Affiliated With</th>
                            <td>Jawaharlal Nehru Technological University Anantapuramu</td>
                        </tr>
                        <tr>
                            <th>Recogination</th>
                            <td>All India Council Of Technical Education (AICTE) & Pharmacy Council Of India (PCI)</td>
                        </tr>
                        <tr>
                            <th>Download Admission Broucher</th>
                            <td><a href="#">Click Here</a></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>R.V.S. Nagar, Tirupati Road, Chittoor – 517127. Andhra Pradesh. India.</td>
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
</main>
@include('pioneers.layouts.footer')
@endsection
  