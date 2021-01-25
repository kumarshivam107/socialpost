</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="index.php" class="logo mr-auto"><img src="assets/images/admis.jpg" alt="" class="img-fluid"><span style="padding-top:10px;" class="admission-title">ADMISSION</span></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{'index' == request()->path() ? 'active' : ''}}"><a href="{{url('/index')}}">Home</a></li>
          <li class="{{'about' == request()->path() ? 'active' : ''}}"><a href="{{url('/about')}}">About</a></li>
          <li class="{{'course-name' == request()->path() ? 'active' : ''}}"><a href="{{url('/course-name')}}">Course</a></li>
          <li class="{{'colleges' == request()->path() ? 'active' : ''}}"><a href="{{url('/colleges')}}">Colleges</a></li>
          <li class="drop-down" class="{{'bscc' == request()->path() ? 'active' : ''}}"><a href="">Services</a>
            <ul>
              <li><a href="{{url('/bscc')}}">Bihar Student Credit Card</a></li>          
              </li>
            </ul>
          </li>
          <li class="{{'gallery' == request()->path() ? 'active' : ''}}"><a href="{{url('/gallery')}}">Gallery</a></li>
          <li class="{{'contact' == request()->path() ? 'active' : ''}}"><a href="{{url('/contact')}}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{url('/apply-now')}}" class="get-started-btn">Apply Now</a>

    </div>
  </header>
  <!-- End Header -->