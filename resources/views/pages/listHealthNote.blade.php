@extends('layouts.app')



@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Form Patient</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
</div>
@endsection



@section('content')
 <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Email</th>
                                                <th>No. Telepon</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        
                                            <tr>
                                                <td>Bla</td>
                                                <td>Bla</td>
                                                <td>Bla</td>
                                                <td>Bla</td>                                                
                                            </tr> 
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@endsection

@section('script')

    <!-- This is data table -->
    <script src="{{ asset('material/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script>$('#myTable').DataTable();</script>

    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('material/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

    
    
@endsection