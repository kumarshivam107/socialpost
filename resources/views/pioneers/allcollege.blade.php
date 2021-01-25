@extends('pioneers.layouts.master')
@section('content')
<title>About Us- Education Pioneers</title>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
@include('pioneers.layouts.header')
<main id="main">
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container about-context">
        <h2>BSCC All Colleges</h2>
        </div>
        <div>
        <img src="{{asset('public/assets/img/slider_image1.jpg')}}"  style="width:100%; max-height: 300px;;" alt="Image 1">
    </div>
    </div>
    <!-- Main Page -->
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-6 col-md- col-12 offeset-lg-3 offset-md-3">
            <p class="mt-4 text-center"><a class="btn btn-success" href="{{url('/download-naac-college-list')}}">Download All India Bihar NAAC A Grade College List</a></p>
                <select name="state" id="state" class="form-control">
                        <option value="">Select</option>
                        <option value="">All</option>					
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar" selected="">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujrat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                </select>
                <p class="text-center mt-2">
            <button class="btn btn-success btn-sm" id="filter_data">Filter Data</button>
            <button class="btn btn-secondary btn-sm" id="reset_data">Reset Data</button></p>
            </div>
        </div>
        <table class="table table-bordered" id="college-table" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>College Name</th>
                    <th>University</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                                    
            </tbody>
        </table>
    </div>

   
</main>
@include('pioneers.layouts.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script>
    $(document).ready( function () {
        $('#allcollege').DataTable();
    });
    $(document).ready(function(){
        fill_datatable();
        function fill_datatable(state=''){
            var dataTable = $('#college-table').DataTable({
                processing:true,
                serverSide:true,
                ajax:{
                    url:"{{url('/get-all-bscc-college')}}",
                    data:{state:state}
                },
                columns:[
                    {
                        data:'college_id',
                        name:'S.No.'
                    },
                    {
                        data:'column_0',
                        name:'College Name'
                    },
                    {
                        data:'column_1',
                        name:'university'
                    },
                    {
                        data:'column_2',
                        name:'state'
                    },
                    {
                        data:'column_3',
                        name:'district'
                    },
                    {
                        data:'column_4',
                        name:'Type'
                    }
                ],

                 });
        }

        //Custom Search Data:-
        $('#filter_data').click(function(){
            var state = $('#state').val();
            $('#college-table').DataTable().destroy();
            fill_datatable(state);
           
        });

        //Reset Data:-
        $('#reset_data').click(function(){
            $('#college-table').DataTable().destroy();
            fill_datatable();
        });
    });
</script>
@endsection