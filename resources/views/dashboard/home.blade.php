@extends('layouts.master')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
       
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-lg-column py-3 py-lg-6">
                <div class="page-title d-flex align-items-center gap-1 me-3" data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}" >
                    <span class="text-gray-900 fw-bolder fs-2x">Account</span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-base ms-3">
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                            <a href="{{ route('home') }}" class="text-gray-700 text-hover-primary">
                                <i class="ki-duotone ki-home fs-3 text-gray-400 ms-2"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n2"></i>
                        </li>
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Account</li>
                        <li class="breadcrumb-item">
                            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n2"></i>
                        </li>
                        <li class="breadcrumb-item text-gray-500">Overview</li>
                    </ul>
                </div>

                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 active" href="index.htm.html?page=index"> Overview </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5" href="index-1.htm?page=account/settings"> Settings </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5" href="index.htm-2.html?page=account/security"> Security </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5" href="index.htm-3.html?page=account/billing"> Billing </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5" href="index-2.htm?page=account/statements"> Statements </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5" href="index.htm-4.html?page=account/referrals"> Referrals </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5" href="index.htm-5.html?page=account/api-keys"> API Keys </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5" href="index.htm-6.html?page=account/logs"> Logs </a>
                    </li>
                </ul>
                <div class="app-toolbar-container-separator separator d-none d-lg-flex"></div>
            </div>
        </div>
        <!--end::Toolbar-->
    
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="row gy-5 gx-xl-10">
                        <div class="col-xxl-4 mb-5 mb-xl-10">
                            <div class="card card-flush h-xl-100">
                                <div class="card-header py-7">
                                    <div class="m-0">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">35,568</span>
                                            <span class="badge badge-light-danger fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-danger ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                8.02%
                                            </span>
                                        </div>
                                        <span class="fs-6 fw-semibold text-gray-400">Organic Sessions</span>
                                    </div>
                                    <div class="card-toolbar">
                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1"><i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i></i>
                                        </button>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                    Quick Actions
                                                </div>
                                            </div>
                                            <div class="separator mb-3 opacity-75"></div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Ticket
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Customer
                                                </a>
                                            </div>
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Admin Group
                                                        </a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Staff Group
                                                        </a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Member Group
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Contact
                                                </a>
                                            </div>
                                            <div class="separator mt-3 opacity-75"></div>
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">
                                                        Generate Reports
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0 pb-1">
                                    <div id="kt_charts_widget_27" class="min-h-auto"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 mb-5 mb-xl-10">
                            <div class="card card-flush h-xl-100">
                                <div class="card-header py-7">
                                    <div class="m-0">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">2,579</span>
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                2.2%
                                            </span>
                                        </div>
                                        <span class="fs-6 fw-semibold text-gray-400">Domain External Links</span>
                                    </div>
                                    <div class="card-toolbar">
                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1"><i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i></i>
                                        </button>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                    Quick Actions
                                                </div>
                                            </div>
                                            <div class="separator mb-3 opacity-75"></div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Ticket
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Customer
                                                </a>
                                            </div>
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Admin Group
                                                        </a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Staff Group
                                                        </a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Member Group
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Contact
                                                </a>
                                            </div>
                                            <div class="separator mt-3 opacity-75"></div>
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">
                                                        Generate Reports
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-end ps-4 pe-0 pb-4">
                                    <div id="kt_charts_widget_28" class="h-300px w-100 min-h-auto"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 mb-5 mb-xl-10">
                            <div class="card card-flush h-xl-100">
                                <div class="card-header py-7">
                                    <div class="m-0">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">5,037</span>
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                2.2%
                                            </span>
                                        </div>
                                        <span class="fs-6 fw-semibold text-gray-400">Visits by Social Networks</span>
                                    </div>
                                    <div class="card-toolbar">
                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1"><i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i></i>
                                        </button>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                    Quick Actions
                                                </div>
                                            </div>
                                            <div class="separator mb-3 opacity-75"></div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Ticket
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Customer
                                                </a>
                                            </div>
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Admin Group
                                                        </a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Staff Group
                                                        </a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Member Group
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Contact
                                                </a>
                                            </div>
                                            <div class="separator mt-3 opacity-75"></div>
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">
                                                        Generate Reports
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body card-body d-flex justify-content-between flex-column pt-3">
                                    <div class="d-flex flex-stack">
                                        <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="me-4 w-30px" style="border-radius: 4px;" alt="" />
                                        <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                            <div class="me-5">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Dribbble</a>
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                                <div class="m-0">
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                        2.6%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed my-3"></div>
                                    <div class="d-flex flex-stack">
                                        <img src="assets/media/svg/brand-logos/linkedin-1.svg" class="me-4 w-30px" style="border-radius: 4px;" alt="" />
                                        <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                            <div class="me-5">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Linked In</a>
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-gray-800 fw-bold fs-4 me-3">1,088</span>
                                                <div class="m-0">
                                                    <span class="badge badge-light-danger fs-base">
                                                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                        0.4%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="separator separator-dashed my-3"></div>
                                    <div class="d-flex flex-stack">
                                        <img src="assets/media/svg/brand-logos/slack-icon.svg" class="me-4 w-30px" style="border-radius: 4px;" alt="" />
                                        <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                            <div class="me-5">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Slack</a>
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                                <div class="m-0">
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                        0.2%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="separator separator-dashed my-3"></div>
                                    <div class="d-flex flex-stack">
                                        <img src="assets/media/svg/brand-logos/youtube-3.svg" class="me-4 w-30px" style="border-radius: 4px;" alt="" />
                                        <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                            <div class="me-5">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-gray-800 fw-bold fs-4 me-3">978</span>
                                                <div class="m-0">
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                        4.1%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="separator separator-dashed my-3"></div>
                                    <div class="d-flex flex-stack">
                                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="me-4 w-30px" style="border-radius: 4px;" alt="" />
                                        <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                            <div class="me-5">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-gray-800 fw-bold fs-4 me-3">1,458</span>
                                                <div class="m-0">
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                        8.3%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-5 g-xl-10">
                        <div class="col-xxl-4 mb-xxl-10">
                            <div class="card card-flush h-md-100">
                                <div class="card-header py-7">
                                    <div class="m-0">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">0.37%</span>
                                            <span class="badge badge-light-danger fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-danger ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                8.02%
                                            </span>
                                        </div>
                                        <span class="fs-6 fw-semibold text-gray-400">Online store convertion rate</span>
                                    </div>
                                    <div class="card-toolbar">
                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1"><i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i></i>
                                        </button>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                    Quick Actions
                                                </div>
                                            </div>
                                            <div class="separator mb-3 opacity-75"></div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Ticket
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Customer
                                                </a>
                                            </div>
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Admin Group
                                                        </a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Staff Group
                                                        </a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Member Group
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Contact
                                                </a>
                                            </div>

                                            <div class="separator mt-3 opacity-75"></div>
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">
                                                        Generate Reports
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div class="mb-0">
                                        <div class="d-flex flex-stack">
                                            <div class="d-flex align-items-center me-5">
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-magnifier fs-3 text-gray-600"><i class="path1"></i><i class="path2"></i></i>
                                                    </span>
                                                </div>
                                                <div class="me-5">
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Search Retargeting</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-gray-800 fw-bold fs-6 me-3">0.24%</span>
                                                <div class="d-flex flex-center">
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                        2.4%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="separator separator-dashed my-3"></div>
                                        <div class="d-flex flex-stack">
                                            <div class="d-flex align-items-center me-5">
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-tiktok fs-3 text-gray-600"><i class="path1"></i><i class="path2"></i></i>
                                                    </span>
                                                </div>
                                                <div class="me-5">
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Social Retargeting</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-gray-800 fw-bold fs-6 me-3">0.94%</span>
                                                <div class="d-flex flex-center">
                                                    <span class="badge badge-light-danger fs-base">
                                                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                        9.4%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="separator separator-dashed my-3"></div>
                                        <div class="d-flex flex-stack">
                                            <div class="d-flex align-items-center me-5">
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-sms fs-3 text-gray-600"><i class="path1"></i><i class="path2"></i></i>
                                                    </span>
                                                </div>           
                                                <div class="me-5">
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Email Retargeting</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-gray-800 fw-bold fs-6 me-3">1.23%</span>
                                                <div class="d-flex flex-center">
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                        0.2%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="separator separator-dashed my-3"></div>
                                        <div class="d-flex flex-stack">
                                            <div class="d-flex align-items-center me-5">
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-icon fs-3 text-gray-600"><i class="path1"></i><i class="path2"></i><i class="path3"></i></i>
                                                    </span>
                                                </div>
                                                <div class="me-5">
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals Customers</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-gray-800 fw-bold fs-6 me-3">0.08%</span>
                                                <div class="d-flex flex-center">
                                                    <span class="badge badge-light-danger fs-base">
                                                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                        0.4%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="separator separator-dashed my-3"></div>
                                        <div class="d-flex flex-stack">
                                            <div class="d-flex align-items-center me-5">
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-abstract-25 fs-3 text-gray-600"><i class="path1"></i><i class="path2"></i></i>
                                                    </span>
                                                </div>
                                                <div class="me-5">
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-gray-800 fw-bold fs-6 me-3">0.46%</span>
                                                <div class="d-flex flex-center">
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i class="path1"></i><i class="path2"></i></i>
                                                        8.3%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-8 mb-5 mb-xl-10">
                            <div class="card card-flush h-xl-100">
                                <div class="card-header py-5">
                                    <h3 class="card-title fw-bold text-gray-800">Monthly Targets</h3>
                                    <div class="card-toolbar">
                                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                                            <div class="text-gray-600 fw-bold">
                                                Loading date range...
                                            </div>
                                            <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0"><i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i><i class="path5"></i><i class="path6"></i></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body d-flex justify-content-between flex-column pb-0 px-0 pt-1">
                                    <div class="d-flex flex-wrap d-grid gap-5 px-9 mb-5">
                                        <div class="me-md-2">
                                            <div class="d-flex mb-2">
                                                <span class="fs-4 fw-semibold text-gray-400 me-1">$</span>
                                                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">12,706</span>
                                            </div>
                                            <span class="fs-6 fw-semibold text-gray-400">Targets for April</span>
                                        </div>
                                        <div class="border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
                                            <div class="d-flex mb-2">
                                                <span class="fs-4 fw-semibold text-gray-400 me-1">$</span>
                                                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">8,035</span>
                                            </div>
                                            <span class="fs-6 fw-semibold text-gray-400">Actual for April</span>
                                        </div>
                                        <div class="m-0">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="fs-4 fw-semibold text-gray-400 align-self-start me-1">$</span>
                                                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">4,684</span>
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-black-up fs-7 text-success ms-n1"></i>
                                                    4.5%
                                                </span>
                                            </div>
                                            <span class="fs-6 fw-semibold text-gray-400">GAP</span>
                                        </div>
                                    </div>
                                    <div id="kt_charts_widget_20" class="min-h-auto ps-4 pe-6" data-kt-chart-info="Revenue" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Content wrapper-->

        <!--Footer-->
        @include('footer.footer')
        <!--end::Footer-->
    
    </div>
@endsection
