@extends('layouts.app')



@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Form Tenaga Kesehatan</h3>
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
                <h4 class="card-title">Formulir Tenaga Kesehatan</h4>
                <h6 class="card-subtitle">Isi semua data</h6>
                <form  method="POST" action="{{ route('helper.store') }}" class="validation-wizard wizard-circle">
                    <!-- Step 1 -->
                    <h6>Pendaftaran</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wfirstName2"> Email : </label>
                                    <input type="text" class="form-control"  name="email"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wlastName2"> Phone Number : </label>
                                    <input type="text" class="form-control "  name="phoneNumber"> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Nama :</label>
                                    <input type="text" class="form-control"  name="name"> 
                                </div>
                            </div>
                            <div class="col-md-6">                                                                                 
                                <div class="form-group">
                                    <label for="wdate2">Tangggal Lahir :</label>
                                    <input type="date" class="form-control" name="birthDate"> 
                                </div>  
                            </div>  
                        </div>

                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wdate2">Tempat Lahir :</label>
                                    <input type="text" class="form-control" name="birthPlace"> 
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

