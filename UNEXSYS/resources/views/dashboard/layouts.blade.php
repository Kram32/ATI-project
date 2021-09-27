<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!--begin::Head-->
    <head><base href="">
                <meta charset="utf-8"/>
        <title>ATI: UNEXSYS | @yield('page_title')</title>
        <meta name="description" content="Updates and statistics"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700">
        <!--end::Fonts-->

                    <!--begin::Page Vendors Styles(used by this page)-->
                            <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
                            <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Page Vendors Styles-->


        <!--begin::Global Theme Styles(used by all pages)-->
                    <link href="assets/css/atistyles.css" rel="stylesheet" type="text/css"/>
                    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
                    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->
                <!--end::Layout Themes-->

        <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>

            </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body id="kt_body"  class="header-fixed header-mobile-fixed page-loading text-size-15">
    <!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<!--begin::Header-->
                <div id="kt_header" class="header flex-column  header-fixed " >
                    <!--begin::Top-->
                    <div class="header-top">
                        <!--begin::Container-->
                        <div class=" container ">
                            <!--begin::Left-->
                            <div class="d-none d-lg-flex align-items-center mr-3">
                                <!--begin::Logo-->
                                <a href="index.html" class="mr-20">
                                    <img alt="Logo" src="assets/media/logos/logo-letter-9.png" class="max-h-35px"/>
                                </a>
                                <!--end::Logo-->

                                <!--begin::Tab Navs(for desktop mode)-->
                                <ul class="header-tabs nav align-self-end font-size-lg" role="tablist">
                                    <li @if(Request::is('userdashboard') || Request::is('editOtherAccountInfo') || Request::is('editCurrentEmployment') || Request::is('editPersonalDetails') ||
                                        Request::is('careerInformation') || Request::is('educationalBackground') || Request::is('eligibility') || Request::is('certifications'))  class="nav-item active"@else class="nav-item" @endif><a href="/userdashboard" class="nav-link py-4 px-6" data-target="#kt_header_tab_1" role="tab">Profile</a></li>
                                    <li @if(Request::is('trainings')) class="nav-item active"@else class="nav-item" @endif><a href="/trainings" class="nav-link py-4 px-6" data-target="#kt_header_tab_2" role="tab">Trainings</a></li> 
                                    <li @if(Request::is('survey')) class="nav-item active"@else class="nav-item" @endif><a href="/survey" class="nav-link py-4 px-6" data-target="#kt_header_tab_2" role="tab">Survey</a></li>
                                    <li @if(Request::is('contactcenter')) class="nav-item active"@else class="nav-item" @endif><a href="/contactcenter" class="nav-link py-4 px-6" data-target="#kt_header_tab_2" role="tab">Contact Center</a></li>
                                </ul>

                                <!--begin::Tab Navs-->
                            </div>
                            <!--end::Left-->

                            <!--begin::Topbar-->
                            <div class="topbar bg-primary">
                                <!--begin::User-->
                                <div class="topbar-item">
                                    <div class="btn btn-icon btn-hover-transparent-white w-lg-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                        <span class="symbol symbol-35 nav-pic">
                                            <span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30 d-none">S</span>
                                            <img src="assets/media/users/100_4.jpg"/>
                                        </span>&nbsp;
                                        
                                        <div class="d-flex flex-column text-left pr-lg-3">
                                            <span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline">Sean</span>
                                            <span class="text-white font-weight-bolder font-size-sm d-none d-md-inline">
                                                <div class="btn-group">
                                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      Edit Profile <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="#">Change Picture</a>
                                                      <a class="dropdown-item" href="#">Logout</a>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>

                                      
                                        
                                    </div>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Top-->
                </div>
                <!--end::Header-->

				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="container d-flex flex-column-xs">
                        <!--begin::Side Card-->
                        <div class="user-card d-flex flex-column flex-row-auto">
                            <!--begin::User Card-->
                            <div id="user_details">
                                <div class="card card-custom gutter-b card-stretch max-width-350" >
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <div id="user_picture">
                                                <img src="assets/media/users/100_4.jpg"/>
                                        </div>
                                        <div id="user_name" class="text-center">
                                            <div class="text-md text-size-20">Employee's Name</div>
                                            <div class="line-height-23">POSITION</div>
                                        </div>
                                        <div id="card_divider" class="line-divider padding-vertical-20"></div>
                                        <div class="d-flex">
                                            <span class="flex-grow-1">Gender:</span>
                                            <span class="flex-grow-1">Male</span>
                                        </div>
                                        <div class="d-flex">
                                            <span class="flex-grow-1">Birthdate:</span>
                                            <span class="flex-grow-1 no-wrap">January 1985</span>
                                        </div>
                                        <div class="d-flex">
                                            <span class="flex-grow-1">Civil Status:</span>
                                            <span class="flex-grow-1">Single</span>
                                        </div>

                                        <div class="d-flex justify-content-space-evenly edit-info">
                                            <a class="btn btn-success font-weight-bolder font-size-h6" href="{{route('editPersonalDetails')}}">Edit Info</a>
                                        </div>
                                    </div>
                                    
                                    <!--end::Body-->
                                </div>
                            </div>
                            <!--end::User Card-->

                            <!--begin::Side Navigation - Account/Career-->
                            <div id="side_nav_account" class="side-nav">
                                <div class="card card-custom gutter-b card-stretch max-width-350" >
                                    <!--begin::Body-->
                                    <div class="card-body card-side-nav">
                                        <ul class="text-md">
                                            <li>Account</li>
                                            <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#account-info">Account Information</a></li>
                                            <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#identification-card">Identification Card</a></li>
                                            <li class="text-md">Career</li>
                                            <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#current-employment">Current Employment</a></li>
                                            <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#career-info">Career Information</a></li>
                                       </ul>
                                    </div>
                                    <!--end::Body-->
                                </div>
                            </div>
                            <!--end::Side Navigation - Account/Career-->

                            <!--begin::Side Navigation - Account/Career-->
                            <div id="side_nav_eligibility" class="side-nav">
                                <div class="card card-custom gutter-b card-stretch max-width-350" >
                                    <!--begin::Body-->
                                    <div class="card-body card-side-nav">
                                        <ul class="text-md">
                                            <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#eligibility">Eligibility</a></li>
                                            <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#certifications">Certifications</a></li>
                                        </ul>

                                    </div>
                                    <!--end::Body-->
                                </div>
                            </div>
                            <!--end::Side Navigation - Account/Career-->
                        </div>
                        <!--end::Side Card-->

                        @yield('content')
                    </div>

                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
                    <!--begin::Container-->
                    <div class=" container  d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2021 &nbsp;&copy;</span>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">MyBusyBee</a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
