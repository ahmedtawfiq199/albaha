@extends('layout.app')

@section('title')
    create order
@stop

@section('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/select/select2.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/forms/form-wizard.css')}}">
    <!-- END: Page CSS-->
@stop

@section('content')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">{{__('dashboard.create_order')}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Horizontal Wizard -->
            <section class="horizontal-wizard">
                <div class="bs-stepper horizontal-wizard-example">
                    <div class="bs-stepper-header">
                        <div class="step" data-target="#account-details">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">1</span>
                                <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">{{__('dashboard.info_user_order')}}</span>
                                    </span>
                            </button>
                        </div>
                        <div class="line">
                            <i data-feather="chevron-right" class="font-medium-2"></i>
                        </div>
                        <div class="step" data-target="#personal-info">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">2</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">{{__('dashboard.info_order')}}</span>
                                </span>
                            </button>
                        </div>

                    </div>
                    <div class="bs-stepper-content">
                        <div id="account-details" class="content">
                            <div class="content-header">
                                <h5 class="mb-0">{{__('dashboard.info_user_order')}}</h5>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="username">الاسم كامل</label>
                                        <label class="form-control">johndoe</label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">رقم الهوية</label>
                                        <input type="text" name="id" id="id" class="form-control"
                                               placeholder="455654645654" aria-label="john.doe"/>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">تاريخ الميلاد</label>
                                        <input type="date" name="birthday" id="birthday" class="form-control"
                                               aria-label="john.doe"/>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">مكان الاقامة</label>
                                        <input type="text" name="address" id="address" class="form-control"
                                               aria-label="john.doe"/>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">الحالة الاجتماعية</label>

                                        <select class="custom-select" name="social_status" id="social_status">
                                            <option value="single">اعزب</option>
                                            <option value="married">متزوج</option>
                                            <option value="divorce">مطلق</option>
                                            <option value="widower">أرمل</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">عدد الاطفال</label>
                                        <input type="number" name="numchild" id="numchild" class="form-control"/>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">الدرجة العلمية</label>
                                        <input type="text" name="edu_degree" id="edu_degree" class="form-control"/>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">التخصص</label>
                                        <input type="text" name="field" id="field" class="form-control"/>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">التخصص</label>
                                        <input type="text" name="field" id="field" class="form-control"/>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">جهة التخرج</label>

                                        <select class="custom-select" name="graduation" id="graduation">
                                            <option value="university">جامعة</option>
                                            <option value="collage">كلية</option>
                                            <option value="institute">معهد</option>
                                            <option value="school">مدرسة</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">العمل الحالي (ان وجد)</label>
                                        <input type="text" name="job_name" id="field" class="form-control"
                                               placeholder="اسم"/>
                                        <input type="text" name="job_type" id="job" class="form-control"
                                               placeholder="الوظيفة"/>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">بيانات التواصل</label>
                                        <input type="text" name="phone1" id="phone1" class="form-control"
                                               placeholder="رقم الجوال (1)"/>
                                        <input type="text" name="phone2" id="phone2" class="form-control"
                                               placeholder="رقم الجوال (2)"/>

                                        <input type="text" name="telephone" id="telephone" class="form-control"
                                               placeholder="رقم الهاتف"/>
                                        <input type="email" name="email" id="email" class="form-control"
                                               placeholder="الايميل"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="font-weight-bold col-sm-3 col-form-label ">Answers</label>
                                        <div id="myRepeatingFields">
                                            <div class="entry input-group col-xs-3">
                                                <table class="table meeting-table class-table">
                                                    <td>مكان العمل</td>
                                                    <td><input type="text" name="answer[]" class="w-100"/></td>
                                                    <td>الوظيفة أو الأعمال التي مارستها</td>
                                                    <td><input type="text" name="answer[]" class="w-100"/></td>

                                                    <td>
                                                        <button type="button" class="btn btn-lg btn-add">
                                                                <span class="glyphicon glyphicon-plus"
                                                                      aria-hidden="true">+</span>
                                                        </button>
                                                    </td>
                                                </table>
                                                <span class="input-group-btn"></span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">صورة الهوية</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">العنوان الوطني</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">الحساب البنكي</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">صورة الشهادة العلمية(ان وجد)</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">السيرة الذاتية</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="email">مستندات اخرى</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                </div>


                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span
                                            class="align-middle d-sm-inline-block d-none">{{__('dashboard.previous')}}</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span
                                            class="align-middle d-sm-inline-block d-none">{{__('dashboard.next')}}</span>
                                        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                    </button>
                                </div>

                            </form>
                            <div id="personal-info" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">{{__('dashboard.info_order')}}</h5>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="first-name">الاسم كامل</label>
                                            <input type="text" name="name" id="first-name" class="form-control"
                                                   placeholder="John"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="last-name">Last Name</label>
                                            <input type="text" name="last-name" id="last-name" class="form-control"
                                                   placeholder="Doe"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="country">Country</label>
                                            <select class="select2 w-100" name="country" id="country">
                                                <option label=" "></option>
                                                <option>UK</option>
                                                <option>USA</option>
                                                <option>Spain</option>
                                                <option>France</option>
                                                <option>Italy</option>
                                                <option>Australia</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="language">Language</label>
                                            <select class="select2 w-100" name="language" id="language" multiple>
                                                <option>English</option>
                                                <option>French</option>
                                                <option>Spanish</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span
                                            class="align-middle d-sm-inline-block d-none">{{__('dashboard.previous')}}</span>
                                    </button>
                                    <button class="btn btn-success btn-submit">{{__('dashboard.submit')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Horizontal Wizard -->

        </div>
    </div>
@endsection

@section('js')

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/forms/form-wizard.js')}}"></script>
    <!-- END: Page JS-->

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <script>
        $(function () {
            $(document)
                .on("click", ".btn-add", function (e) {
                    e.preventDefault();
                    var controlForm = $("#myRepeatingFields:first"),
                        currentEntry = $(this).parents(".entry:first"),
                        newEntry = $(currentEntry.clone()).appendTo(controlForm);
                    newEntry.find("input").val("");
                    controlForm.find(".entry:not(:last) .btn-add").removeClass("btn-add").addClass("btn-remove").removeClass("btn-success").addClass("btn-danger").html("-");
                })
                .on("click", ".btn-remove", function (e) {
                    e.preventDefault();
                    $(this).parents(".entry:first").remove();
                    return false;
                });
        });
    </script>
@stop
