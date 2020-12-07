<!--begin::Header-->
<div id="kt_header" class="header flex-column header-fixed">
    <!--begin::Top-->
    <div class="header-top">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Left-->
            <div class="d-none d-lg-flex align-items-center mr-3">
                <!--begin::Logo-->
                <a href="{{ route('index') }}" class="mr-20">
                    <img alt="Logo" src="{{ asset('aprore-text.png') }}" class="max-h-35px" />
                </a>
                <!--end::Logo-->
                <!--begin::Tab Navs(for desktop mode)-->
                <ul class="header-tabs nav align-self-end font-size-lg" role="tablist">
                    <!--begin::Item-->
                    <li class="nav-item">
                        <a href="#" class="nav-link py-4 px-6 active" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">Inicio</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="nav-item mr-3">
                        <a href="#" class="nav-link py-4 px-6" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">Reporte</a>
                    </li>
                    <!--end::Item-->
                </ul>
                <!--begin::Tab Navs-->
            </div>
            <!--end::Left-->
            <!--begin::Topbar-->
            <div class="topbar bg-header-aprore">
                <!--begin::User-->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-hover-transparent-white w-sm-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                        <div class="d-flex flex-column text-right pr-sm-3">
                            <span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-sm-inline">Hola</span>
                            <span class="text-white font-weight-bolder font-size-sm d-none d-sm-inline">Ulises</span>
                        </div>
                        <span class="symbol symbol-35">
                            <span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">U</span>
                        </span>
                    </div>
                </div>
                <!--end::User-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Top-->
    <!--begin::Bottom-->
    <div class="header-bottom">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Header Menu Wrapper-->
            <div class="header-navs header-navs-left" id="kt_header_navs">
                <!--begin::Tab Navs(for tablet and mobile modes)-->
                <ul class="header-tabs p-5 p-lg-0 d-flex d-lg-none nav nav-bold nav-tabs" role="tablist">
                    <!--begin::Item-->
                    <li class="nav-item mr-2">
                        <a href="#" class="nav-link btn btn-clean active" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">Inicio</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="nav-item mr-2">
                        <a href="#" class="nav-link btn btn-clean" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">Reporte</a>
                    </li>
                    <!--end::Item-->
                </ul>
                <!--begin::Tab Navs-->
                <!--begin::Tab Content-->
                <div class="tab-content">
                    <!--begin::Tab Pane-->
                    <div class="tab-pane py-5 p-lg-0 show active" id="kt_header_tab_1">
                        <!--begin::Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                            <!--begin::Nav-->
                            <ul class="menu-nav">
                                <li class="menu-item menu-item-active" aria-haspopup="true">
                                    <a href="index.html" class="menu-link">
                                        <span class="menu-text">Encuesta</span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Nav-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--begin::Tab Pane-->
                    <!--begin::Tab Pane-->
                    <div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_2">
                        <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
                            <!--begin::Actions-->
                            <a href="#" class="btn btn-light-success font-weight-bold mr-3 my-2 my-lg-0">Latest Orders</a>
                            <a href="#" class="btn btn-light-primary font-weight-bold my-2 my-lg-0">Customer Service</a>
                            <!--end::Actions-->
                        </div>
                        <div class="d-flex align-items-center">
                            <!--begin::Actions-->
                            <a href="#" class="btn btn-danger font-weight-bold my-2 my-lg-0">Generate Reports</a>
                            <!--end::Actions-->
                        </div>
                    </div>
                    <!--begin::Tab Pane-->
                </div>
                <!--end::Tab Content-->
            </div>
            <!--end::Header Menu Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Bottom-->
</div>
<!--end::Header-->
