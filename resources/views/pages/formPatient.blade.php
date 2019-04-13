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
                                    <input readonly value="{{$patientCount}}" type="number" class="form-control" id="wfirstName2" name="registrationNumber"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wlastName2"> Nomor Urut di Kohort Ibu : </label>
                                    <input readonly value="{{$patientCount}}"  type="number" class="form-control" id="wlastName2" name="kohortNumber"> </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Tanggal menerima buku KIA :</label>
                                    <input type="date" class="form-control" name="kiaDate"> </div>
                            </div>
                            <div class="col-md-6">                                                                                 
                                <div class="form-group">
                                    <label for="wintType1">Nama Tenaga Kesehatan :</label>
                                    <select class="custom-select form-control " id="wintType1" data-placeholder="Type to search cities" name="helperId">
                                        @foreach($helperBiodatas as $index => $row)    
                                            <option value="{{$row->id}}">{{$row->name}}</option>                                            
                                        @endforeach
                                    </select>
                                </div>     
                            </div>  
                        </div>
                        
                                                    
                    </section>
                    <!-- Step 2 -->
                    <h6>Identitas Pasien</h6>
                    <section>
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Email :</label>
                                    <input type="text" class="form-control " id="jobTitle2" name="patientEmail">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Password :</label>
                                    <input readonly type="text" class="form-control " id="wdate2" name="patientPassword"> 
                                </div>
                            </div>                                                       
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Nama Pasien/Ibu :</label>
                                    <input type="text" class="form-control " id="jobTitle2" name="patientName">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">No. Telepon :</label>
                                    <input type="number" class="form-control " id="wdate2" name="patientPhoneNumber"> 
                                </div>
                            </div>                             
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Tempat Lahir :</label>
                                    <input type="text" class="form-control " id="jobTitle2" name="patientBirthPlace">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Tanggal Lahir :</label>
                                    <input type="date" class="form-control " id="wdate2" name="patientBirthDate"> 
                                </div>
                            </div>                            
                                                       
                        </div>          
                        <div class="row">   
                            <div class="col-md-6">                                                                                 
                                <div class="form-group">
                                    <label for="wintType1">Agama :</label>
                                    <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="patientReligion">
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
                                    <input type="text" class="form-control " id="jobTitle2" name="patientEducation">
                                </div>
                            </div>                                              
                        </div>
                        <div class="row">   
                            <div class="col-md-6">                                                                                 
                                <div class="form-group">
                                    <label for="wintType1">Golongan Darah :</label>
                                    <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="patientBloodTypeId">
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">AB</option>
                                        <option value="4">O</option>                                        
                                    </select>
                                </div>     
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Pekerjaan :</label>
                                    <input type="text" class="form-control " id="jobTitle2" name="patientOccupation">
                                </div>
                            </div>                                              
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">No.JKN :</label>
                                    <input type="number" class="form-control " id="jobTitle2" name="jknNumber">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Alamat Rumah :</label>
                                    <input type="text" class="form-control " id="jobTitle2" name="patientAddress">
                                </div>
                            </div>                           
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Kecamatan :</label>
                                    <input type="text" class="form-control " id="jobTitle2" name="subDistrict">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Kabupaten/Kota :</label>
                                    <input type="text" class="form-control " id="jobTitle2" name="district">
                                </div>
                            </div>                           
                        </div>
                    </section>
                    <!-- Step 3 -->
                    <h6>Riwayat Pasien</h6>
                    <section>
                        <div class="row">                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kehamilan Ke <i>(Gravida)</i>:</label>
                                    <input type="number" class="form-control " name="pregnancyCount">
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jumlah Persalinan <i>(Partus)</i>:</label>
                                    <input type="number" class="form-control " name="laborCount">
                                </div>
                            </div>                          
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Jumlah Keguguran <i>(Abortus)</i>:</label>
                                    <input type="number" class="form-control " id="jobTitle2" name="miscarriageCount">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Jumlah Anak Hidup:</label>
                                    <input type="number" class="form-control " id="jobTitle2" name="lifeChildCount">
                                </div>
                            </div>                           
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Jumlah Lahir Mati :</label>
                                    <input type="number" class="form-control " id="jobTitle2" name="bornDiedCount">
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Jumlah Anak Lahir Kurang Bulan:</label>
                                    <input type="number" class="form-control " id="jobTitle2" name="prematureChildCount">
                                </div>
                            </div>                           
                        </div>
                        <div class="row">   
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Jarak Kehamilan Ini Dengan Persalinan Terakhir (Bulan): </label>
                                    <input type="number" class="form-control " id="jobTitle2" name="lifeChildCount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Umur Anak Terakhir:</label>
                                    <input type="number" class="form-control " id="jobTitle2" name="lastChildAge">
                                </div>
                            </div>                                                 
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Terakhir Imunisasi TT:</label>
                                    <input type="date" class="form-control " id="jobTitle2" name="lastImunitationDate">
                                </div>
                            </div>                                          
                        </div>
                    </section>
                    <!-- Step 4 -->
                    <h6>Identitas Suami Pasien</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wjobTitle2">Nama Suami :</label>
                                    <input type="text" class="form-control " id="wjobTitle2" name="husbandName">
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wjobTitle2">Tanggal Lahir Suami :</label>
                                    <input type="date" class="form-control " id="wjobTitle2" name="husbandBirthDate">
                                </div>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wjobTitle2">Tempat Lahir Suami :</label>
                                    <input type="text" class="form-control " id="wjobTitle2" name="husbandBirthPlace">
                                </div>     
                            </div>     

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wintType1">Agama Suami:</label>
                                    <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="husbandReligion">
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
                                    <input type="text" class="form-control " id="wjobTitle2" name="husbandEducation">
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wjobTitle2">Pekerjaan Suami :</label>
                                    <input type="text" class="form-control " id="wjobTitle2" name="husbandOccupation">
                                </div>
                            </div>                          
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6">                                                                                 
                                <div class="form-group">
                                    <label for="wintType1">Golongan Darah :</label>
                                    <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="husbandBloodTypeId">
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">AB</option>
                                        <option value="4">O</option>                                        
                                    </select>
                                </div>     
                            </div>                           
                        </div>
                    </section>
                    <!-- Step 5 -->
                    <h6>Tambah Anak</h6>
                    <section >
                        <div id="dynamicChildernSection">
                            <div id="childernForm" hidden>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Nama Anak :</label>
                                            <input type="text" class="form-control " >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Jenis Kelamin Anak</label>
                                            <select class="custom-select form-control " name="location">
                                                <option value="Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>                                        
                                            </select>
                                        </div>
                                    </div>                            
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Anak Ke :</label>
                                            <input type="number" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Nomer Akte Kelahiran :</label>
                                            <input type="number" class="form-control ">
                                        </div>
                                    </div>                            
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Tanggal Lahir Anak :</label>
                                            <input type="date" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir Anak :</label>
                                            <input type="text" class="form-control ">
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <button type="button" class="btn btn-block btn-info" data-count=0 onclick="addChild()">Tambah Anak</button>
                                </center>
                                <br>
                                <br>
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
        function addChild(){
            // document.getElementById("test").innerHTML = "Hello World";

            var container = document.getElementById("dynamicChildernSection");
            var form = document.getElementById("childernForm");

            var cln = form.cloneNode(true);
            cln.hidden = false;

            
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            container.appendChild(cln);
            
        }
    </script>
        
    
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

