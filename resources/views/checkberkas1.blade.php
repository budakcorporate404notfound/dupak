<?php
$page = "pengecekanberkas1";
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
                                <li class="breadcrumb-item"><a href="">Pengecekan Berkas</a>
                                </li>
                                <li class="breadcrumb-item active"> Diterima atau Ditolak
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                class="btn btn-floating dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                href="#!" data-target="dropdown1"><i class="material-icons">expand_more </i><i
                                    class="material-icons right">arrow_drop_down</i></a>
                            <ul class="dropdown-content" id="dropdown1" tabindex="0">
                                <li tabindex="0"><a class="grey-text text-darken-2"
                                        href="user-profile-page.html">Profile<span class="new badge red">2</span></a>
                                </li>
                                <li tabindex="0"><a class="grey-text text-darken-2"
                                        href="app-contacts.html">Contacts</a></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                                <li class="divider" tabindex="-1"></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section section-data-tables">
                        <div class="card">
                            <div class="card-content">
                                <p class="caption mb-0">Setelah melakukan pengecekan file administrasi dan file bukti
                                    fisik yang dikirimkan. Ambil keputusan apakah pengajuan diterima atau ditolak. Jika
                                    pengajuan ditolak maka berikan komentar pada kolom catatan tambahan, agar pemohon
                                    ketika mengajukan permohonan kembali tidak melakukan kesalahan yang sama.</p>
                            </div>
                        </div>

                        <!-- Page Length Options -->
                        <div class="row">
                            <div class="col s12">
                                <div id="html-validations" class="card card-tabs">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Pengecekan Berkas (Diterima atau Ditolak)</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-view-validations">
                                            @foreach ($data as $t)
                                            <form method="post"
                                                action="{{url('pengecekanberkas1/terimaatautolak/'.$t->id)}}">
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}

                                                <input class="validate" required type="hidden" name="user_id"
                                                    value="{{ $t->user_id }}" readonly>

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <label>No data</label>
                                                        <input class="validate" required type="text" name="data_id"
                                                            value="{{ $t->id }}" readonly>

                                                        @if($errors->has('id'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('id')}}
                                                        </div>
                                                        @endif
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <label>nama pemohon</label>
                                                        <input class="validate" required type="text"
                                                            value="{{$t->name}}" readonly>
                                                        @if($errors->has('name'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('name')}}
                                                        </div>
                                                        @endif
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <label>verifikator berkas</label>
                                                        <input class="validate" required type="text" name="verifikator"
                                                            value="{{Auth::user()->name}}" readonly>

                                                        @if($errors->has('verifikator'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('verifikator')}}
                                                        </div>
                                                        @endif
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <label>link file administrasi</label>
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <label for="password0"></label>
                                                        <a href="{{$t->lu_administrasi}}" target="blank"
                                                            rel="noopener noreferrer"><input type="text"
                                                                placeholder="{{$t->lu_administrasi}}" readonly>
                                                        </a>
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <label>link file bukti fisik</label>
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <label for="password0"></label>
                                                        <a href="{{$t->lu_buktifisik}}" target="blank"
                                                            rel="noopener noreferrer"><input type="text"
                                                                placeholder="{{$t->lu_buktifisik}}" readonly>
                                                        </a>
                                                    </div>

                                                    <div class="col s12">
                                                        <p>Pengajuan dupak *</p>
                                                        <p>
                                                            <label>
                                                                <input class="validate" required
                                                                    name="hasil_verifikator" value="1" type="radio"
                                                                    checked />
                                                                <span>Diterima</span>
                                                            </label>
                                                        </p>

                                                        <label>
                                                            <input class="validate" required name="hasil_verifikator"
                                                                value="0" type="radio" />
                                                            <span>Ditolak</span>
                                                        </label>
                                                        <div class="input-field">
                                                        </div>
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <textarea name="catatan"
                                                            class="materialize-textarea validate"></textarea>
                                                        <label for="ccomment0">catatan tambahan</label>

                                                        @if($errors->has('catatan'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('catatan')}}
                                                        </div>
                                                        @endif
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <button class="btn waves-effect waves-light right" type="submit"
                                                            name="action">Save
                                                            <i class="material-icons right">save</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                            @endforeach

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
</body>

</html>

@endsection