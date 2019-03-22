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
                <h4 class="card-title">Formulir Pendaftaran Pasien</h4>
                <h6 class="card-subtitle">Isi semua data</h6>
                <form  method="POST" action="{{ route('patient.store') }}" class="validation-wizard wizard-circle">
                    <!-- Step 1 -->
                    <h6>Pendaftaran</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wfirstName2"> Nomor Registrasi Ibu : </label>
                                    <input disabled type="text" class="form-control" id="wfirstName2" name="registrationNumber"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wlastName2"> Nomor Urut di Kohort Ibu : </label>
                                    <input type="number" class="form-control " id="wlastName2" name="kohortNumber"> </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Tanggal menerima buku KIA :</label>
                                    <input type="date" class="form-control" id="kiaDate"> </div>
                            </div>
                            <div class="col-md-6">                                                                                 
                                <div class="form-group">
                                    <label for="wintType1">Nama Tenaga Kesehatan :</label>
                                    <select class="custom-select form-control " id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                        <option value="Nela">Nela</option>
                                        <option value="Gue">Gue</option>                                        
                                    </select>
                                </div>     
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
                                    <input type="text" class="form-control " id="jobTitle2">
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
                                    <input type="text" class="form-control " id="jobTitle2">
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wjobTitle2">Pendidikan Suami :</label>
                                    <input type="text" class="form-control " id="wjobTitle2">
                                </div>
                            </div> 
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
                        </div>
                    </section>
                    <!-- Step 4 -->
                    <h6>Tambah Anak</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="behName1">Nama Anak :</label>
                                    <input type="text" class="form-control " id="behName1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="participants1">Jenis Kelamin Anak</label>
                                    <select class="custom-select form-control " id="participants1" name="location">
                                        <option value="Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>                                        
                                    </select>
                                </div>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="behName1">Anak Ke :</label>
                                    <input type="number" class="form-control " id="behName1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="behName1">Nomer Akte Kelahiran :</label>
                                    <input type="number" class="form-control " id="behName1">
                                </div>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="behName1">Tanggal Lahir Anak :</label>
                                    <input type="date" class="form-control " id="behName1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="behName1">Tempat Lahir Anak :</label>
                                    <input type="text" class="form-control " id="behName1">
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
    
    <!-- <script src="{{ asset('material/plugins/wizard/steps.js')}}"></script> -->
    <!-- ============================================================== -->
    
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('material/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

    
    <script>
        
        
        $(".tab-wizard").steps({
        headerTag: "h6"
        , bodyTag: "section"
        , transitionEffect: "fade"
        , titleTemplate: '<span class="step">#index#</span> #title#'
        , labels: {
            finish: "Submit"
        }
        , onFinished: function (event, currentIndex) {
        swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.asdasdasdasdasdasd");
        
        }
        });


        var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6"
            , bodyTag: "section"
            , transitionEffect: "fade"
            , titleTemplate: '<span class="step">#index#</span> #title#'
            , labels: {
                finish: "Submit"
            }
            , onStepChanging: function (event, currentIndex, newIndex) {
                return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
            }
            , onFinishing: function (event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            }
            , onFinished: function (event, currentIndex) {
                // swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.asdasd");
                
                form.submit()
            }
        }), $(".validation-wizard").validate({
            ignore: "input[type=hidden]"
            , errorClass: "text-danger"
            , successClass: "text-success"
            , highlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            }
            , unhighlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            }
            , errorPlacement: function (error, element) {
                error.insertAfter(element)
            }
            , rules: {
                email: {
                    email: !0
                }
            }
        })
    </script>


    

@endsection

