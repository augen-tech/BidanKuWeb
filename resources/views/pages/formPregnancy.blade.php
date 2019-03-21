@extends('layouts.app')



@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Form Patient</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Tambah Data Kehamilan</li>
        </ol>
    </div>
</div>
@endsection



@section('content')
<!-- Start Code Here Bro!! -->
<!-- Validation wizard -->
<div class="row" id="validation">
    <div class="col-12">
        <div class="card wizard-content">
            <div class="card-body">
                <h4 class="card-title">Formulir Pendaftaran Pasien</h4>
                <h6 class="card-subtitle">Isi semua data</h6>
                <form action="submit" class="validation-wizard wizard-circle">
                    <!-- Step 1 -->
                    <h6>Tambah Data Kehamilan</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">Riwayat Alergi : *</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Category 1">Category 1</option>
                                        <option value="Category 2">Category 2</option>
                                        <option value="Category 3">Category 5</option>
                                        <option value="Category 4">Category 4</option>
                                    </select> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2"> Hari Pertama Haid Terakhir : * </label>
                                    <input type="date" class="form-control " id="wlastName2" name="lastName"> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Hari Taksiran Persalinan : *</label>
                                    <input type="date" class="form-control" id="wdate2"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wphoneNumber2">Lingkar Lengan Atas :</label>
                                    <input type="number" name="tinggi_badan" class="form-control">
                                 </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wphoneNumber2"> Tinggi Badan  :</label>
                                    <input type="number" name="tinggi_badan" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Riwayat Alergi : *</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Category 1">Category 1</option>
                                        <option value="Category 2">Category 2</option>
                                        <option value="Category 3">Category 5</option>
                                        <option value="Category 4">Category 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">Riwayat penyakit yang diderita ibu : *</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Category 1">Category 1</option>
                                        <option value="Category 2">Category 2</option>
                                        <option value="Category 3">Category 5</option>
                                        <option value="Category 4">Category 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">KEK :</label>
                                    <div class="m-b-10">
                                        <label class="custom-control custom-radio">
                                            <input id="radio5" name="radio" type="radio" class="custom-control-input">
                                            <span class="custom-control-label">Ya</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input id="radio6" name="radio" type="radio" class="custom-control-input">
                                            <span class="custom-control-label">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Penggunaan Kontrasepsi sebelum kehamilan ini :</label>
                                    <div class="m-b-10">
                                        <label class="custom-control custom-radio">
                                            <input id="radio5" name="radio" type="radio" class="custom-control-input">
                                            <span class="custom-control-label">Ya</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input id="radio6" name="radio" type="radio" class="custom-control-input">
                                            <span class="custom-control-label">Tidak</span>
                                        </label>
                                    </div>
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
    <!-- Sweet-Alert  -->
    <script src="{{ asset('material/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{ asset('material/plugins/wizard/steps.js')}}"></script>
    <!-- ============================================================== -->
    
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('material/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

@endsection