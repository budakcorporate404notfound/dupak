<?php
$page = "tu2bps";
?>
@extends('master')
@section('konten')
<!DOCTYPE html>
<!--
Template Name: Materialize - Material Design Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
Renew Support: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.


-->

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords"
        content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>DataTable | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/flag-icon/css/flag-icon.min.css">

    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/themes/vertical-menu-nav-dark-template/materialize.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/themes/vertical-menu-nav-dark-template/style.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/pages/data-tables.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<!-- END: Head-->

<body
    class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark preload-transitions 2-columns   "
    data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">

                <!-- Search for small screen-->
                <div class="container">

                    <div class="row">

                        <div class="col s10 m6 l6 breadcrumbs-left">
                            <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down">
                                <span>MyDupak</span>
                            </h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="">Bag. Fungsional 2 TU</a>
                                </li>
                                <li class="breadcrumb-item active"> Data Berkas Diterima
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section section-data-tables">

                        @if ($message = Session::get('diterima'))
                        <div class="card-alert card gradient-45deg-light-blue-cyan">
                            <div class="card-content white-text">
                                <p>
                                    <i class="material-icons">info_outline</i> SUCCESS : {{ $message }}</p>
                            </div>
                            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">??</span>
                            </button>
                        </div>
                        @endif

                        @if ($message = Session::get('ditolak'))
                        <div class="card-alert card gradient-45deg-amber-amber">
                            <div class="card-content white-text">
                                <p>
                                    <i class="material-icons">warning</i> WARNING : {{ $message }}</p>
                            </div>
                            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">??</span>
                            </button>
                        </div>
                        @endif

                        <div class="card">
                            <div class="card-content">
                                <p class="caption mb-0">Data Berkas yang telah dilakukan pengecekan pada tahap 1 dan
                                    dipastikan file berkas telah sesuai akan ditampung pada menu ini. sebelum dikirim ke
                                    TU. klik icon <a class="purple-text"><i class="material-icons">near_me</i></a> untuk
                                    mengirimkan data ke TU.</p>
                            </div>
                        </div>

                        <!-- Page Length Options -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <h4 class="card-title">Data Berkas Diterima</h4>
                                        {{-- <button style="margin-bottom: 10px" class="btn btn-primary delete_all"
                                            data-url="{{ url('myproductsDeleteAll') }}">Delete All Selected</button>
                                        --}}
                                        <div class="row">
                                            <div class="col s12">
                                                <table id="page-length-option" class="display">
                                                    <thead>
                                                        <tr>

                                                            <th width="50px">
                                                                <label>
                                                                    <input type="checkbox" id="master" />
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th>no</th>
                                                            <th>nama</th>
                                                            <th>tgl pengajuan</th>
                                                            <th>administrasi</th>
                                                            <th>bukti fisik</th>
                                                            {{-- <th>Data Id</th> --}}
                                                            <th>kirim ke tu</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php $no = 0;?>
                                                        @foreach($data as $t)
                                                        <form method="post" action="">
                                                            {{ csrf_field() }}
                                                            {{ method_field('PUT') }}

                                                            <?php $no++ ;?>
                                                            <tr id="tr_{{$t->id}}">

                                                                <input class="validate" required type="hidden"
                                                                    name="data_id" value="{{ $t->id }}" readonly>

                                                                <td>
                                                                    <label>
                                                                        <input type="checkbox" class="sub_chk"
                                                                            data-id="{{$t->id}}" />
                                                                        <span></span>
                                                                    </label>
                                                                </td>

                                                                <td> {{$no}} </td>
                                                                <td>
                                                                    {{$t->name}}

                                                                </td>

                                                                <td>
                                                                    {{$t->created_at}}

                                                                </td>

                                                                <td>
                                                                    <a href="{{$t->lu_administrasi}}" target="_blank"
                                                                        rel="noopener noreferrer"><i
                                                                            class="material-icons">filter_drama</i></a>

                                                                </td>
                                                                <td>
                                                                    <a href="{{$t->lu_buktifisik}}" target="_blank"
                                                                        rel="noopener noreferrer"><i
                                                                            class="material-icons">filter_drama</i></a>

                                                                </td>
                                                                <input type="hidden" value="{{$t->data_id}}">
                                                                <td><a href="{{ url('tu2bps',[$t->data_id, $t->user_id]) }}"
                                                                        class="purple-text logout-confirms"
                                                                        data-tr="tr_{{$t->id}}"
                                                                        data-toggle="confirmation"
                                                                        data-btn-ok-label="Delete"
                                                                        data-btn-ok-icon="fa fa-remove"
                                                                        data-btn-ok-class="btn btn-sm btn-danger"
                                                                        data-btn-cancel-label="Cancel"
                                                                        data-btn-cancel-icon="fa fa-chevron-circle-left"
                                                                        data-btn-cancel-class="btn btn-sm btn-default"
                                                                        data-title="Are you sure you want to delete ?"
                                                                        data-placement="left" data-singleton="true">
                                                                        <i class="material-icons">near_me</i>

                                                                    </a> </td>

                                                            </tr>

                                                            <!-- Modal -->
                                                        </form>
                                                        @endforeach
                                                    </tbody>

                                            </div>

                                            <tfoot>
                                                <tr>

                                                            <th width="50px">
                                                                <label>
                                                                    <input type="checkbox" id="master" />
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th>no</th>
                                                            <th>nama</th>
                                                            <th>tgl pengajuan</th>
                                                            <th>administrasi</th>
                                                            <th>bukti fisik</th>
                                                            {{-- <th>Data Id</th> --}}
                                                            <th>kirim ke tu</th>

                                                </tr>
                                            </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
    </div>
    <!-- END: Page Main-->

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/vendors.min.js">
    </script>
    <!-- BEGIN VENDOR JS-->

    <!-- BEGIN THEME  JS-->
    <script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/plugins.min.js">
    </script>

    <script
        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/custom/custom-script.min.js">
    </script>
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/scripts/customizer.min.js">
    </script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->

    <!-- END PAGE LEVEL JS-->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#master').on('click', function(e) {
                if ($(this).is(':checked', true)) {
                    $(".sub_chk").prop('checked', true);
                } else {
                    $(".sub_chk").prop('checked', false);
                }
            });
            $('.delete_all').on('click', function(e) {
                var allVals = [];
                $(".sub_chk:checked").each(function() {
                    allVals.push($(this).attr('data-id'));
                });
                if (allVals.length <= 0) {
                    alert("Tolong pilih data terlebih dahulu.");
                } else {
                    var check = confirm("Apakah anda yakin, dengan pilihan anda?");
                    if (check == true) {
                        var join_selected_values = allVals.join(",");
                        $.ajax({
                            url: $(this).data('url'),
                            type: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: 'ids=' + join_selected_values,
                            success: function(data) {
                                if (data['success']) {
                                    $(".sub_chk:checked").each(function() {
                                        $(this).parents("tr").remove();
                                    });
                                    alert(data['success']);
                                } else if (data['error']) {
                                    alert(data['error']);
                                } else {
                                    alert('Whoops Something went wrong!!');
                                }
                            },
                            error: function(data) {
                                alert(data.responseText);
                            }
                        });
                        $.each(allVals, function(index, value) {
                            $('table tr').filter("[data-row-id='" + value + "']").remove();
                        });
                    }
                }
            });
            $('[data-toggle=confirmation]').confirmation({
                rootSelector: '[data-toggle=confirmation]',
                onConfirm: function(event, element) {
                    element.trigger('confirm');
                }
            });
            $(document).on('confirm', function(e) {
                var ele = e.target;
                e.preventDefault();
                $.ajax({
                    url: ele.href,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        if (data['success']) {
                            $("#" + data['tr']).slideUp("slow");
                            alert(data['success']);
                        } else if (data['error']) {
                            alert(data['error']);
                        } else {
                            alert('Whoops Something went wrong!!');
                        }
                    },
                    error: function(data) {
                        alert(data.responseText);
                    }
                });
                return false;
            });
        });
    </script>
</body>

</html>

@endsection