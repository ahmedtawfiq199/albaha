@extends('layout.app')
@section('title')
    {{__('dashboard.rules')}}

@stop
@section('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/select/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/forms/pickers/form-flat-pickr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/app-user.css')}}">
    <!-- END: Page CSS-->
@stop

@section('content')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">{{__('dashboard.rules')}}</h2>
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
                        <form class="form-validate" novalidate="novalidate" method="POST" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username">{{__('dashboard.fullname')}}</label>
                                        <label for="" class="form-control" style="font-size: 30px; border: none" > أحمد </label>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="card bg-secondary text-white" style="margin-top: 50px">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                   <div class="card ">
                                                       <div class="card-header">
                                                           <label for="">الادارة</label>
                                                       </div>
                                                       <div class="card-body">

                                                           <div class="custom-control custom-checkbox custom-control-inline">
                                                               <input type="checkbox" class="custom-control-input" id="email-cb" checked />
                                                               <label class="custom-control-label" for="email-cb">Email</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox custom-control-inline">
                                                               <input type="checkbox" class="custom-control-input" id="message" />
                                                               <label class="custom-control-label" for="message">Message</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox custom-control-inline">
                                                               <input type="checkbox" class="custom-control-input" id="phone" />
                                                               <label class="custom-control-label" for="phone">Phone</label>
                                                           </div>
                                                       </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <label for="">الادارة</label>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="email-cb" checked />
                                                                <label class="custom-control-label" for="email-cb">Email</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="message" />
                                                                <label class="custom-control-label" for="message">Message</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="phone" />
                                                                <label class="custom-control-label" for="phone">Phone</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <label for="">الادارة</label>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="email-cb" checked />
                                                                <label class="custom-control-label" for="email-cb">Email</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="message" />
                                                                <label class="custom-control-label" for="message">Message</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="phone" />
                                                                <label class="custom-control-label" for="phone">Phone</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <label for="">الادارة</label>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="email-cb" checked />
                                                                <label class="custom-control-label" for="email-cb">Email</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="message" />
                                                                <label class="custom-control-label" for="message">Message</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="phone" />
                                                                <label class="custom-control-label" for="phone">Phone</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <label for="">الادارة</label>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="email-cb" checked />
                                                                <label class="custom-control-label" for="email-cb">Email</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="message" />
                                                                <label class="custom-control-label" for="message">Message</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="phone" />
                                                                <label class="custom-control-label" for="phone">Phone</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <label for="">الادارة</label>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="email-cb" checked />
                                                                <label class="custom-control-label" for="email-cb">Email</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="message" />
                                                                <label class="custom-control-label" for="message">Message</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="phone" />
                                                                <label class="custom-control-label" for="phone">Phone</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <label for="">الادارة</label>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="email-cb" checked />
                                                                <label class="custom-control-label" for="email-cb">Email</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="message" />
                                                                <label class="custom-control-label" for="message">Message</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="phone" />
                                                                <label class="custom-control-label" for="phone">Phone</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">

                                    </div>
                                </div>

                                <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                    <button type="submit"
                                            class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-float waves-light">
                                        {{__('dashboard.save_change')}}
                                    </button>
                                    <button type="reset" class="btn btn-outline-secondary waves-effect">{{__('dashboard.reset')}}</button>
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
    <script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js"')}}></script>
    <script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/components/components-navs.js')}}"></script>
    <!-- END: Page JS-->


@stop