<!--end::Main-->


    

<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
    <span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
        <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span></div>
<!--end::Scrolltop-->


        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
                "breakpoints": {
                    "sm": 576,
                    "md": 768,
                    "lg": 992,
                    "xl": 1200,
                    "xxl": 1200
                },
                "colors": {
                    "theme": {
                        "base": {
                            "white": "#ffffff",
                            "primary": "#6993FF",
                            "secondary": "#E5EAEE",
                            "success": "#1BC5BD",
                            "info": "#8950FC",
                            "warning": "#FFA800",
                            "danger": "#F64E60",
                            "light": "#F3F6F9",
                            "dark": "#212121"
                        },
                        "light": {
                            "white": "#ffffff",
                            "primary": "#E1E9FF",
                            "secondary": "#ECF0F3",
                            "success": "#C9F7F5",
                            "info": "#EEE5FF",
                            "warning": "#FFF4DE",
                            "danger": "#FFE2E5",
                            "light": "#F3F6F9",
                            "dark": "#D6D6E0"
                        },
                        "inverse": {
                            "white": "#ffffff",
                            "primary": "#ffffff",
                            "secondary": "#212121",
                            "success": "#ffffff",
                            "info": "#ffffff",
                            "warning": "#ffffff",
                            "danger": "#ffffff",
                            "light": "#464E5F",
                            "dark": "#ffffff"
                        }
                    },
                    "gray": {
                        "gray-100": "#F3F6F9",
                        "gray-200": "#ECF0F3",
                        "gray-300": "#E5EAEE",
                        "gray-400": "#D6D6E0",
                        "gray-500": "#B5B5C3",
                        "gray-600": "#80808F",
                        "gray-700": "#464E5F",
                        "gray-800": "#1B283F",
                        "gray-900": "#212121"
                    }
                },
                "font-family": "Poppins"
            };
        </script>
        <!--end::Global Config-->

        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <!--end::Global Theme Bundle-->

        <!--begin::Page Vendors(used by this page)-->
        <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <!--end::Page Vendors-->

        <!--begin::Page Scripts(used by this page)-->
        <script src="assets/js/pages/widgets.js"></script>
        <script src="assets/js/pages/crud/datatables/advanced/multiple-controls.js"></script>
        <!--end::Page Scripts-->

        <script>
            function sidenav() {
                var url = window.location.href;
                if(url.search('userdashboard') > 0) {
                    $('.side-nav').removeClass('d-none');
                }
                else {
                    $('.side-nav').addClass('d-none');
                }
            }
            

            $(document).ready(function(){
                sidenav();
                var date_input=$('input[name="date"]'); 
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                var options={
                    format: 'mm/dd/yy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true
                };
                date_input.datepicker(options);
            });
        </script>

<script>
    
</script>
    </body>
    <!--end::Body-->
</html>