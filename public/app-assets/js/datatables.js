$(function () {
    'use strict';

    var dtUserTable = $('.user-list-table'),
        dtOrderTable = $('.order-list-table'),

        newUserForm = $('.add-new-user'),
        statusObj = {
            1: {title: 'Active', class: 'badge-light-success'},
            0: {title: 'Inactive', class: 'badge-light-danger'}
        };

    var assetPath = '/app-assets/',
        userView = 'app-user-view.html',
        userEdit = 'app-user-edit.html';
    if ($('body').attr('data-framework') === 'laravel') {
        assetPath = $('body').attr('data-asset-path');
        userView = assetPath + 'app/user/view';
        userEdit = assetPath + 'app/user/edit';
    }

    // Users List datatable
    if (dtUserTable.length) {
        dtUserTable.DataTable({
            "processing": true,
            "serverSide": true,
            ajax: {url: '/get-users',},
            columns: [
                {data: 'id'},
                {data: 'id'}, // used for sorting so will hide this column
                {data: 'name'},
                {data: 'username'},
                {data: 'email'},
                {data: 'phone'},
                {data: 'type'},
                {data: ''}
            ],
            // columnDefs: [
            //     {
            //         // For Checkboxes
            //         targets: 0,
            //         orderable: false,
            //         responsivePriority: 3,
            //         render: function (data, type, full, meta) {
            //             return (
            //                 '<div class="custom-control custom-checkbox"> <input class="custom-control-input dt-checkboxes" type="checkbox" value="" id="checkbox' +
            //                 data +
            //                 '" /><label class="custom-control-label" for="checkbox' +
            //                 data +
            //                 '"></label></div>'
            //             );
            //         },
            //         checkboxes: {
            //             selectAllRender:
            //                 '<div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" value="" id="checkboxSelectAll" /><label class="custom-control-label" for="checkboxSelectAll"></label></div>'
            //         }
            //     },
            //     // {
            //     //     targets: 2,
            //     //     visible: false
            //     // },
            //     // {
            //     //     responsivePriority: 1,
            //     //     targets: 4
            //     // },
            //     // {
            //     //     // Label
            //     //     targets: -2,
            //     //     render: function (data, type, full, meta) {
            //     //         var $status_number = full['status'];
            //     //         var $status = {
            //     //             1: {title: 'Current', class: 'badge-light-primary'},
            //     //             2: {title: 'Professional', class: ' badge-light-success'},
            //     //             3: {title: 'Rejected', class: ' badge-light-danger'},
            //     //             4: {title: 'Resigned', class: ' badge-light-warning'},
            //     //             5: {title: 'Applied', class: ' badge-light-info'}
            //     //         };
            //     //         if (typeof $status[$status_number] === 'undefined') {
            //     //             return data;
            //     //         }
            //     //         return (
            //     //             '<span class="badge badge-pill ' +
            //     //             $status[$status_number].class +
            //     //             '">' +
            //     //             $status[$status_number].title +
            //     //             '</span>'
            //     //         );
            //     //     }
            //     // },
            //     {
            //         // Actions
            //         targets: -1,
            //         orderable: false,
            //         render: function (data, type, full, meta) {
            //             // alert(full['id']);
            //             return (
            //                 '<div class="d-inline-flex">' +
            //                 '<a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">' +
            //                 feather.icons['more-vertical'].toSvg({class: 'font-small-4'}) +
            //                 '</a>' +
            //                 '<div class="dropdown-menu dropdown-menu-right">' +
            //                 '<a href="javascript:;" class="dropdown-item">' +
            //                 feather.icons['file-text'].toSvg({class: 'font-small-4 mr-50'}) +
            //                 'Details</a>' +
            //                 '<a href="javascript:;" class="dropdown-item">' +
            //                 feather.icons['archive'].toSvg({class: 'font-small-4 mr-50'}) +
            //                 'Archive</a>' +
            //                 '<a href="javascript:;" class="dropdown-item delete-record">' +
            //                 feather.icons['trash-2'].toSvg({class: 'font-small-4 mr-50'}) +
            //                 'Delete</a>' +
            //                 '</div>' +
            //                 '</div>' +
            //                 '<a href="javascript:;" class="item-edit">' +
            //                 feather.icons['edit'].toSvg({class: 'font-small-4'}) +
            //                 '</a>'
            //             );
            //         }
            //     }
            // ],
            order: [[2, 'desc']],
            dom:
                '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 7,
            lengthMenu: [7, 10, 25, 50, 75, 100],
            // buttons: [
            //     {
            //         extend: 'collection',
            //         className: 'btn btn-outline-secondary dropdown-toggle mr-2',
            //         text: feather.icons['share'].toSvg({class: 'font-small-4 mr-50'}) + 'Export',
            //         buttons: [
            //             {
            //                 extend: 'print',
            //                 text: feather.icons['printer'].toSvg({class: 'font-small-4 mr-50'}) + 'Print',
            //                 className: 'dropdown-item',
            //                 exportOptions: {columns: [1, 2, 3, 4, 5, 6]}
            //             },
            //             {
            //                 extend: 'csv',
            //                 text: feather.icons['file-text'].toSvg({class: 'font-small-4 mr-50'}) + 'Csv',
            //                 className: 'dropdown-item',
            //                 exportOptions: {columns: [1, 2, 3, 4, 5, 6]}
            //             },
            //             {
            //                 extend: 'excel',
            //                 text: feather.icons['file'].toSvg({class: 'font-small-4 mr-50'}) + 'Excel',
            //                 className: 'dropdown-item',
            //                 exportOptions: {columns: [1, 2, 3, 4, 5, 6]}
            //             },
            //             {
            //                 extend: 'pdf',
            //                 text: feather.icons['clipboard'].toSvg({class: 'font-small-4 mr-50'}) + 'Pdf',
            //                 className: 'dropdown-item',
            //                 exportOptions: {columns: [1, 2, 3, 4, 5, 6]}
            //             },
            //             {
            //                 extend: 'copy',
            //                 text: feather.icons['copy'].toSvg({class: 'font-small-4 mr-50'}) + 'Copy',
            //                 className: 'dropdown-item',
            //                 exportOptions: {columns: [1, 2, 3, 4, 5, 6]}
            //             }
            //         ],
            //         init: function (api, node, config) {
            //             $(node).removeClass('btn-secondary');
            //             $(node).parent().removeClass('btn-group');
            //             setTimeout(function () {
            //                 $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex');
            //             }, 50);
            //         }
            //     },
            //     {
            //         text: feather.icons['plus'].toSvg({class: 'mr-50 font-small-4'}) + 'Add New Record',
            //         className: 'create-new btn btn-primary',
            //         attr: {
            //             'data-toggle': 'modal',
            //             'data-target': '#modals-slide-in'
            //         },
            //         init: function (api, node, config) {
            //             $(node).removeClass('btn-secondary');
            //         }
            //     }
            // ],
            language: {
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            }
        });
        $('div.head-label').html('<h6 class="mb-0"></h6>');
    }


    // Orders List datatable
    if (dtOrderTable.length) {
        dtOrderTable.DataTable({
            "processing": true,
            "serverSide": true,
            ajax: {url: '/get-order',},
            columns: [
                {data: 'id'},
                {data: 'id'}, // used for sorting so will hide this column
                {data: 'name_user_order'},
                {data: 'status'},
                {data: 'feild'},
                {data: ''}
            ],
            columnDefs: [
                {
                    // For Checkboxes
                    targets: 0,
                    orderable: false,
                    responsivePriority: 3,
                    render: function (data, type, full, meta) {
                        return (
                            '<div class="custom-control custom-checkbox"> <input class="custom-control-input dt-checkboxes" type="checkbox" value="" id="checkbox' +
                            data +
                            '" /><label class="custom-control-label" for="checkbox' +
                            data +
                            '"></label></div>'
                        );
                    },
                    checkboxes: {
                        selectAllRender:
                            '<div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" value="" id="checkboxSelectAll" /><label class="custom-control-label" for="checkboxSelectAll"></label></div>'
                    }
                },
                // {
                //     targets: 2,
                //     visible: false
                // },
                // {
                //     responsivePriority: 1,
                //     targets: 4
                // },
                // {
                //     // Label
                //     targets: -2,
                //     render: function (data, type, full, meta) {
                //         var $status_number = full['status'];
                //         var $status = {
                //             1: {title: 'Current', class: 'badge-light-primary'},
                //             2: {title: 'Professional', class: ' badge-light-success'},
                //             3: {title: 'Rejected', class: ' badge-light-danger'},
                //             4: {title: 'Resigned', class: ' badge-light-warning'},
                //             5: {title: 'Applied', class: ' badge-light-info'}
                //         };
                //         if (typeof $status[$status_number] === 'undefined') {
                //             return data;
                //         }
                //         return (
                //             '<span class="badge badge-pill ' +
                //             $status[$status_number].class +
                //             '">' +
                //             $status[$status_number].title +
                //             '</span>'
                //         );
                //     }
                // },
                {
                    // Actions
                    targets: -1,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return (
                            '<div class="d-inline-flex">' +
                            '<a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">' +
                            feather.icons['more-vertical'].toSvg({class: 'font-small-4'}) +
                            '</a>' +
                            '<div class="dropdown-menu dropdown-menu-right">' +
                            '<a href="javascript:;" class="dropdown-item">' +
                            feather.icons['file-text'].toSvg({class: 'font-small-4 mr-50'}) +
                            'Details</a>' +
                            '<a href="javascript:;" class="dropdown-item">' +
                            feather.icons['archive'].toSvg({class: 'font-small-4 mr-50'}) +
                            'Archive</a>' +
                            '<a href="javascript:;" class="dropdown-item delete-record">' +
                            feather.icons['trash-2'].toSvg({class: 'font-small-4 mr-50'}) +
                            'Delete</a>' +
                            '</div>' +
                            '</div>' +
                            '<a href="javascript:;" class="item-edit">' +
                            feather.icons['edit'].toSvg({class: 'font-small-4'}) +
                            '</a>'
                        );
                    }
                }
            ],
            order: [[2, 'desc']],
            dom:
                '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 7,
            lengthMenu: [7, 10, 25, 50, 75, 100],
            buttons: [
                {
                    extend: 'collection',
                    className: 'btn btn-outline-secondary dropdown-toggle mr-2',
                    text: feather.icons['share'].toSvg({class: 'font-small-4 mr-50'}) + 'Export',
                    buttons: [

                        {
                            extend: 'csv',
                            text: feather.icons['file-text'].toSvg({class: 'font-small-4 mr-50'}) + 'Csv',
                            className: 'dropdown-item',
                            exportOptions: {columns: [1, 2, 3, 4, 5, 6]}
                        },
                        {
                            extend: 'excel',
                            text: feather.icons['file'].toSvg({class: 'font-small-4 mr-50'}) + 'Excel',
                            className: 'dropdown-item',
                            exportOptions: {columns: [1, 2, 3, 4, 5, 6]}
                        },
                        {
                            extend: 'pdf',
                            text: feather.icons['clipboard'].toSvg({class: 'font-small-4 mr-50'}) + 'Pdf',
                            className: 'dropdown-item',
                            exportOptions: {columns: [1, 2, 3, 4, 5, 6]}
                        },
                        {
                            extend: 'copy',
                            text: feather.icons['copy'].toSvg({class: 'font-small-4 mr-50'}) + 'Copy',
                            className: 'dropdown-item',
                            exportOptions: {columns: [1, 2, 3, 4, 5, 6]}
                        },
                        // {
                        //     extend: 'print',
                        //     text: feather.icons['printer'].toSvg({class: 'font-small-4 mr-50'}) + 'Print',
                        //     className: 'dropdown-item',
                        //     exportOptions: {columns: [1, 2, 3, 4, 5, 6]}
                        // }
                    ],
                    init: function (api, node, config) {
                        $(node).removeClass('btn-secondary');
                        $(node).parent().removeClass('btn-group');
                        setTimeout(function () {
                            $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex');
                        }, 50);
                    }
                },
                {
                    text: feather.icons['plus'].toSvg({class: 'mr-50 font-small-4'}) + 'Add New Record',
                    className: 'create-new btn btn-primary',
                    attr: {
                        'data-toggle': 'modal',
                        'data-target': '#modals-slide-in'
                    },
                    init: function (api, node, config) {
                        $(node).removeClass('btn-secondary');
                    }
                }
            ],
            language: {
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            }
        });
        $('div.head-label').html('<h6 class="mb-0"></h6>');
    }

    // Check Validity
    function checkValidity(el) {
        if (el.validate().checkForm()) {
            submitBtn.attr('disabled', false);
        } else {
            submitBtn.attr('disabled', true);
        }
    }

    // Form Validation
    if (newUserForm.length) {
        newUserForm.validate({
            errorClass: 'error',
            rules: {
                'name': {
                    required: true
                },
                'user_name': {
                    required: true
                },
                'email': {
                    required: true
                },
                'password': {
                    required: true
                }
            }
        });

    }

});
