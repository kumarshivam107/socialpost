
@extends('pioneers.layouts.master')
@section('content')
<title>Colleges - Education Pioneers</title>
@include('pioneers.layouts.header')
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container about-context">
        <h2>Colleges</h2>
      </div>
      <div>
         <img src="{{asset('public/assets/images/college.jpg')}}"  style="width:100%; max-height: 300px;;" alt="Image 1">
    </div>
     
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Colleges</h2>
          <p>Popular Colleges</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-2">
            <div class="course-item">
              <img src="{{asset('public/assets/images/marwadi2.jpg')}}" style="width:100%; height:160px;" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Gujrat,Rajkot</h4>
                  <p class="price">NAAC A+</p>
                </div>

                <h3><a href="{{url('/marwadi-university')}}" class="stretched-link">Marwadi University</a></h3>
                <p class="text-justify">Marwadi University is a private university located in Rajkot, Gujarat, India. It was established in 2016 by the Marwadi Education Foundation.</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-2 mb-2">
            <div class="course-item">
              <img src="{{asset('public/assets/img/svcop.jpg')}}" style="width:100%; height:160px;"  alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Chittor, A.p.</h4>
                  <p class="price">NAAC A</p>
                </div>

                <h3><a href="{{url('/venkateshwara-group-of-institutions')}}" class="stretched-link">Sri Venketswara College, Chittor</a></h3>
                <p class="text-justify">Sri Venkateswara Group of Institutions (SVGEI) comprises twenty-three (23) colleges promoted by Srinivasa Educational Academy spread all over Andhra Pradesh.</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-2">
            <div class="course-item">
              <img src="{{asset('public/assets/img/MIT, Pune.jpg')}}" style="width:100%; height:160px;"  alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Ambala, Haryana</h4>
                  <p class="price">NAAC A</p>
                </div>

                <h3><a href="{{url('/maharshi-markandey-university')}}" class="stretched-link">MMU, Haryana</a></h3>
                <p>Maharishi Markandeshwar University, Mullana, officially Maharishi Markandeshwar, Mullana, is a deemed university at Mullana near Ambala in the state of Haryana, India</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div> 
        <!-- Nit Polytechnic -->
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-2">
            <div class="course-item">
              <img src="{{asset('public/assets/images/nitpolytechnic.jpg')}}" style="width:100%; height:160px;"  alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Nagpur, Maharastra</h4>
                  <p class="price">NBA</p>
                </div>

                <h3><a href="{{url('/nit-polytechnic')}}" class="stretched-link">NIT Polytechnic, Maharastra</a></h3>
                <p class="text-justify">Nit Polytechnic, Nagpur, Maharastra Is NBA Accrediated Leading Institute of Maharastra Situated in Nagpur Run and Managed By Shri Sai Shikshan Sanstha.</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div> 

          <!-- Sanjivani Colleges-->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-2">
            <div class="course-item">
              <img src="{{asset('public/assets/images/sanjivani.jpg')}}" style="width:100%; height:160px;"  alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Kopargaon, Maharastra</h4>
                  <p class="price">NBA</p>
                </div>

                <h3><a href="{{url('/sanjivani-polytechnic-college-Kopargaon')}}" class="stretched-link">S.K.B.P. Polytechnic, Maharastra</a></h3>
                <p class="text-justify">Sanjivani K.B.P. set a benchmark of standard academia. Sanjivani Group of Institutions, kopargaon has come a long way since gaining Institutes title in 1983.</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div> 

          <!-- Dhanlaxmi College -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-2">
            <div class="course-item">
              <img src="{{asset('public/assets/images/dhanlaxmi.jpg')}}" style="width:100%; height:160px;"  alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Chennai, Maharastra</h4>
                  <p class="price">NBA</p>
                </div>

                <h3><a href="{{url('/DHANALAKSHMI-SRINIVASAN-ENGINEERING-COLLEGE')}}" class="stretched-link">DSEC, Chennai</a></h3>
                <p class="text-justify">Dhanalakshmi Srinivasan Engineering College Established in the year 2001, the college strives to impart quality education in the field of engineering and technology through a stimulating and innovative environment. .</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div>

          <!-- Siddartha College -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg- mb-2">
            <div class="course-item">
              <img src="{{asset('public/assets/images/siddharth.jpg')}}" style="width:100%; height:160px;"  alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Puttur A.P.</h4>
                  <p class="price">NAAC A Grade</p>
                </div>

                <h3><a href="{{url('/siddharth-institute-of-engineering-and-technology')}}" class="stretched-link">SIETK College, Puttur</a></h3>
                <p class="text-justify">Siddharth Institute of Engineering and Technology is a popular engineering college in Puttur, Andhra Pradesh, India Approved By AICTE, New Delhi & NAAC A Grade Accrediated By NATIONAL ASSESSMENT AND ACCREDITATION COUNCIL.</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-2 mb-2">
            <div class="course-item">
              <img src="{{asset('public/assets/img/svcop.jpg')}}" style="width:100%; height:160px;"  alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Chittor, A.p.</h4>
                  <p class="price">NAAC A</p>
                </div>

                <h3><a href="{{url('/venkateshwara-group-of-institutions')}}" class="stretched-link">Sri Venketswara College, Chittor</a></h3>
                <p class="text-justify">Sri Venkateswara Group of Institutions (SVGEI) comprises twenty-three (23) colleges promoted by Srinivasa Educational Academy spread all over Andhra Pradesh.</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div> <!-- End Course Item-->

             <!-- Sandip University -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-2">
            <div class="course-item">
              <img src="{{asset('public/assets/images/dhanlaxmi.jpg')}}" style="width:100%; height:160px;"  alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Madhubani, Bihar</h4>
                  <p class="price">UGC Appproved</p>
                </div>

                <h3><a href="{{url('/sandip-university-madhubani')}}" class="stretched-link">Sandip University, Madhubani</a></h3>
                <p class="text-justify">Sandip University, Sijoul is a private university located in Sijoul, Madhubani district, Bihar, India. The university was established in 2017 by Sandip Foundation under the Bihar Private Universities Act, 2013.</p>
                <a class="text-success">Know More</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Popular Courses Section -->

