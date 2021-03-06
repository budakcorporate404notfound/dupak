<?php
$page = "seluruhpengajuan";
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

    <style>
        div.ex3 {
            height: 400px;
            overflow: auto;
        }
    </style>

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
                                <li class="breadcrumb-item"><a href="">Histori Pengajuan</a>
                                </li>
                                <li class="breadcrumb-item active"> Data Histori Pengajuan
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
                                <p class="caption mb-0">Histori pengajuan dupak anda dapat dilihat pada table di bawah
                                    ini. anda juga dapat melakukan pemantauan sampai dimana pengajuan dupak anda di
                                    proses oleh
                                    kami. Histori dari pengajuan dupak anda selalu direkam pada menu ini. jika terdapat
                                    kekeliruan pada data dupak anda segera hubungi kami.</p>
                            </div>
                        </div>

                        <!-- Page Length Options -->
                        <div class="row">
                            <div class="col s8">
                                <div class="card">
                                    <div class="card-content">
                                        <h4 class="card-title">Data Histori Pengajuan</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <table id="page-length-option" class="display">
                                                    <thead>
                                                        <tr>
                                                            <th style="font-size:15px;">No</th>
                                                            <th style="font-size:15px;">nama</th>
                                                            <th style="font-size:15px;">tgl pengajuan</th>
                                                            <th style="font-size:15px;">administrasi</th>
                                                            <th style="font-size:15px;">bukti fisik</th>
                                                            <th style="font-size:15px;">detail</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php $no = 0;?>
                                                        @foreach($User as $t)
                                                        @foreach($t->Datas as $a)
                                                        <?php $no++ ;?>
                                                        <tr>
                                                            <td style="font-size:15px;"> {{$no}} </td>
                                                            <td style="font-size:15px;"> {{$t->name}} </td>
                                                            <td style="font-size:15px;">
                                                                {{date('d-m-Y', strtotime($a->created_at))}} </td>

                                                            <td style="font-size:15px;">
                                                                <a href="{{$a->lu_administrasi}}" target="blank"
                                                                    rel="noopener noreferrer"><i
                                                                        class="material-icons small">filter_drama</i></a>

                                                            </td>

                                                            <td style="font-size:15px;">
                                                                <a href="{{$a->lu_buktifisik}}" target="_blank"
                                                                    rel="noopener noreferrer"> <i
                                                                        class="material-icons small">filter_drama</i></a>

                                                            </td>

                                                            <td style="font-size:15px;">

                                                                <a class="purple-text logout-confirms"
                                                                    href="{{url('seluruhpengajuan/check/'.$a->id)}}"><i
                                                                        class="material-icons small ">pageview</i></a>

                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @endforeach

                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th style="font-size:15px;">No</th>
                                                            <th style="font-size:15px;">nama</th>
                                                            <th style="font-size:15px;">tgl pengajuan</th>
                                                            <th style="font-size:15px;">administrasi</th>
                                                            <th style="font-size:15px;">bukti fisik</th>
                                                            <th style="font-size:15px;">detail</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                <div class="col s4">
                                <div class="ex3">
                                    <div class="card">
                                        <div class="card-content">
                                            <h4 class="card-title">Detail Histori Pengajuan Dupak</h4>
                                            <div class="row">
                                                <div class="col s12">

                                                    <!-- ekstra konten dari konten histori -->

                                                    @yield('extras-content')
                                                    <!-- end ekstra konten dari konten histori -->

                                                    </table>
                                                </div>
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
</body>

</html>

@endsection