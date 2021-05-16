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
    <title>Dashboard Modern | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/chartist-js/chartist-plugin-tooltip.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/themes/vertical-menu-nav-dark-template/materialize.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/themes/vertical-menu-nav-dark-template/style.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/pages/dashboard-modern.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/pages/intro.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/data-tables/css/select.dataTables.min.css">
    <!-- END: VENDOR CSS-->
</head>
<!-- END: Head-->

<body
    class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark preload-transitions 2-columns   "
    data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav
                class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-purple-deep-orange gradient-shadow">
                <div class="nav-wrapper">
                    <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
                        <input class="header-search-input z-depth-2" type="text" name="Search"
                            placeholder="Explore Materialize" data-search="template-list">
                        <ul class="search-list collection display-none"></ul>
                    </div>
                    <ul class="navbar-list right">
                        <li class="dropdown-language"><a class="waves-effect waves-block waves-light translation-button"
                                href="#" data-target="translation-dropdown"><span
                                    class="flag-icon flag-icon-gb"></span></a></li>
                        <li class="hide-on-med-and-down"><a
                                class="waves-effect waves-block waves-light toggle-fullscreen"
                                href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                        <li class="hide-on-large-only search-input-wrapper"><a
                                class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i
                                    class="material-icons">search</i></a></li>
                        <li><a class="waves-effect waves-block waves-light notification-button"
                                href="javascript:void(0);" data-target="notifications-dropdown"><i
                                    class="material-icons">notifications_none<small
                                        class="notification-badge">5</small></i></a></li>

                        @if(Auth::user()->image)
                        <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                                data-target="profile-dropdown"><span class="avatar-status avatar-online"><img
                                        src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="profile_image"
                                        style="width: 30px;height: 30px; padding: 0px; margin: 0px; "><i></i></span></a>
                        </li>
                        @endif

                        <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#"
                                data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a>
                        </li>

                    </ul>

                    {{-- <div class="card-body">
                        <form action="{{url('/home')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image">
                    <input type="submit" value="Upload">
                    </form>
                </div> --}}

                {{-- @if(Auth::user()->image)
<img class="image rounded-circle" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="profile_image"
                style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
                @endif --}}

                <!-- translation-button-->
                <ul class="dropdown-content" id="translation-dropdown">
                    <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="en"><i
                                class="flag-icon flag-icon-gb"></i> English</a></li>
                    <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="fr"><i
                                class="flag-icon flag-icon-fr"></i> French</a></li>
                    <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="pt"><i
                                class="flag-icon flag-icon-pt"></i> Portuguese</a></li>
                    <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="de"><i
                                class="flag-icon flag-icon-de"></i> German</a></li>
                </ul>
                <!-- notifications-dropdown-->
                <ul class="dropdown-content" id="notifications-dropdown">
                    <li>
                        <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                    </li>
                    <li class="divider"></li>
                    <li><a class="black-text" href="#!"><span
                                class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new
                            order has been placed!</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours
                            ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span
                                class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days
                            ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span
                                class="material-icons icon-bg-circle teal small">settings</span> Settings
                            updated</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days
                            ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span
                                class="material-icons icon-bg-circle deep-orange small">today</span> Director
                            meeting started</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days
                            ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span
                                class="material-icons icon-bg-circle amber small">trending_up</span> Generate
                            monthly report</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week
                            ago</time>
                    </li>
                </ul>
                <!-- profile-dropdown-->
                <ul class="dropdown-content" id="profile-dropdown">
                    <li><a class="grey-text text-darken-1" href="{{url('/profile')}}"><i
                                class="material-icons">person_outline</i> Profile</a></li>
                    <li><a class="grey-text text-darken-1" href="app-chat.html"><i
                                class="material-icons">chat_bubble_outline</i> Chat</a></li>
                    <li><a class="grey-text text-darken-1" href="page-faq.html"><i
                                class="material-icons">help_outline</i> Help</a></li>
                    <li class="divider"></li>
                    <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i
                                class="material-icons">lock_outline</i> Lock</a></li>
                    <li><a class="grey-text logout-confirm" href="{{route('logout')}}"><i
                                class="material-icons">keyboard_tab</i> Logout</a>
                        <!--
                                    <form id="logout-form"  method="POST" class="d-none">
                                        @csrf
                                    </form>
                        -->
                    </li>

                </ul>

        </div>
        <nav class="display-none search-sm">
            <div class="nav-wrapper">
                <form id="navbarForm">
                    <div class="input-field search-input-sm">
                        <input class="search-box-sm mb-0" type="search" required="" id="search"
                            placeholder="Explore Materialize" data-search="template-list">
                        <label class="label-icon" for="search"><i
                                class="material-icons search-sm-icon">search</i></label><i
                            class="material-icons search-sm-close">close</i>
                        <ul class="search-list collection search-list-sm display-none"></ul>
                    </div>
                </form>
            </div>
        </nav>
        </nav>
        </div>
    </header>
    <!-- END: Header-->
    <ul class="display-none" id="default-search-main">
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">FILES</h6>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img
                                src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/icon/pdf-image.png"
                                width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Two new item
                                submitted</span><small class="grey-text">Marketing Manager</small></div>
                    </div>
                    <div class="status"><small class="grey-text">17kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img
                                src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/icon/doc-image.png"
                                width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file
                                Generator</span><small class="grey-text">FontEnd Developer</small></div>
                    </div>
                    <div class="status"><small class="grey-text">550kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img
                                src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/icon/xls-image.png"
                                width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File
                                Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
                    </div>
                    <div class="status"><small class="grey-text">20kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img
                                src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/icon/jpg-image.png"
                                width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna
                                Strong</span><small class="grey-text">Web Designer</small></div>
                    </div>
                    <div class="status"><small class="grey-text">37kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">MEMBERS</h6>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle"
                                src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-7.png"
                                width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small
                                class="grey-text">UI designer</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle"
                                src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-8.png"
                                width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Michal
                                Clark</span><small class="grey-text">FontEnd Developer</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle"
                                src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-10.png"
                                width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Milena
                                Gibson</span><small class="grey-text">Digital Marketing</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle"
                                src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-12.png"
                                width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna
                                Strong</span><small class="grey-text">Web Designer</small></div>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">PAGES</h6>
            </a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
        <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span
                    class="material-icons">error_outline</span><span class="member-info">No results found.</span></a>
        </li>
    </ul>

    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img
                        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/logo/materialize-logo.png"
                        alt="materialize logo" /><span class="logo-text hide-on-med-and-down">Dupak</span></a><a
                    class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
            data-menu="menu-navigation" data-collapsible="menu-accordion">
            <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">settings_input_svideo</i><span class="menu-title"
                        data-i18n="Dashboard">Dashboard</span><span
                        class="badge badge pill orange float-right mr-10">3</span></a>
                <div class="collapsible-body">
                    <ul id="mainnav" class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li class="bold active"><a class="<?php if ($page == "home") echo "active"; ?>"
                                href="{{url('/home')}}"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Modern">Modern</span></a>
                        </li>
                        <li class="bold"><a class="waves-effect waves-cyan" href="dashboard-ecommerce.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                        <li><a href="dashboard-analytics.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li class="bold"><a class="<?php if ($page == "pengajuandupak") echo "active"; ?>"
                                href="{{url('/pengajuandupak')}}"><i class="material-icons">settings_ethernet</i><span
                                    class="menu-title" data-i18n="Form Wizard">Pengajuan Dupak</span></a>
                        </li>

                        <li class="bold"><a class="<?php if ($page == "historipengajuan") echo "active"; ?>"
                                href="{{url('/historipengajuan')}}"><i class="material-icons">grid_on</i><span
                                    class="menu-title" data-i18n="Data Tables">Histori
                                    Pengajuan</span></a>
                        </li>

                        <li class="bold"><a class="<?php if ($page == "pengecekanberkas") echo "active"; ?>"
                                href="{{url('/pengecekanberkas')}}"><i class="material-icons">settings_ethernet</i><span
                                    class="menu-title" data-i18n="Form Wizard">Pengecekan Berkas</span></a>
                        </li>
                    </ul>
                </div>

            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">dvr</i><span class="menu-title"
                        data-i18n="Templates">Templates</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Vertical">Vertical</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="../vertical-modern-menu-template/"><i
                                                class="material-icons">radio_button_unchecked</i><span
                                                data-i18n="Modern Menu">Modern Menu</span></a>
                                    </li>
                                    <li><a href="../vertical-menu-nav-dark-template/"><i
                                                class="material-icons">radio_button_unchecked</i><span
                                                data-i18n="Navbar Dark">Navbar Dark</span></a>
                                    </li>
                                    <li><a href="../vertical-gradient-menu-template/"><i
                                                class="material-icons">radio_button_unchecked</i><span
                                                data-i18n="Gradient Menu">Gradient Menu</span></a>
                                    </li>
                                    <li><a href="../vertical-dark-menu-template/"><i
                                                class="material-icons">radio_button_unchecked</i><span
                                                data-i18n="Dark Menu">Dark Menu</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Horizontal">Horizontal</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="../horizontal-menu-template/"><i
                                                class="material-icons">radio_button_unchecked</i><span
                                                data-i18n="Horizontal Menu">Horizontal Menu</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Applications</a><i
                    class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="app-email.html"><i
                        class="material-icons">mail_outline</i><span class="menu-title"
                        data-i18n="Mail">Mail</span><span
                        class="badge new badge pill pink accent-2 float-right mr-2">5</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="app-chat.html"><i
                        class="material-icons">chat_bubble_outline</i><span class="menu-title"
                        data-i18n="Chat">Chat</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="app-todo.html"><i
                        class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">ToDo</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="app-kanban.html"><i
                        class="material-icons">format_list_bulleted</i><span class="menu-title"
                        data-i18n="Kanban">Kanban</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="app-file-manager.html"><i
                        class="material-icons">content_paste</i><span class="menu-title" data-i18n="File Manager">File
                        manager</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="app-contacts.html"><i
                        class="material-icons">import_contacts</i><span class="menu-title"
                        data-i18n="Contacts">Contacts</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="app-calendar.html"><i
                        class="material-icons">today</i><span class="menu-title"
                        data-i18n="Calendar">Calendar</span></a>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">receipt</i><span class="menu-title"
                        data-i18n="Invoice">Invoice</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="app-invoice-list.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Invoice List">Invoice List</span></a>
                        </li>
                        <li><a href="app-invoice-view.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Invoice View">Invoice View</span></a>
                        </li>
                        <li><a href="app-invoice-edit.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Invoice Edit">Invoice Edit</span></a>
                        </li>
                        <li><a href="app-invoice-add.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Invoice Add">Invoice Add</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">add_shopping_cart</i><span class="menu-title"
                        data-i18n="eCommerce">eCommerce</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="eCommerce-products-page.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Products Page">Products Page</span></a>
                        </li>
                        <li><a href="eCommerce-pricing.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Pricing">Pricing</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Pages </a><i
                    class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="user-profile-page.html"><i
                        class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">User
                        Profile</span></a>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">content_paste</i><span class="menu-title"
                        data-i18n="Pages">Pages</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="page-contact.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Contact">Contact</span></a>
                        </li>
                        <li><a href="page-blog-list.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Blog">Blog</span></a>
                        </li>
                        <li><a href="page-search.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Search">Search</span></a>
                        </li>
                        <li><a href="page-knowledge.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Knowledge">Knowledge</span></a>
                        </li>
                        <li><a href="page-timeline.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Timeline">Timeline</span></a>
                        </li>
                        <li><a href="page-faq.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="FAQs">FAQs</span></a>
                        </li>
                        <li><a href="page-account-settings.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Account Settings">Account Settings</span></a>
                        </li>
                        <li><a href="page-blank.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Page Blank">Page Blank</span></a>
                        </li>
                        <li><a href="page-collapse.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Page Collapse">Page Collapse</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">crop_original</i><span class="menu-title"
                        data-i18n="Medias">Medias</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="media-gallery-page.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Gallery Page">Gallery Page</span></a>
                        </li>
                        <li><a href="media-hover-effects.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Media Hover Effects">Media Hover Effects</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">face</i><span class="menu-title" data-i18n="User">User</span><span
                        class="badge badge pill purple float-right mr-10">3</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="page-users-list.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="List">List</span></a>
                        </li>
                        <li><a href="page-users-view.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="View">View</span></a>
                        </li>
                        <li><a href="page-users-edit.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Edit">Edit</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">lock_open</i><span class="menu-title"
                        data-i18n="Authentication">Authentication</span><span
                        class="badge badge pill purple float-right mr-10">10</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="user-login.html" target="_blank"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Login">Login</span></a>
                        </li>
                        <li><a href="user-register.html" target="_blank"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Register">Register</span></a>
                        </li>
                        <li><a href="user-forgot-password.html" target="_blank"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Forgot Password">Forgot Password</span></a>
                        </li>
                        <li><a href="user-lock-screen.html" target="_blank"><i
                                    class="material-icons">radio_button_unchecked</i><span data-i18n="Lock Screen">Lock
                                    Screen</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">filter_tilt_shift</i><span class="menu-title"
                        data-i18n="Misc">Misc</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="page-404.html" target="_blank"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="404">404</span></a>
                        </li>
                        <li><a href="page-maintenance.html" target="_blank"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Page Maintenanace">Page Maintenanace</span></a>
                        </li>
                        <li><a href="page-500.html" target="_blank"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="500">500</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">User Interface </a><i
                    class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">cast</i><span class="menu-title" data-i18n="Cards">Cards</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="cards-basic.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Cards">Cards</span></a>
                        </li>
                        <li><a href="cards-advance.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Cards Advance">Cards Advance</span></a>
                        </li>
                        <li><a href="cards-extended.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Cards Extended">Cards Extended</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">invert_colors</i><span class="menu-title" data-i18n="CSS">CSS</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="css-typography.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Typograpy">Typograpy</span></a>
                        </li>
                        <li><a href="css-color.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Color">Color</span></a>
                        </li>
                        <li><a href="css-grid.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Grid">Grid</span></a>
                        </li>
                        <li><a href="css-helpers.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Helpers">Helpers</span></a>
                        </li>
                        <li><a href="css-media.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Media">Media</span></a>
                        </li>
                        <li><a href="css-pulse.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Pulse">Pulse</span></a>
                        </li>
                        <li><a href="css-sass.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Sass">Sass</span></a>
                        </li>
                        <li><a href="css-shadow.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Shadow">Shadow</span></a>
                        </li>
                        <li><a href="css-animations.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Animations">Animations</span></a>
                        </li>
                        <li><a href="css-transitions.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Transitions">Transitions</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Basic UI">Basic
                        UI</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Buttons">Buttons</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="ui-basic-buttons.html"><i
                                                class="material-icons">radio_button_unchecked</i><span
                                                data-i18n="Basic">Basic</span></a>
                                    </li>
                                    <li><a href="ui-extended-buttons.html"><i
                                                class="material-icons">radio_button_unchecked</i><span
                                                data-i18n="Extended">Extended</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="ui-icons.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Icons">Icons</span></a>
                        </li>
                        <li><a href="ui-alerts.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Alerts">Alerts</span></a>
                        </li>
                        <li><a href="ui-badges.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Badges">Badges</span></a>
                        </li>
                        <li><a href="ui-breadcrumbs.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                        </li>
                        <li><a href="ui-chips.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Chips">Chips</span></a>
                        </li>
                        <li><a href="ui-collections.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Collections">Collections</span></a>
                        </li>
                        <li><a href="ui-navbar.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Navbar">Navbar</span></a>
                        </li>
                        <li><a href="ui-pagination.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Pagination">Pagination</span></a>
                        </li>
                        <li><a href="ui-preloader.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Preloader">Preloader</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">settings_brightness</i><span class="menu-title"
                        data-i18n="Advanced UI">Advanced UI</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="advance-ui-carousel.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Carousel">Carousel</span></a>
                        </li>
                        <li><a href="advance-ui-collapsibles.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Collapsibles">Collapsibles</span></a>
                        </li>
                        <li><a href="advance-ui-toasts.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Toasts">Toasts</span></a>
                        </li>
                        <li><a href="advance-ui-tooltip.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Tooltip">Tooltip</span></a>
                        </li>
                        <li><a href="advance-ui-dropdown.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Dropdown">Dropdown</span></a>
                        </li>
                        <li><a href="advance-ui-feature-discovery.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Discovery">Discovery</span></a>
                        </li>
                        <li><a href="advance-ui-media.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Media">Media</span></a>
                        </li>
                        <li><a href="advance-ui-modals.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Modals">Modals</span></a>
                        </li>
                        <li><a href="advance-ui-scrollspy.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Scrollspy">Scrollspy</span></a>
                        </li>
                        <li><a href="advance-ui-tabs.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Tabs">Tabs</span></a>
                        </li>
                        <li><a href="advance-ui-waves.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Waves">Waves</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">add_to_queue</i><span class="menu-title"
                        data-i18n="Extra Components">Extra Components</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="extra-components-range-slider.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Range Slider">Range Slider</span></a>
                        </li>
                        <li><a href="extra-components-sweetalert.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Sweetalert">Sweetalert</span></a>
                        </li>
                        <li><a href="extra-components-nestable.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Nestable">Nestable</span></a>
                        </li>
                        <li><a href="extra-components-treeview.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Treeview">Treeview</span></a>
                        </li>
                        <li><a href="extra-components-ratings.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Ratings">Ratings</span></a>
                        </li>
                        <li><a href="extra-components-tour.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Tour">Tour</span></a>
                        </li>
                        <li><a href="extra-components-i18n.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="i18n">i18n</span></a>
                        </li>
                        <li><a href="extra-components-highlight.html"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Highlight">Highlight</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Tables &amp; Forms </a><i
                    class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="table-basic.html"><i
                        class="material-icons">border_all</i><span class="menu-title" data-i18n="Basic Tables">Basic
                        Tables</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="table-data-table.html"><i
                        class="material-icons">grid_on</i><span class="menu-title" data-i18n="Data Tables">Data
                        Tables</span></a>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">chrome_reader_mode</i><span class="menu-title"
                        data-i18n="Forms">Forms</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="form-elements.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Form Elements">Form Elements</span></a>
                        </li>
                        <li><a href="form-select2.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Form Select2">Form Select2</span></a>
                        </li>
                        <li><a href="form-validation.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Form Validation">Form Validation</span></a>
                        </li>
                        <li><a href="form-masks.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Form Masks">Form Masks</span></a>
                        </li>
                        <li><a href="form-editor.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Form Editor">Form Editor</span></a>
                        </li>
                        <li><a href="form-file-uploads.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="File Uploads">File Uploads</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="form-layouts.html"><i
                        class="material-icons">image_aspect_ratio</i><span class="menu-title"
                        data-i18n="Form Layouts">Form Layouts</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="form-wizard.html"><i
                        class="material-icons">settings_ethernet</i><span class="menu-title"
                        data-i18n="Form Wizard">Form Wizard</span></a>
            </li>

            <li class=""><a class="waves-effect waves-cyan" href="{{url('/data')}}"><i
                        class="material-icons">settings_ethernet</i><span class="menu-title"
                        data-i18n="Form Wizard">Pengajuan Dupak</span></a>
            </li>

            <li class=""><a class="waves-effect waves-cyan" href="{{url('/data')}}"><i
                        class="material-icons">grid_on</i><span class="menu-title" data-i18n="Data Tables">Histori
                        Pengajuan</span></a>
            </li>

            <script>
                $(".sidenav li").on("click", function() {
                    $(".sidenav li").removeClass("active");
                    $(this).addClass("active");
                });
            </script>

            <li class="navigation-header"><a class="navigation-header-text">Charts</a><i
                    class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">pie_chart_outlined</i><span class="menu-title"
                        data-i18n="Chart">Chart</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="charts-chartjs.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="ChartJS">ChartJS</span></a>
                        </li>
                        <li><a href="charts-chartist.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Chartist">Chartist</span></a>
                        </li>
                        <li><a href="charts-sparklines.html"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Sparkline Charts">Sparkline Charts</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Misc </a><i
                    class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Menu levels">Menu
                        levels</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Second level">Second level</span></a>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Second level child">Second level child</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="JavaScript:void(0)"><i
                                                class="material-icons">radio_button_unchecked</i><span
                                                data-i18n="Third level">Third level</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan "
                    href="https://pixinvent.com/materialize-material-design-admin-template/documentation/index.html"
                    target="_blank"><i class="material-icons">import_contacts</i><span class="menu-title"
                        data-i18n="Documentation">Documentation</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.ticksy.com/" target="_blank"><i
                        class="material-icons">help_outline</i><span class="menu-title"
                        data-i18n="Support">Support</span></a>
            </li>
        </ul>
        <div class="navigation-background"></div><a
            class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
            href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->

    @yield('konten')

    <!-- END: Page Main-->

    <!-- Theme Customizer -->

    <a href="#" data-target="theme-cutomizer-out"
        class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"><i
            class="material-icons">settings</i></a>

    <div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
        <div class="col s12">
            <a class="sidenav-close" href="#!"><i class="material-icons">close</i></a>
            <h5 class="theme-cutomizer-title">Theme Customizer</h5>
            <p class="medium-small">Customize & Preview in Real Time</p>
            <div class="menu-options">
                <h6 class="mt-6">Menu Options</h6>
                <hr class="customize-devider" />
                <div class="menu-options-form row">
                    <div class="input-field col s12 menu-color mb-0">
                        <p class="mt-0">Menu Color</p>
                        <div class="gradient-color center-align">
                            <span class="menu-color-option gradient-45deg-indigo-blue"
                                data-color="gradient-45deg-indigo-blue"></span>
                            <span class="menu-color-option gradient-45deg-purple-deep-orange"
                                data-color="gradient-45deg-purple-deep-orange"></span>
                            <span class="menu-color-option gradient-45deg-light-blue-cyan"
                                data-color="gradient-45deg-light-blue-cyan"></span>
                            <span class="menu-color-option gradient-45deg-purple-amber"
                                data-color="gradient-45deg-purple-amber"></span>
                            <span class="menu-color-option gradient-45deg-purple-deep-purple"
                                data-color="gradient-45deg-purple-deep-purple"></span>
                            <span class="menu-color-option gradient-45deg-deep-orange-orange"
                                data-color="gradient-45deg-deep-orange-orange"></span>
                            <span class="menu-color-option gradient-45deg-green-teal"
                                data-color="gradient-45deg-green-teal"></span>
                            <span class="menu-color-option gradient-45deg-indigo-light-blue"
                                data-color="gradient-45deg-indigo-light-blue"></span>
                            <span class="menu-color-option gradient-45deg-red-pink"
                                data-color="gradient-45deg-red-pink"></span>
                        </div>
                        <div class="solid-color center-align">
                            <span class="menu-color-option red" data-color="red"></span>
                            <span class="menu-color-option purple" data-color="purple"></span>
                            <span class="menu-color-option pink" data-color="pink"></span>
                            <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                            <span class="menu-color-option cyan" data-color="cyan"></span>
                            <span class="menu-color-option teal" data-color="teal"></span>
                            <span class="menu-color-option light-blue" data-color="light-blue"></span>
                            <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                            <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
                        </div>
                    </div>
                    <div class="input-field col s12 menu-bg-color mb-0">
                        <p class="mt-0">Menu Background Color</p>
                        <div class="gradient-color center-align">
                            <span class="menu-bg-color-option gradient-45deg-indigo-blue"
                                data-color="gradient-45deg-indigo-blue"></span>
                            <span class="menu-bg-color-option gradient-45deg-purple-deep-orange"
                                data-color="gradient-45deg-purple-deep-orange"></span>
                            <span class="menu-bg-color-option gradient-45deg-light-blue-cyan"
                                data-color="gradient-45deg-light-blue-cyan"></span>
                            <span class="menu-bg-color-option gradient-45deg-purple-amber"
                                data-color="gradient-45deg-purple-amber"></span>
                            <span class="menu-bg-color-option gradient-45deg-purple-deep-purple"
                                data-color="gradient-45deg-purple-deep-purple"></span>
                            <span class="menu-bg-color-option gradient-45deg-deep-orange-orange"
                                data-color="gradient-45deg-deep-orange-orange"></span>
                            <span class="menu-bg-color-option gradient-45deg-green-teal"
                                data-color="gradient-45deg-green-teal"></span>
                            <span class="menu-bg-color-option gradient-45deg-indigo-light-blue"
                                data-color="gradient-45deg-indigo-light-blue"></span>
                            <span class="menu-bg-color-option gradient-45deg-red-pink"
                                data-color="gradient-45deg-red-pink"></span>
                        </div>
                        <div class="solid-color center-align">
                            <span class="menu-bg-color-option red" data-color="red"></span>
                            <span class="menu-bg-color-option purple" data-color="purple"></span>
                            <span class="menu-bg-color-option pink" data-color="pink"></span>
                            <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                            <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                            <span class="menu-bg-color-option teal" data-color="teal"></span>
                            <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                            <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                            <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            Menu Dark
                            <label class="float-right"><input class="menu-dark-checkbox" type="checkbox" /> <span
                                    class="lever ml-0"></span></label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            Menu Collapsed
                            <label class="float-right"><input class="menu-collapsed-checkbox" type="checkbox" /> <span
                                    class="lever ml-0"></span></label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            <p class="mt-0">Menu Selection</p>
                            <label>
                                <input class="menu-selection-radio with-gap" value="sidenav-active-square"
                                    name="menu-selection" type="radio" />
                                <span>Square</span>
                            </label>
                            <label>
                                <input class="menu-selection-radio with-gap" value="sidenav-active-rounded"
                                    name="menu-selection" type="radio" />
                                <span>Rounded</span>
                            </label>
                            <label>
                                <input class="menu-selection-radio with-gap" value="" name="menu-selection"
                                    type="radio" />
                                <span>Normal</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-6">Navbar Options</h6>
            <hr class="customize-devider" />
            <div class="navbar-options row">
                <div class="input-field col s12 navbar-color mb-0">
                    <p class="mt-0">Navbar Color</p>
                    <div class="gradient-color center-align">
                        <span class="navbar-color-option gradient-45deg-indigo-blue"
                            data-color="gradient-45deg-indigo-blue"></span>
                        <span class="navbar-color-option gradient-45deg-purple-deep-orange"
                            data-color="gradient-45deg-purple-deep-orange"></span>
                        <span class="navbar-color-option gradient-45deg-light-blue-cyan"
                            data-color="gradient-45deg-light-blue-cyan"></span>
                        <span class="navbar-color-option gradient-45deg-purple-amber"
                            data-color="gradient-45deg-purple-amber"></span>
                        <span class="navbar-color-option gradient-45deg-purple-deep-purple"
                            data-color="gradient-45deg-purple-deep-purple"></span>
                        <span class="navbar-color-option gradient-45deg-deep-orange-orange"
                            data-color="gradient-45deg-deep-orange-orange"></span>
                        <span class="navbar-color-option gradient-45deg-green-teal"
                            data-color="gradient-45deg-green-teal"></span>
                        <span class="navbar-color-option gradient-45deg-indigo-light-blue"
                            data-color="gradient-45deg-indigo-light-blue"></span>
                        <span class="navbar-color-option gradient-45deg-red-pink"
                            data-color="gradient-45deg-red-pink"></span>
                    </div>
                    <div class="solid-color center-align">
                        <span class="navbar-color-option red" data-color="red"></span>
                        <span class="navbar-color-option purple" data-color="purple"></span>
                        <span class="navbar-color-option pink" data-color="pink"></span>
                        <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
                        <span class="navbar-color-option cyan" data-color="cyan"></span>
                        <span class="navbar-color-option teal" data-color="teal"></span>
                        <span class="navbar-color-option light-blue" data-color="light-blue"></span>
                        <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
                        <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Navbar Dark
                        <label class="float-right"><input class="navbar-dark-checkbox" type="checkbox" /> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Navbar Fixed
                        <label class="float-right"><input class="navbar-fixed-checkbox" type="checkbox" checked /> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>
            </div>
            <h6 class="mt-6">Footer Options</h6>
            <hr class="customize-devider" />
            <div class="navbar-options row">
                <div class="input-field col s12">
                    <div class="switch">
                        Footer Dark
                        <label class="float-right"><input class="footer-dark-checkbox" type="checkbox" /> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Footer Fixed
                        <label class="float-right"><input class="footer-fixed-checkbox" type="checkbox" /> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Theme Customizer -->

    {{-- <a href="https://1.envato.market/materialize_admin" target="_blank"
        class="btn btn-buy-now gradient-45deg-indigo-purple gradient-shadow white-text tooltipped buy-now-animated tada"
        data-position="left" data-tooltip="Buy Now!"><i class="material-icons">add_shopping_cart</i></a> --}}

    <!-- BEGIN: Footer-->

    <footer
        class="page-footer footer footer-static footer-dark gradient-45deg-purple-deep-orange gradient-shadow navbar-border navbar-shadow">
        <div class="footer-copyright">
            <div class="container"><span>&copy; 2020 <a
                        href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
                        target="_blank">PIXINVENT</a> All rights reserved.</span><span
                    class="right hide-on-small-only">Design and Developed by <a
                        href="https://pixinvent.com/">PIXINVENT</a></span></div>
        </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/vendors.min.js">
    </script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/chartjs/chart.min.js">
    </script>
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/chartist-js/chartist.min.js">
    </script>
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/chartist-js/chartist-plugin-tooltip.js">
    </script>
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js">
    </script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/plugins.min.js">
    </script>
    <script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/search.min.js"></script>
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/custom/custom-script.min.js">
    </script>
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/scripts/customizer.min.js">
    </script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/scripts/dashboard-modern.js">
    </script>
    {{-- <script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/scripts/intro.min.js">
    </script> --}}
    <!-- END PAGE LEVEL JS-->

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="https://pixinvent.com/materialize-material-design-admin-template//app-assets/js/vendors.min.js">
    </script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template//app-assets/vendors/materialize-stepper/materialize-stepper.min.js">
    </script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="https://pixinvent.com/materialize-material-design-admin-template//app-assets/js/plugins.min.js">
    </script>
    <script src="https://pixinvent.com/materialize-material-design-admin-template//app-assets/js/search.min.js">
    </script>
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template//app-assets/js/custom/custom-script.min.js">
    </script>
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template//app-assets/js/scripts/customizer.min.js">
    </script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template//app-assets/js/scripts/form-wizard.min.js">
    </script>
    <!-- END PAGE LEVEL JS-->

    <!-- BEGIN PAGE VENDOR JS-->
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/data-tables/js/jquery.dataTables.min.js">
    </script>
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js">
    </script>
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/data-tables/js/dataTables.select.min.js">
    </script>
    <!-- END PAGE VENDOR JS-->
    <script
        src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/scripts/data-tables.min.js">
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $('.logout-confirm').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Apakah kamu yakin',
                text: 'Ingin keluar dari aplikasi dupak online ?',
                icon: 'info',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
    </script>

     <script>
            $(document).ready(function () {
                $("#modelName").on("show.bs.modal", function (e) {
                    var id = $(e.relatedTarget).data('target-id');
                    $('#pass_id').val(id);
                });
            });

</script>

</body>

</html>