<!-- Course -->
    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show countryname-text" data-toggle="tab" href="#tab-1"><span class="flag-icon flag-icon-in mr-2"></span>India</a>
              </li>
              <li class="nav-item">
                <a class="nav-link countryname-text" data-toggle="tab" href="#tab-2"><span class="flag-icon flag-icon-np mr-2"></span>Nepal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link countryname-text" data-toggle="tab" href="#tab-3"><span class="flag-icon flag-icon-ch mr-2"></span>China</a>
              </li>
              <li class="nav-item">
                <a class="nav-link countryname-text" data-toggle="tab" href="#tab-4"><span class="flag-icon flag-icon-bd mr-2"></span>Bangaladesh</a>
              </li>
              <li class="nav-item">
                <a class="nav-link countryname-text" data-toggle="tab" href="#tab-5"><span class="flag-icon flag-icon-ru mr-2"></span>Russia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link countryname-text" data-toggle="tab" href="#tab-6"><span class="flag-icon flag-icon-ua mr-2"></span>Ukrain</a>
              </li>
              <li class="nav-item">
                <a class="nav-link countryname-text" data-toggle="tab" href="#tab-7"><span class="flag-icon flag-icon-ph mr-2"></span>Philippines</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-6 col-md-6 collegelist-row">
                    <h2 class="heading text-center">Enggineering College</h2>
                    <ul>
                      <li><a>Indian Institute of Technology (Banaras Hindu University), Varanasi.</a></li>
                      <li><a>Indian Institute of Technology (Indian School of Mines).</a></li>
                      <li><a>Indian Institute of Technology Bhubaneswar.</a></li>
                      <li><a>Indian Institute of Technology Bombay.</a></li>
                      <li><a>Indian Institute of Technology Delhi.</a></li>
                      <li><a>Indian Institute of Technology Gandhinagar.</a></li>
                      <li><a>Indian Institute of Technology Guwahati.</a></li>
                      <li><a>Indian Institute of Technology Hyderabad.</a></li>
                      <li><a>Indian Institute of Technology Indore.</a></li>
                      <li><a>Indian Institute of Technology Jodhpur.</a></li>
                      <li><a>Indian Institute of Technology Kanpur.</a></li>
                      <li><a>Indian Institute of Technology Kharagpur.</a></li>
                      <li><a>Indian Institute of Technology Madras.</a></li>
                      <li><a>Indian Institute of Technology Mandi.</a></li>
                      <li><a>Indian Institute of Technology Patna.</a></li>
                      <li><a>Indian Institute of Technology Roorkee.</a></li>
                      <li><a>Indian Institute of Technology Ropar.</a></li>
                      <li><a>Indraprastha Institute of Information Technology-New Delhi (IIIT New Delhi, Delhi).</a></li>
                    <li><a>Greater NOIDA Institute of Technology, NOIDA</a></li>
                    <li><a>Guru Gobind Singh Indraprastha University.</a></li>
                    <li><a>Harward Institute of Management & Technology, NOIDA</a></li>
                    <li><a>Hindustan Institute of Technology, NOIDA</a></li>
                    <li><a>IEC College of Engineering & Technology, NOIDA</a></li>
                    <li><a>IILM Academy for Higher Learning, NOIDA</a></li>
                    <li><a>IIMT College of Engineering, NOIDA</a></li>
                    <li><a>IMS Engineering College, Ghaziabad</a></li>
                    <li><a>Indian Institute of Engineering Science And Technology, Shibpur.</a></li>
                    <li><a>Indian Institute of Space Science and Technology.</a></li>
                    <li><a>Institute of Chemical Technology.</a></li>
                    <li><a>International Institute of Information Technology.</a></li>
                    <li><a>International Maritime Institute, NOIDA</a></li>
                    <li><a>ITS Engineering College, NOIDA</a></li>
                    <li><a>Jadavpur University.</a></li>
                    <li><a>Jaipur Engineering College And Research Center</a></li>
                    <li><a>Jamia Millia Islamia.</a></li>
                    <li><a>Jawaharlal Nehru Technological University.</a></li>
                    <li><a>Jaypee Institute of Information Technology.</a></li>
                    <li><a>Jaypee University of Information Technology-Solan.</a></li>
                    <li><a>JECRC University</a></li>
                    <li><a>JECRC University, Jaipur</a></li>
                    <li><a>JIS College Of Engineering, Kalyani W.B</a></li>
                    <li><a>JSS Academy of Technical Education, NOIDA</a></li>
                    <li><a>K L University, Guntur</a></li>
                    <li><a>K.S.Rangasamy College of Technology.</a></li>
                    <li><a>Kalinga Institute of Industrial Technology.</a></li>
                    <li><a>Karunya Institute of Technology and Sciences-Coimbatore.</a></li>
                    <li><a>Koneru Lakshmaiah Education Foundation University (K L College of Engineering).</a></li>
                    <li><a>Kongu Engineering College.</a></li>
                    <li><a>Kumaraguru College of Technology.</a></li>
                    <li><a>Llyod Institute of Management & Technology, NOIDA</a></li>
                    <li><a>M. S. Ramaiah Institute of Technology.</a></li>
                    <li><a>Maharashtra Institute Of Technology</a></li>
                    <li><a>Maharashtra Institute of Technology, Pune.</a></li>
                    <li><a>Malaviya National Institute of Technology, Jaipur.</a></li>
                    <li><a>Mangalmay Institute of Management & Technology, NOIDA</a></li>
                    <li><a>Manipal Institute of Technology.</a></li>
                    <li><a>Maulana Azad National Institute of Technology.</a></li>
                    <li><a>Meerut Institute of Engineering & Technology, Meerut</a></li>
                    <li><a>Mepco Schlenk Engineering College.</a></li>
                    <li><a>MIT -ADT University, Pune</a></li>
                    <li><a>MIT -WPC University, Pune</a></li>
                    <li><a>Motilal Nehru National Institute of Technology.</a></li>
                    <li><a>National Institute of Industrial Engineering, Mumbai.</a></li>
                    <li><a>National Institute of Technology Calicut.</a></li>
                    <li><a>National Institute of Technology Durgapur.</a></li>
                    <li><a>National Institute of Technology Hamirpur.</a></li>
                    <li><a>National Institute of Technology Kurukshetra.</a></li>
                    <li><a>National Institute of Technology Manipur.</a></li>
                    <li><a>National Institute of Technology Meghalaya.</a></li>
                    <li><a>National Institute of Technology Rourkela.</a></li>
                    <li><a>National Institute of Technology Silchar.</a></li>
                    <li><a>National Institute of Technology Surathkal.</a></li>
                    <li><a>National Institute of Technology Tiruchirappalli.</a></li>
                    <li><a>National Institute of Technology Warangal.</a></li>
                    <li><a>NIMS University, Jaipur</a></li>
                    <li><a>Nirma University.</a></li>
                    <li><a>NOIDA Institute of Engineering & Technology, NOIDA</a></li>
                    <li><a>Pandit Dwarka Prasad Mishra Indian Institute of Information Technology, Design and Manufacturing (IIITDM), Jabalpur.</a></li>
                    <li><a>PES University.</a></li>
                    <li><a>Pondicherry Engineering College.</a></li>
                    <li><a>PSG College of Technology.</a></li>
                    <li><a>PSNA College of Engineering and Technology, Dindigul.</a></li>
                    <li><a>Punjab Engineering College.</a></li>
                    <li><a>R.M.K. Engineering College.</a></li>
                    <li><a>R.V. College of Engineering.</a></li>
                    <li><a>S.R.M Institute of Science and Technology.</a></li>
                    <li><a>Sagi Ramakrishnam Raju Engineering College.</a></li>
                    <li><a>Sardar Vallabhbhai National Institute of Technology.</a></li>
                    <li><a>Saveetha Engineering College.</a></li>
                    <li><a>Shanmugha Arts Science Technology & Research Academy (SASTRA).</a></li>
                    <li><a>Shri Ramdeobaba College of Engineering and Management.</a></li>
                    <li><a>Siddaganga Institute of Technology.</a></li>
                    <li><a>SINGHAD Institutes , Pune</a></li>
                    <li><a>Skyline Institute of Engineering & Technology, NOIDA</a></li>
                    <li><a>Sri Sai Ram Engineering College.</a></li>
                    <li><a>Sri Sivasubrmaniya Nadar College of Engineering.</a></li>
                    <li><a>Sri Venkateswara University.</a></li>
                    <li><a>ST. Joseph's College of Engineering.</a></li>
                    <li><a>Thapar University.</a></li>
                    <li><a>The Northcap University, GurGaon</a></li>
                    <li><a>Thiagarajar College of Engineering.</a></li>
                    <li><a>United College of Engineering & Research, NOIDA</a></li>
                    <li><a>University College of Engineering.</a></li>
                    <li><a>UPES University, Dehradun</a></li>
                    <li><a>Vel Tech Rangarajan Dr.Sagunthala R&D Institute of Science and Technology.</a></li>
                    <li><a>Vellore Institute of Technology.</a></li>
                    <li><a>Vignan's Foundation for Science, Technology and Research.</a></li>
                    <li><a>Vishveshwarya Institute of Engineering & Technology, NOIDA</a></li>
                    <li><a>Visvesvaraya National Institute of Technology, Nagpur (Deemed University).</a></li>
                    <li><a>VivekaNanda Global University, Jaipur</a></li>
                    <li><a>Zakir Husain College of Engineering & Technology.</a></li>
                </ul>
                  </div>
        
                  <div class="col-lg-6 col-md-6 collegelist-row">
                    <h2 class="heading text-center">MBBS Colleges</h2>
                    <ul>
                                                    <li><a>A.C.P.M Medical College,Maharashtra</a></li>
                                                    <li><a>A.C.S Medical College And Hospital,Chennai</a></li>
                                                    <li><a>A.J. Institute of Medical Science & Research Centre, Mangalore</a></li>
                                                    <li><a>Aarupadai Veedu Medical College, Pondicherry</a></li>
                                                    <li><a>Academy of Medical Sceiences, Pariyaram, Kannur</a></li>
                                                    <li><a>Acharya Shri Chander College of Medical & Hospital, Jammu</a></li>
                                                    <li><a>Adesh Institute of Medical Sciences & Research, Bhatinda</a></li>
                                                    <li><a>Agartala Government Medical College & Hospital, Agartala</a></li>
                                                    <li><a>Al-Ameen Medical College, Bijapur</a></li>
                                                    <li><a>Alluri Sitaram Raju Academy of Medical Science, Eluru</a></li>
                                                    <li><a>Amala Institute of Medical Sciences, Thrissur</a></li>
                                                    <li><a>Amala Institute of Medical Sciences, Thrissur</a></li>
                                                    <li><a>Amrita School of Medical College</a></li>
                                                    <li><a>Amrita School of Medical Science, Kochi</a></li>
                                                    <li><a>Amrita School of Medicine, Kochi</a></li>
                                                    <li><a>Army College of Medical Science, New Delhi</a></li>
                                                    <li><a>Azeeza Institute of Medical Science & Research</a></li>
                                                    <li><a>Azeeza Institute of Medical Sciences and Research, Kollam</a></li>
                                                    <li><a>Azeezia Institute of Medical Sciences, Kollam</a></li>
                                                    <li><a>B.J Medical College, Ahmedabad</a></li>
                                                    <li><a>B.R.D. Medical College,Uttar Pradesh</a></li>
                                                    <li><a>Basaveswara Medical College And Hospital, Chitradurga</a></li>
                                                    <li><a>Belgaum Institute of Medical Sciences, Belgaum</a></li>
                                                    <li><a>Bharati Vidyapeeth Medical College</a></li>
                                                    <li><a>Bhaskar Medical College, Yenkapally</a></li>
                                                    <li><a>Bidar Institute of Medical Sciences, Bidar</a></li>
                                                    <li><a>Burdwan Medical College & Hospital,West Bengal</a></li>
                                                    <li><a>C.U Shah Medical College, Surendranagar</a></li>
                                                    <li><a>Calcutta National Medical College</a></li>
                                                    <li><a>Chengalpattu Medical College, Chengalpattu</a></li>
                                                    <li><a>Chettinad Hospital & Research Institute, Kanchipuram</a></li>
                                                    <li><a>Christian Medical College</a></li>
                                                    <li><a>Christian Medical College</a></li>
                                                    <li><a>Christian Medical College, Ludhiana</a></li>
                                                    <li><a>Christian Medical College, Vellore</a></li>
                                                    <li><a>Christian Medical College, Vellore</a></li>
                                                    <li><a>Co-Operative Medical College, Kochi</a></li>
                                                    <li><a>Coimbatore Medical College, Coimbatore</a></li>
                                                    <li><a>D.Y. Patil medical college, Pune</a></li>
                                                    <li><a>Dayanand Medical College</a></li>
                                                    <li><a>Dayanand Medical College and Hospital, Ludhiana</a></li>
                                                    <li><a>Deccan College of Medical Science, Hyderabad</a></li>
                                                    <li><a>DR B R Ambedkar Medical College</a></li>
                                                    <li><a>Dr. B. R. Ambedkar Medical College, Bangalore</a></li>
                                                    <li><a>Dr. Sampurnand Medical College , Jodhpur</a></li>
                                                    <li><a>Dr. Sampurnand Medical College , Jodhpur</a></li>
                                                    <li><a>Dr. Vasantrao Pawar medial college, Nasik, Maharashtra</a></li>
                                                    <li><a>Eras LucKnow Medical College</a></li>
                                                    <li><a>Eras Lucknow Medical College</a></li>
                                                    <li><a>Eras Lucknow Medical College</a></li>
                                                    <li><a>Geetanjali Medical College & Hospital , Udaipur</a></li>
                                                    <li><a>Geetanjali Medical College & Hospital , Udaipur</a></li>
                                                    <li><a>Govt Medical College , Kota</a></li>
                                                    <li><a>Jawaharlal Nehru Medical College , Ajmer</a></li>
                                                    <li><a>Jhalawar Medical College , Jhalawar</a></li>
                                                    <li><a>Kashibai navle college, Maharashtra.</a></li>
                                                    <li><a>Kasturba Medical College, Manipal</a></li>
                                                    <li><a>KJ somaiya. Mumbai, Maharashtra</a></li>
                                                    <li><a>Latur Medical College</a></li>
                                                    <li><a>Latur medical college, Maharashtra</a></li>
                                                    <li><a>M S Ramaiah Medical College</a></li>
                                                    <li><a>Mahatma Gandhi Medical College & Hospital , Jaipur</a></li>
                                                    <li><a>Manipal University</a></li>
                                                    <li><a>Manipal university</a></li>
                                                    <li><a>National Institute of Medical Science & Research , Jaipur</a></li>
                                                    <li><a>NKP Salve, Nagpur, Maharashtra</a></li>
                                                    <li><a>Pravara institute, Loni, Maharashtra</a></li>
                                                    <li><a>R.N.T Medical College , Udaipur</a></li>
                                                    <li><a>S.M.S Medical College , Jaipur</a></li>
                                                    <li><a>Sardar Patel Medical College , Bikaner</a></li>
                                                    <li><a>Sri Ramachandra Medical College Research Institute</a></li>
                                                </ul>
                  </div>
                </div>
              </div>


              <!-- Nepal-->
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-6 col-md-6 collegelist-row">
                    <h1 class="heading">Nepal</h1>
                    <ul>
                      <li><a>Birat Medical College, Biratnagar</a></li>
                      <li><a>College of Medical Sciences, Bharatpur</a></li>
                      <li><a>Devdaha Medical College, Devdaha</a></li>
                      <li><a>Kathmandu Medical College, Kathmandu</a></li>
                      <li><a>Lumbini Medical College, Palpa</a></li>
                      <li><a>Manipal College of Medical Sciences, Pokhara</a></li>
                      <li><a>Nepal Medical College, Kathmandu</a></li>
                      <li><a>Nepalgunj Medical College, Nepalgunj</a></li>
                      <li><a>Nobel Medical College, Biratnagar</a></li>
                      <li><a>School of Medical Sciences, Kathmandu University</a></li>
                  </ul>
                </div>
                </div>
              </div>
              <!-- China -->
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-6 col-md-6 collegelist-row">
                    <h1 class="heading">China</h1>
                    <ul>
                      <li><a>Anhui Medical University</a></li>
                      <li><a>Capital Med. University Beijing</a></li>
                      <li><a>China Medical University</a></li>
                      <li><a>Fujian Medical University</a></li>
                      <li><a>Hust University</a></li>
                      <li><a>Jilin University</a></li>
                      <li><a>Shandong University</a></li>
                      <li><a>Sun Yat-sen University</a></li>
                      <li><a>Wenzhou Med. College</a></li>
                      <li><a>Xiamen Medical University</a></li>
                      <li><a>Xian Jiatong University</a></li>
                      <li><a>Zhengzhou University</a></li>
                  </ul>
                  </div>
                </div>
              </div>

              <!--  Bangaladesh -->
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-6 col-md-6 collegelist-row">
                    <h1 class="heading">Bangaladesh</h1>
                    <ul>
                      <li><a>Chitwan Medical College, Bharatpur</a></li>
                      <li><a>Gandaki Medical College, Pokhara</a></li>
                      <li><a>Janaki Medical College, Janakpur</a></li>
                      <li><a>Kist Medical College, kathmandu</a></li>
                      <li><a>National Medical College, Birgunj</a></li>
                      <li><a>Nepalese Army Institute of Health Sciences, Kathmandu</a></li>
                      <li><a>Universal College of Medical Science, Bhairahawa</a></li>
                  </ul>
                </div>
                </div>
              </div>

              <!-- Russia-->
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-6 col-md-6 collegelist-row">
                    <h1 class="heading">Russia</h1>
                    <ul>
                      <li><a>Bashkir State Medical University(6years)</a></li>
                      <li><a>Grodno State Medical University(6YEARS)</a></li>
                      <li><a>Orenburg State Medical University(6years)</a></li>
                      <li><a>Tver State Medical University(6years)</a></li>
                      <li><a>Vitebsk State Medical University(6years)</a></li>
                  </ul>
                </div>
                </div>
              </div>

              <!-- Ukrain -->
              <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-6 col-md-6 collegelist-row">
                    <h1 class="heading">UKRAIN</h1>
                    <ul>
                      <li><a>"OO Bogomolets Kiev National Medical University</a></li>
                      <li><a>Bukivinian State Medical University</a></li>
                      <li><a>Dnepropetrovsk State Medical Academy</a></li>
                      <li><a>Ivano Frankivsk National Medical University</a></li>
                      <li><a>Kharkiv National Medical University</a></li>
                      <li><a>Kiev Medical University UAFM</a></li>
                      <li><a>Lviv National Medical University(6years)</a></li>
                      <li><a>Odessa National Medical University</a></li>
                      <li><a>Poltava National Medical University</a></li>
                      <li><a>Ternopil State Medical University</a></li>
                      <li><a>V.N Karazina Kharkiv National Medical University</a></li>
                      <li><a>Vinnitssa National Medical University</a></li>
                  </ul>
                </div>
                </div>
              </div>

              <!-- Philippines -->
              <div class="tab-pane" id="tab-7">
                <div class="row">
                  <div class="col-lg-6 col-md-6 collegelist-row">
                    <h1 class="heading">PHILIPPINES</h1>
                    <ul>
                      <li><a>"OO Bogomolets Kiev National Medical University</a></li>
                      <li><a>Bukivinian State Medical University</a></li>
                      <li><a>Dnepropetrovsk State Medical Academy</a></li>
                      <li><a>Ivano Frankivsk National Medical University</a></li>
                      <li><a>Kharkiv National Medical University</a></li>
                      <li><a>Kiev Medical University UAFM</a></li>
                      <li><a>Lviv National Medical University(6years)</a></li>
                      <li><a>Odessa National Medical University</a></li>
                      <li><a>Poltava National Medical University</a></li>
                      <li><a>Ternopil State Medical University</a></li>
                      <li><a>V.N Karazina Kharkiv National Medical University</a></li>
                      <li><a>Vinnitssa National Medical University</a></li>
                  </ul>
                </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->

  </main><!-- End #main -->
  @include('pioneers.layouts.footer')
@endsection