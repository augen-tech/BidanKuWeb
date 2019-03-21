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
<!-- Start Code Here Bro!! -->
<div class="row" id="validation">
    <div class="col-12">
        <div class="card wizard-content">
            <div class="card-body">
                <h4 class="card-title">Formulir Tambah CAtatan</h4>
                <h6 class="card-subtitle">Isi semua data</h6>
                <form action="submit" class="validation-wizard wizard-circle">
                    <!-- Step 1 -->
                    <h6>Tambah Data Catatan Kesehatan</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Pasient: *</label>
                                    <select class="form-control custom-select">
                                        <option>--Select your Patient--</option>
                                        <option>India</option>
                                        <option>Sri Lanka</option>
                                        <option>USA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2"> Tanggal Checkup : * </label>
                                    <input type="date" class="form-control " id="wlastName2" name="lastName"> </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Tekanan Darah (mm/Hg) :</label>
                                    <input type="number" class="form-control" id="wdate2"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Berat Badan(Kg) :</label>
                                    <input type="number" class="form-control" id="wdate2"> </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Umur Kehamilan (Minggu) :</label>
                                    <input type="number" class="form-control" id="wdate2"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Tinggi Fundus (Cm) :</label>
                                    <input type="number" class="form-control" id="wdate2"> </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wphoneNumber2"> Letak Janin (Kep/Su/Li) :</label>
                                    <input type="number" name="tinggi_badan" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                                    <div class="form-group">
                                        <label for="wphoneNumber2"> Denyut Jantung Janin/Menit :</label>
                                        <input type="number" name="tinggi_badan" class="form-control">
                                    </div>
                                
                            </div>
                        </div>    
                    </section>

                    <!-- Step 2 -->
                    <h6>Detail Data Kehamilan</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Hamil Ke : *</label>
                                    <input type="number" class="form-control " id="jobTitle2">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Jumlah Persalinan : *</label>
                                    <input type="number" class="form-control " id="wdate2"> 
                                </div>
                            </div>                            
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Jumlah Keguguran : * </label>
                                    <input type="number" class="form-control " id="jobTitle2">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Jumlah Anak Hidup :</label>
                                    <input type="number" class="form-control " id="wdate2"> 
                                </div>
                            </div>                            
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Jumlah Anak Lahir Meninggal : *</label>
                                    <input type="number" class="form-control " id="jobTitle2">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Jumlah Anak Lahir Kurang Bulan : *</label>
                                    <input type="number" class="form-control " id="wdate2"> 
                                </div>
                            </div>                            
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Jarak kehamilan ini dengan persalinan terakhir : *</label>
                                    <input type="date" class="form-control" id="wdate2"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wphoneNumber2">Cara persalinan terakhir :</label>
                                    <input type="text" name="tinggi_badan" class="form-control">
                                 </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Code Here Bro!! -->
@endsection

@section('script')
    <script src="{{ asset('material/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{ asset('material/plugins/wizard/steps.js')}}"></script>
    <!-- ============================================================== -->

    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('material/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endsection