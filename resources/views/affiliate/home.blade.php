@extends('affiliate.layouts.master')
@section('content')
@include('affiliate.layouts.sidebar')
@include('affiliate.layouts.header')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Admission</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_admission }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Admission Approve</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $approve_admission }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Admission</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pending_admission }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Excepted Earning
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $expected_earning }}</div>
                            </div>
                            <div class="col">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Admission Overview</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="chart_area"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Quick Link</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-8">
                        <p>New Admission Request</p>
                        <p>Approve Admission</p>
                        <p>Approved Commission</p>
                        <p>Support Messgae</p>
                        <p>Promotional Material</p>
                        <p>Busniess Plan</p>
                        <p>Change Password</p>
                    </div>
                    <div class="col-lg-4 ">
                        <p><a href="{{url('/affiliate/new-bonafide-request')}}">Click Here</a><p>
                        <p><a href="{{url('/affiliate/bonafide-request')}}">Click Here</a></p>
                        <p><a href="{{url('/affiliate/approved-commission')}}">Click Here</a></p>
                        <p><a href="{{url('/affiliate/new-support-ticket')}}">Click Here</a></p>
                        <p><a href="{{url('/affiliate/promotional-material')}}">Click Here</a></p>
                        <p><a href="{{url('/affiliate/busniess-plan')}}">Click Here</a></p>
                        <p><a href="{{url('/affiliate/change-password')}}">Click Here</a></p>
                    </div>
                </div>
                <!-- <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div> -->
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Referral
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Notifications</h6>
            </div>
            <div class="card-body">
              @foreach(Auth::user()->notifications as $notification)
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-3">
                        <img class="rounded-circle" style="display:block; margin:auto;" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    </div>
                    <div class="col-lg-10 col-md-9 col-9">
                    <div class="text-truncate">{{$notification->data['letter']['title']}}</div>
                            <div class="small text-gray-500">{{$notification->data['letter']['message']}}</div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>

    </div>

    <div class="col-lg-6 mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">New Promotional material</h6>
            </div>
            <div class="card-body">
                <p>We are Regulary Added Promotional Materials for Affiliate to Promote Our Colleges and Thier Busniess.</p>
                <div class="row">
                @foreach($promotional as $promotional)
                    <div class="col-lg-9 col-md-9 col-9">
                            {{$promotional->college_name}}
                    </div>
                    <div class="col-lg-3 col-md-3 col-3">
                        fnfn
                    </div>
                    @endforeach
                </div>
               
                <a target="_blank" rel="nofollow" href="{{url('/affiliate/promotional-material')}}">View All Promotional Material &rarr;</a>
            </div>
        </div>
        
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->              
@include('affiliate.layouts.footer')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

@endsection     
      