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
<!-- Validation wizard -->
<div class="row" id="validation">
    <div class="col-12">
        <div class="card wizard-content">
            <div class="card-body">
                <h4 class="card-title">Step wizard with validation</h4>
                <h6 class="card-subtitle">You can us the validation like what we did</h6>
                <form action="#" class="validation-wizard wizard-circle">
                    <!-- Step 1 -->
                    <h6>Pendaftaran</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wfirstName2"> Nomor Registrasi Ibu : </label>
                                    <input type="number" class="form-control" id="wfirstName2" name="firstName"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wlastName2"> Nomor Urut di Kohort Ibu : </label>
                                    <input type="number" class="form-control " id="wlastName2" name="lastName"> </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Tanggal menerima buku KIA :</label>
                                    <input type="date" class="form-control" id="wdate2"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wphoneNumber2">Nama & No. Telp. Tenaga Kesehatan :</label>
                                    <input type="tel" class="form-control " id="wphoneNumber2"> </div>
                            </div>
                        </div>
                        <div class="row">
                                                    
                    </section>
                    <!-- Step 2 -->
                    <h6>Identitas Pasien</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Nama Ibu :</label>
                                    <input type="text" class="form-control " id="jobTitle2">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Tanggal Lahir :</label>
                                    <input type="date" class="form-control " id="wdate2"> </div>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Tempat Lahir :</label>
                                    <input type="text" class="form-control " id="jobTitle2">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Kehamilan Ke :</label>
                                    <input type="number" class="form-control " id="jobTitle2">
                                </div>
                            </div>                           
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Anak Terakhir Umur :</label>
                                    <input type="number" class="form-control " id="jobTitle2">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Jumlah Anak :</label>
                                    <input type="number" class="form-control " id="jobTitle2">
                                </div>
                            </div>                           
                        </div>
                        <div class="row">   
                            <div class="col-md-6">                                                                                 
                                <div class="form-group">
                                    <label for="wintType1">Agama :</label>
                                    <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>     
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Pendidikan :</label>
                                    <input type="number" class="form-control " id="jobTitle2">
                                </div>
                            </div>                                              
                        </div>
                        <div class="row">   
                            <div class="col-md-6">                                                                                 
                                <div class="form-group">
                                    <label for="wintType1">Golongan Darah :</label>
                                    <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="O">O</option>                                        
                                    </select>
                                </div>     
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Pekerjaan :</label>
                                    <input type="number" class="form-control " id="jobTitle2">
                                </div>
                            </div>                                              
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">No.JKN :</label>
                                    <input type="number" class="form-control " id="jobTitle2">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Alamat Rumah :</label>
                                    <input type="text" class="form-control " id="jobTitle2">
                                </div>
                            </div>                           
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Kecamatan :</label>
                                    <input type="text" class="form-control " id="jobTitle2">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Kabupaten/Kota :</label>
                                    <input type="text" class="form-control " id="jobTitle2">
                                </div>
                            </div>                           
                        </div>
                    </section>
                    <!-- Step 3 -->
                    <h6>Identitas Suami Pasien</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wjobTitle2">Nama Suami :</label>
                                    <input type="text" class="form-control " id="wjobTitle2">
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wjobTitle2">Tanggal Lahir Suami :</label>
                                    <input type="date" class="form-control " id="wjobTitle2">
                                </div>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wjobTitle2">Tempat Lahir Suami :</label>
                                    <input type="text" class="form-control " id="wjobTitle2">
                                </div>     
                            </div>     

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wintType1">Agama Suami:</label>
                                    <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>    
                            </div>   
                        </div>
                    </section>
                    <!-- Step 4 -->
                    <h6>Step 4</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="behName1">Behaviour :</label>
                                    <input type="text" class="form-control required" id="behName1">
                                </div>
                                <div class="form-group">
                                    <label for="participants1">Confidance</label>
                                    <input type="text" class="form-control required" id="participants1">
                                </div>
                                <div class="form-group">
                                    <label for="participants1">Result</label>
                                    <select class="custom-select form-control required" id="participants1" name="location">
                                        <option value="">Select Result</option>
                                        <option value="Selected">Selected</option>
                                        <option value="Rejected">Rejected</option>
                                        <option value="Call Second-time">Call Second-time</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="decisions1">Comments</label>
                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Rate Interviwer :</label>
                                    <div class="c-inputs-stacked">
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>
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