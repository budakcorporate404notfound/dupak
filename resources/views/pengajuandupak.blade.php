<?php
$page = "pengajuandupak";
?>
<!DOCTYPE html>
<!--
Template Name: Materialize - Material Design Admin Template
Author: PxInvent
Website: httpi://www.pixinvent.com/
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
    <title>Form Wizard | Materialize - Material Design Admin Template</title>
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
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/materialize-stepper/materialize-stepper.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/themes/vertical-menu-nav-dark-template/materialize.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/themes/vertical-menu-nav-dark-template/style.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/pages/form-wizard.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

@extends('master')
@section('konten')

<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6 breadcrumbs-left">
                        <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>MyDupak</span></h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="">Pengajuan Dupak</a>
                            </li>
                            <li class="breadcrumb-item active">Form Pengajuan Dupak Online
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
                            <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a>
                            </li>
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

                <!-- @if ($message = Session::get('sukses'))
                <div class="card">
                    <div class="card-content">
                        <p class="caption mb-0">{{ $message }}</p>
                    </div>
                </div>
                @endif

                @if ($message = Session::get('gagal'))
                <div class="card">
                    <div class="card-content">
                        <p class="caption mb-0">{{ $message }}</p>
                    </div>
                </div>
                @endif -->

                @if ($message = Session::get('sukses'))
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

                             @if ($message = Session::get('gagal'))
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

                <!-- Non Linear Stepper -->

                <div class="row">
                    <div class="col s12">
                        <div class="card">

                            <form method="post" action="{{url('/pengajuandupak/store')}}">
                                {{ csrf_field() }}

                                <div class="card-content">
                                    <div class="card-header">
                                        <h4 class="card-title">Form Pengajuan Dupak Online</h4>
                                        <p> Berkas usulan disimpan dalam file utama yang terdiri dari file administrasi
                                            dan
                                            file bukti fisik.</p>
                                    </div>

                                    <ul class="stepper" id="nonLinearStepper">
                                        <li class="step active">
                                            <div class="step-title waves-effect">Step 1 ( Upload Link File Administrasi
                                                )</div>

                                            <div class="step-content">
                                                <div class="row">

                                                    <p>
                                                        file administrasi terdiri dari file-file administrasi ( DUPAK,
                                                        SPMK,
                                                        PAK terakhir, SK kenaikan pangkat terakhir, SK kenaikan jabatan,
                                                        SPP, DLL)
                                                    </p>

                                                    <!-- <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>File</span>
                                                            <input type="file">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text">
                                                        </div>
                                                    </div> -->

                                                    <div class="form-group">


                                                        <!-- hide input user id -->
                                                        <div class="form-group">
                                                            <label>User ID</label>
                                                            <input type="hidden" name="user_id" class="form-control"
                                                                placeholder="Nama pegawai .."
                                                                value="{{Auth::user()->id}}" required readonly>

                                                            @if($errors->has('user_id'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('user"_id')}}
                                                            </div>
                                                            @endif

                                                        </div>
                                                         <!-- end hide input user id -->


                                                        <input type="text" name="lu_administrasi" class="form-control"
                                                            placeholder="Masukkan link file administrasi" required>

                                                        @if($errors->has('lu_administrasi'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('lu_administrasi')}}
                                                        </div>
                                                        @endif

                                                    </div>

                                                </div>

                                                <div class="step-actions">
                                                    <div class="row">
                                                        <div class="col m4 s12 mb-3">
                                                            <button class="red btn btn-reset" type="reset">
                                                                <i class="material-icons left">clear</i>Reset
                                                            </button>
                                                        </div>
                                                        <div class="col m4 s12 mb-3">
                                                            <button class="btn btn-light previous-step" disabled>
                                                                <i class="material-icons left">arrow_back</i>
                                                                Prev
                                                            </button>
                                                        </div>
                                                        <div class="col m4 s12 mb-3">
                                                            <button
                                                                class="waves-effect waves dark btn btn-primary next-step"
                                                                type="submit">
                                                                Next
                                                                <i class="material-icons right">arrow_forward</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="step">
                                            <div class="step-title waves-effect">Step 2 ( Upload Link File Bukti Fisik )
                                            </div>
                                            <div class="step-content">
                                                <div class="row">
                                                    <div class="row">

                                                        <p>
                                                            file bukti fisik terdiri dari folder unsur kegiatan dan
                                                            diberinama unsur kegiatan ( I. Pendidikan, II. Operasi
                                                            Teknologi
                                                            Informasi, III. Implementasi Teknologi Informasi, IV.
                                                            Pengembangan Profesi, V. Penunjang)
                                                        </p>

                                                        <!-- <div class="file-field input-field">
                                                            <div class="btn">
                                                                <span>File</span>
                                                                <input type="file">
                                                            </div>
                                                            <div class="file-path-wrapper">
                                                                <input class="file-path validate" type="text">
                                                            </div>
                                                        </div> -->

                                                        <div class="form-group"><input type="text" name="lu_buktifisik"
                                                                class="form-control"
                                                                placeholder="Masukkan link file bukti fisik " required>

                                                            @if($errors->has('lu_buktifisik'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('lu_buktifisik')}}
                                                            </div>
                                                            @endif

                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="step-actions">
                                                    <div class="row">
                                                        <div class="col m4 s12 mb-3">
                                                            <button class="red btn btn-reset" type="reset">
                                                                <i class="material-icons left">clear</i>Reset
                                                            </button>
                                                        </div>
                                                        <div class="col m4 s12 mb-3">
                                                            <button class="btn btn-light previous-step">
                                                                <i class="material-icons left">arrow_back</i>
                                                                Prev
                                                            </button>
                                                        </div>
                                                        <div class="col m4 s12 mb-3">
                                                            <button
                                                                class="waves-effect waves dark btn btn-primary next-step"
                                                                type="submit">
                                                                Next
                                                                <i class="material-icons right">arrow_forward</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="step">
                                            <div class="step-title waves-effect">Step 3 ( Pengiriman File Administrasi dan Bukti Fisik )</div>
                                            <div class="step-content">
                                                <div class="row">

                                                    <p>
                                                        pastikan file yang anda kirim telah benar
                                                    </p>

                                                </div>
                                                <div class="row">

                                                </div>
                                                <div class="row">

                                                </div>
                                                <div class="step-actions">
                                                    <div class="row">
                                                        <div class="col m6 s12 mb-1">
                                                            <button class="red btn mr-1 btn-reset" type="reset">
                                                                <i class="material-icons">clear</i>
                                                                Reset
                                                            </button>
                                                        </div>
                                                        <div class="col m6 s12 mb-1">
                                                            <button class="waves-effect waves-dark btn btn-primary"
                                                                type="submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Horizontal Stepper -->
                <ul id="horizStepper">
                    <li>
                        <div class="step-content">
                        </div>
                    </li>
                    <li>
                        <div class="step-content">
                        </div>
                    </li>
                    <li>
                        <div class="step-content">
                        </div>
                    </li>
                </ul>

                <!-- Linear Stepper -->

                <div class="row">
                    <ul class="stepper linear" id="linearStepper">
                        <li>

                            <div class="step-content">
                            </div>

                        </li>
                </div>

                <div class="step-content">
                </div>

                <div class="step-content">
                </div>

            </div>

            <!-- START RIGHT SIDEBAR NAV -->
            <aside id="right-sidebar-nav">
                <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
                    <div class="row">
                        <div class="slide-out-right-title">
                            <div class="col s12 border-bottom-1 pb-0 pt-1">
                                <div class="row">
                                    <div class="col s2 pr-0 center">
                                        <i class="material-icons vertical-text-middle"><a href="#"
                                                class="sidenav-close">clear</a></i>
                                    </div>
                                    <div class="col s10 pl-0">
                                        <ul class="tabs">
                                            <li class="tab col s4 p-0">
                                                <a href="#messages" class="active">
                                                    <span>Messages</span>
                                                </a>
                                            </li>
                                            <li class="tab col s4 p-0">
                                                <a href="#settings">
                                                    <span>Settings</span>
                                                </a>
                                            </li>
                                            <li class="tab col s4 p-0">
                                                <a href="#activity">
                                                    <span>Activity</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-out-right-body row pl-3">
                            <div id="messages" class="col s12 pb-0">
                                <div class="collection border-none mb-0">
                                    <input class="header-search-input mt-4 mb-2" type="text" name="Search"
                                        placeholder="Search Messages" />
                                    <ul class="collection right-sidebar-chat p-0 mb-0">
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-online avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-7.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">Elizabeth Elliott</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank
                                                    you</p>
                                            </div>
                                            <span class="secondary-content medium-small">5.00 AM</span>
                                        </li>
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-online avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-1.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">Mary Adams</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello
                                                    Boo</p>
                                            </div>
                                            <span class="secondary-content medium-small">4.14 AM</span>
                                        </li>
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-off avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-2.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">Caleb Richards</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello
                                                    Boo</p>
                                            </div>
                                            <span class="secondary-content medium-small">4.14 AM</span>
                                        </li>
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-online avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-3.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">Caleb Richards</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny
                                                    !</p>
                                            </div>
                                            <span class="secondary-content medium-small">9.00 PM</span>
                                        </li>
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-online avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-4.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">June Lane</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh
                                                    God</p>
                                            </div>
                                            <span class="secondary-content medium-small">4.14 AM</span>
                                        </li>
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-off avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-5.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">Edward Fletcher</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love
                                                    you</p>
                                            </div>
                                            <span class="secondary-content medium-small">5.15 PM</span>
                                        </li>
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-online avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-6.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">Crystal Bates</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can
                                                    we</p>
                                            </div>
                                            <span class="secondary-content medium-small">8.00 AM</span>
                                        </li>
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-off avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-7.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">Nathan Watts</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                    Great!</p>
                                            </div>
                                            <span class="secondary-content medium-small">9.53 PM</span>
                                        </li>
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-off avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-8.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">Willard Wood</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it
                                                </p>
                                            </div>
                                            <span class="secondary-content medium-small">4.20 AM</span>
                                        </li>
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-online avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-1.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">Ronnie Ellis</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got
                                                    that</p>
                                            </div>
                                            <span class="secondary-content medium-small">5.20 AM</span>
                                        </li>
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-online avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-9.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">Daniel Russell</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank
                                                    you</p>
                                            </div>
                                            <span class="secondary-content medium-small">12.00 AM</span>
                                        </li>
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-off avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-10.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">Sarah Graves</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay
                                                    you</p>
                                            </div>
                                            <span class="secondary-content medium-small">11.14 PM</span>
                                        </li>
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-off avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-11.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">Andrew Hoffman</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can
                                                    do</p>
                                            </div>
                                            <span class="secondary-content medium-small">7.30 PM</span>
                                        </li>
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <span class="avatar-status avatar-online avatar-50"><img
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-12.png"
                                                    alt="avatar" />
                                                <i></i>
                                            </span>
                                            <div class="user-content">
                                                <h6 class="line-height-0">Camila Lynch</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave
                                                    it</p>
                                            </div>
                                            <span class="secondary-content medium-small">2.00 PM</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="settings" class="col s12">
                                <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">GENERAL SETTINGS</p>
                                <ul class="collection border-none">
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span>Notifications</span>
                                            <div class="switch right">
                                                <label>
                                                    <input checked type="checkbox" />
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span>Show recent activity</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox" />
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span>Show recent activity</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox" />
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span>Show Task statistics</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox" />
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span>Show your emails</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox" />
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span>Email Notifications</span>
                                            <div class="switch right">
                                                <label>
                                                    <input checked type="checkbox" />
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                                <ul class="collection border-none">
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span>System Logs</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox" />
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span>Error Reporting</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox" />
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span>Applications Logs</span>
                                            <div class="switch right">
                                                <label>
                                                    <input checked type="checkbox" />
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span>Backup Servers</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox" />
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span>Audit Logs</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox" />
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="activity" class="col s12">
                                <div class="activity">
                                    <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                    <ul class="widget-timeline mb-0">
                                        <li class="timeline-items timeline-icon-green active">
                                            <div class="timeline-time">Today</div>
                                            <h6 class="timeline-title">Homepage mockup design</h6>
                                            <p class="timeline-text">Melissa liked your activity.</p>
                                            <div class="timeline-content orange-text">Important</div>
                                        </li>
                                        <li class="timeline-items timeline-icon-cyan active">
                                            <div class="timeline-time">10 min</div>
                                            <h6 class="timeline-title">Melissa liked your activity Drinks.</h6>
                                            <p class="timeline-text">Here are some news feed interactions
                                                concepts.</p>
                                            <div class="timeline-content green-text">Resolved</div>
                                        </li>
                                        <li class="timeline-items timeline-icon-red active">
                                            <div class="timeline-time">30 mins</div>
                                            <h6 class="timeline-title">12 new users registered</h6>
                                            <p class="timeline-text">Here are some news feed interactions
                                                concepts.</p>
                                            <div class="timeline-content">
                                                <img src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/icon/pdf.png"
                                                    alt="document" height="30" width="25" class="mr-1">Registration.doc
                                            </div>
                                        </li>
                                        <li class="timeline-items timeline-icon-indigo active">
                                            <div class="timeline-time">2 Hrs</div>
                                            <h6 class="timeline-title">Tina is attending your activity</h6>
                                            <p class="timeline-text">Here are some news feed interactions
                                                concepts.</p>
                                            <div class="timeline-content">
                                                <img src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/icon/pdf.png"
                                                    alt="document" height="30" width="25" class="mr-1">Activity.doc
                                            </div>
                                        </li>
                                        <li class="timeline-items timeline-icon-orange">
                                            <div class="timeline-time">5 hrs</div>
                                            <h6 class="timeline-title">Josh is now following you</h6>
                                            <p class="timeline-text">Here are some news feed interactions
                                                concepts.</p>
                                            <div class="timeline-content red-text">Pending</div>
                                        </li>
                                    </ul>
                                    <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                                    <ul class="widget-timeline mb-0">
                                        <li class="timeline-items timeline-icon-green active">
                                            <div class="timeline-time">Just now</div>
                                            <h6 class="timeline-title">New order received urgent</h6>
                                            <p class="timeline-text">Melissa liked your activity.</p>
                                            <div class="timeline-content orange-text">Important</div>
                                        </li>
                                        <li class="timeline-items timeline-icon-cyan active">
                                            <div class="timeline-time">05 min</div>
                                            <h6 class="timeline-title">System shutdown.</h6>
                                            <p class="timeline-text">Here are some news feed interactions
                                                concepts.</p>
                                            <div class="timeline-content blue-text">Urgent</div>
                                        </li>
                                        <li class="timeline-items timeline-icon-red">
                                            <div class="timeline-time">20 mins</div>
                                            <h6 class="timeline-title">Database overloaded 89%</h6>
                                            <p class="timeline-text">Here are some news feed interactions
                                                concepts.</p>
                                            <div class="timeline-content">
                                                <img src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/icon/pdf.png"
                                                    alt="document" height="30" width="25" class="mr-1">Database-log.doc
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                                    <ul class="widget-timeline mb-0">
                                        <li class="timeline-items timeline-icon-green active">
                                            <div class="timeline-time">10 min</div>
                                            <h6 class="timeline-title">System error</h6>
                                            <p class="timeline-text">Melissa liked your activity.</p>
                                            <div class="timeline-content red-text">Error</div>
                                        </li>
                                        <li class="timeline-items timeline-icon-cyan">
                                            <div class="timeline-time">1 min</div>
                                            <h6 class="timeline-title">Production server down.</h6>
                                            <p class="timeline-text">Here are some news feed interactions
                                                concepts.</p>
                                            <div class="timeline-content blue-text">Urgent</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Out Chat -->
                <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
                    <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                        <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
                    </li>
                    <li class="chat-body">
                        <ul class="collection">
                            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                <span class="avatar-status avatar-online avatar-50"><img
                                        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-7.png"
                                        alt="avatar" />
                                </span>
                                <div class="user-content speech-bubble">
                                    <p class="medium-small">hello!</p>
                                </div>
                            </li>
                            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                data-target="slide-out-chat">
                                <div class="user-content speech-bubble-right">
                                    <p class="medium-small">How can we help? We're here for you!</p>
                                </div>
                            </li>
                            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                <span class="avatar-status avatar-online avatar-50"><img
                                        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-7.png"
                                        alt="avatar" />
                                </span>
                                <div class="user-content speech-bubble">
                                    <p class="medium-small">I am looking for the best admin template.?</p>
                                </div>
                            </li>
                            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                data-target="slide-out-chat">
                                <div class="user-content speech-bubble-right">
                                    <p class="medium-small">Materialize admin is the responsive materializecss
                                        admin template.</p>
                                </div>
                            </li>

                            <li class="collection-item display-grid width-100 center-align">
                                <p>8:20 a.m.</p>
                            </li>

                            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                <span class="avatar-status avatar-online avatar-50"><img
                                        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-7.png"
                                        alt="avatar" />
                                </span>
                                <div class="user-content speech-bubble">
                                    <p class="medium-small">Ohh! very nice</p>
                                </div>
                            </li>
                            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                data-target="slide-out-chat">
                                <div class="user-content speech-bubble-right">
                                    <p class="medium-small">Thank you.</p>
                                </div>
                            </li>
                            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                <span class="avatar-status avatar-online avatar-50"><img
                                        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-7.png"
                                        alt="avatar" />
                                </span>
                                <div class="user-content speech-bubble">
                                    <p class="medium-small">How can I purchase it?</p>
                                </div>
                            </li>

                            <li class="collection-item display-grid width-100 center-align">
                                <p>9:00 a.m.</p>
                            </li>

                            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                data-target="slide-out-chat">
                                <div class="user-content speech-bubble-right">
                                    <p class="medium-small">From ThemeForest.</p>
                                </div>
                            </li>
                            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                data-target="slide-out-chat">
                                <div class="user-content speech-bubble-right">
                                    <p class="medium-small">Only $24</p>
                                </div>
                            </li>
                            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                <span class="avatar-status avatar-online avatar-50"><img
                                        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-7.png"
                                        alt="avatar" />
                                </span>
                                <div class="user-content speech-bubble">
                                    <p class="medium-small">Ohh! Thank you.</p>
                                </div>
                            </li>
                            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                <span class="avatar-status avatar-online avatar-50"><img
                                        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-7.png"
                                        alt="avatar" />
                                </span>
                                <div class="user-content speech-bubble">
                                    <p class="medium-small">I will purchase it for sure.</p>
                                </div>
                            </li>
                            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                data-target="slide-out-chat">
                                <div class="user-content speech-bubble-right">
                                    <p class="medium-small">Great, Feel free to get in touch on</p>
                                </div>
                            </li>
                            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                data-target="slide-out-chat">
                                <div class="user-content speech-bubble-right">
                                    <p class="medium-small">https://pixinvent.ticksy.com/</p>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="center-align chat-footer">
                        <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
                            <div class="input-field">
                                <input id="icon_prefix" type="text" class="search" />
                                <label for="icon_prefix">Type here..</label>
                                <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
                            </div>
                        </form>
                    </li>
                </ul>
            </aside>
            <!-- END RIGHT SIDEBAR NAV -->
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a
                    class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i
                        class="material-icons">add</i></a>
                <ul>
                    <li><a href="css-helpers.html" class="btn-floating blue"><i
                                class="material-icons">help_outline</i></a>
                    </li>
                    <li><a href="cards-extended.html" class="btn-floating green"><i
                                class="material-icons">widgets</i></a>
                    </li>
                    <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a>
                    </li>
                    <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-overlay"></div>
    </div>
</div>
</div>
<!-- END: Page Main-->

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Judul Article</th>
            <th>Tag</th>
            <th width="15%" class="text-center">Jumlah Tag</th>
        </tr>
    </thead>
    <tbody>
        @foreach($User as $a)
        <tr>
            <td>{{ $a->name }}</td>
            <td>
                @foreach($a->Datas as $t)
                {{$t->alamat}},
                @endforeach
            </td>
            <td class="text-center">{{ $a->Datas->count() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- BEGIN VENDOR JS-->
<script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/vendors.min.js">
</script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script
    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/materialize-stepper/materialize-stepper.min.js">
</script>

<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/plugins.min.js">
</script>
<script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/search.min.js"></script>
<script
    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/custom/custom-script.min.js">
</script>
<script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/scripts/customizer.min.js">
</script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/scripts/form-wizard.min.js">
</script>
<!-- END PAGE LEVEL JS-->

</html>

@endsection