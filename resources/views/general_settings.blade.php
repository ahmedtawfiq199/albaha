@extends('layout.app')
@section('title')
    {{__('dashboard.settings_project')}}
@stop
@section('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <!-- END: Page CSS-->
@stop

@section('content')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">{{__('dashboard.settings_project')}}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <!-- users edit start -->
            <section class="app-user-edit">
                <div class="card">
                    <div class="card-body">
                        <!-- users edit account form start -->
                        <form class="form-validate" novalidate="novalidate" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username">{{__('dashboard.logo')}}</label>
                                        <input type='file' onchange="loadFile_image(image)" name="image" id="image"
                                               class="@error('image') is-invalid @enderror"
                                               style="display:none;"/>
                                        <button id="output_logo" type="button"
                                                onclick="document.getElementById('image').click();" value="emad"
                                                style="
                                                    width: 200px;
                                                    height: 200px;
                                                    border-radius: 50%;
                                                    background-color: #0a1128;
                                                    background-image: url('/app-assets/images/default.png');
                                                    background-repeat: no-repeat;
                                                    background-size: cover;
                                                      background-position: center;

                                                    "/>
                                    </div>
                                </div>
                                <script>
                                    var loadFile_image = function (image) {
                                        var image = document.getElementById('output_logo');
                                        var src = URL.createObjectURL(event.target.files[0]);
                                        image.style.backgroundImage = 'url(' + src + ')';
                                    };
                                </script>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">{{__('dashboard.name_system')}}</label>
                                        <input type="text" class="form-control"
                                               placeholder="{{__('dashboard.name_system')}}"
                                               name="name_system" id="name_system">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">{{__('dashboard.email')}}</label>
                                        <input type="email" class="form-control" placeholder="{{__('dashboard.email')}}"
                                               name="email" id="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">{{__('dashboard.phone')}}</label>
                                        <input type="text" class="form-control" placeholder="{{__('dashboard.phone')}}"
                                               name="phone" id="phone">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">{{__('dashboard.whatsapp_num')}}</label>
                                        <input type="text" class="form-control"
                                               placeholder="{{__('dashboard.whatsapp_num')}}"
                                               name="whatsapp_num" id="whatsapp_num">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">{{__('dashboard.address')}}</label>
                                        <input type="text" class="form-control"
                                               placeholder="{{__('dashboard.address')}}"
                                               name="address" id="address">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">{{__('dashboard.facebook')}}</label>
                                        <input type="text" class="form-control"
                                               placeholder="{{__('dashboard.facebook')}}"
                                               name="facebook" id="facebook">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">{{__('dashboard.twitter')}}</label>
                                        <input type="text" class="form-control"
                                               placeholder="{{__('dashboard.twitter')}}"
                                               name="twitter" id="twitter">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">{{__('dashboard.youtube')}}</label>
                                        <input type="text" class="form-control"
                                               placeholder="{{__('dashboard.youtube')}}"
                                               name="youtube" id="youtube">
                                    </div>
                                </div>


                                <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                    <button type="submit"
                                            class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-float waves-light">
                                        {{__('dashboard.save_change')}}
                                    </button>
                                    <button type="reset"
                                            class="btn btn-outline-secondary waves-effect">{{__('dashboard.reset')}}</button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit account form ends -->

                    </div>
                </div>
            </section>
            <!-- users edit ends -->

        </div>
    </div>
@endsection

@section('js')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/datatables.js')}}"></script>
    <!-- END: Page JS-->


@stop
