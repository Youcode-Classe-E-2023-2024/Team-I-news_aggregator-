<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="300px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-header flex-column mx-10 pt-8" id="kt_app_sidebar_header">
        <div class="d-flex btn btn-outline btn-custom align-items-center w-200 mb-2" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-start">
            <div class="cursor-pointer symbol symbol-35px symbol-lg-40px me-3 ms-n2">
                <img class="" src="{{ URL::to('assets/media/avatars/300-3.jpg') }}" alt="user" />
            </div>
            <div class="d-flex flex-column align-items-start flex-grow-1">
                <a href="index.htm-8.html?page=pages/user-profile/projects" class="btn-title fs-6 fw-bold">{{ Session::get('name') }}</a>
                <a href="index.htm-9.html?page=pages/user-profile/overview" class="btn-desc fs-7 fw-bold d-block">{{ Session::get('posision') }}</a>
            </div>
            <i class="ki-duotone ki-icons/duotune/general/gen033.svg btn-icon fs-2 me-n2"></i>
        </div>

        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
            <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                    <div class="symbol symbol-50px me-5">
                        <img alt="Logo" src="{{ URL::to('assets/media/avatars/aang.jpg') }}" />
                    </div>
                    <div class="d-flex flex-column">
                        <div class="fw-bold d-flex align-items-center fs-5">{{ Session::get('name') }}
                            <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                        </div>
                        <a href="#" class="fw-semibold text-muted text-hover-primary fs-7"> {{ Session::get('posision') }} </a>
                    </div>
                </div>
            </div>
            <div class="separator my-2"></div>
            <div class="menu-item px-5">
                <a href="index.htm-10.html?page=account/overview" class="menu-link px-5">
                    My Profile
                </a>
            </div>
            <div class="menu-item px-5">
                <a href="index.htm-11.html?page=apps/projects/list" class="menu-link px-5">
                    <span class="menu-text">My Projects</span>
                    <span class="menu-badge">
                        <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                    </span>
                </a>
            </div>
            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                <a href="#" class="menu-link px-5">
                    <span class="menu-title">My Subscription</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <div class="menu-item px-3">
                        <a href="index.htm-4.html?page=account/referrals" class="menu-link px-5">
                            Referrals
                        </a>
                    </div>
                    <div class="menu-item px-3">
                        <a href="index.htm-3.html?page=account/billing" class="menu-link px-5">
                            Billing
                        </a>
                    </div>
                    <div class="menu-item px-3">
                        <a href="index-2.htm?page=account/statements" class="menu-link px-5">
                            Payments
                        </a>
                    </div>
                    <div class="menu-item px-3">
                        <a href="index-2.htm?page=account/statements" class="menu-link d-flex flex-stack px-5">
                            Statements

                            <span class="ms-2" data-bs-toggle="tooltip" title="View your statements"> </span>
                        </a>
                    </div>
                    <div class="separator my-2"></div>
                    <div class="menu-item px-3">
                        <div class="menu-content px-3">
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                <span class="form-check-label text-muted fs-7">
                                    Notifications
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item px-5">
                <a href="index-2.htm?page=account/statements" class="menu-link px-5">
                    My Statements
                </a>
            </div>
            <div class="separator my-2"></div>
            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                <a href="#" class="menu-link px-5">
                    <span class="menu-title position-relative">
                        Mode
                        <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                            <i class="ki-duotone ki-night-day theme-light-show fs-2">
                                <i class="path1"></i>
                                <i class="path2"></i>
                                <i class="path3"></i>
                                <i class="path4"></i>
                                <i class="path5"></i>
                                <i class="path6"></i>
                                <i class="path7"></i>
                                <i class="path8"></i>
                                <i class="path9"></i>
                                <i class="path10"></i>
                            </i>
                            <i class="ki-duotone ki-moon theme-dark-show fs-2">
                                <i class="path1"></i>
                                <i class="path2"></i>
                            </i>
                        </span>
                    </span>
                </a>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-night-day fs-2">
                                    <i class="path1"></i>
                                    <i class="path2"></i>
                                    <i class="path3"></i>
                                    <i class="path4"></i>
                                    <i class="path5"></i>
                                    <i class="path6"></i>
                                    <i class="path7"></i>
                                    <i class="path8"></i>
                                    <i class="path9"></i>
                                    <i class="path10"></i>
                                </i>
                            </span>
                            <span class="menu-title">Light</span>
                        </a>
                    </div>
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-moon fs-2">
                                    <i class="path1"></i>
                                    <i class="path2"></i>
                                </i>
                            </span>
                            <span class="menu-title">Dark</span>
                        </a>
                    </div>
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-screen fs-2">
                                    <i class="path1"></i>
                                    <i class="path2"></i>
                                    <i class="path3"></i>
                                    <i class="path4"></i>
                                </i>
                            </span>
                            <span class="menu-title">System</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                <a href="#" class="menu-link px-5">
                    <span class="menu-title position-relative">
                        Language
                        <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                            English
                            <img class="w-15px h-15px rounded-1 ms-2" src="{{ URL::to('assets/media/flags/united-states.svg') }}" alt="" />
                        </span>
                    </span>
                </a>
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <div class="menu-item px-3">
                        <a href="index-1.htm?page=account/settings" class="menu-link d-flex px-5 active">
                            <span class="symbol symbol-20px me-4">
                                <img class="rounded-1" src="{{ URL::to('assets/media/flags/united-states.svg') }}" alt="" />
                            </span>
                            English
                        </a>
                    </div>
                    <div class="menu-item px-3">
                        <a href="index-1.htm?page=account/settings" class="menu-link d-flex px-5">
                            <span class="symbol symbol-20px me-4">
                                <img class="rounded-1" src="{{ URL::to('assets/media/flags/spain.svg') }}" alt="" />
                            </span>
                            Spanish
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-item px-5 my-1">
                <a href="index-1.htm?page=account/settings" class="menu-link px-5">
                    Account Settings
                </a>
            </div>
            <div class="menu-item px-5">
                <a href="{{ route('logout') }}" class="menu-link px-5">
                    Sign Out
                </a>
            </div>
        </div>
    </div>

    <div class="app-sidebar-navs flex-column-fluid pb-6" id="kt_app_sidebar_navs">
        <div id="kt_app_sidebar_navs_wrappers" class="hover-scroll-y my-2" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header" data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">
            <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="menu menu-column menu-rounded menu-sub-indention menu-active-bg mb-7">
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-5">Dashboards</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link active" href="{{ route('home') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-element-11 fs-1">
                                <i class="path1"></i>
                                <i class="path2"></i>
                                <i class="path3"></i>
                                <i class="path4"></i>
                            </i>
                        </span>
                        <span class="menu-title">Default</span>
                    </a>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{hover_show(['users/list/page'])}}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-abstract-28 fs-1">
                                <i class="path1"></i>
                                <i class="path2"></i>
                            </i>
                        </span>
                        <span class="menu-title">User Management</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1 {{hover_show(['users/list/page'])}} {{ (request()->is('users/view/')) ? 'hover show' : '' }}">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Users</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link {{set_active(['users/list/page'])}}" href="{{ route('users/list/page') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Users List</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" {{ (request()->is('users/view/')) ? 'hover show' : '' }}>
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">View User</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Roles</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-68.html?page=apps/user-management/roles/list">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Roles List</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-69.html?page=apps/user-management/roles/view">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">View Role</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-70.html?page=apps/user-management/permissions">
                                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Permissions</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <a class="menu-link" href="index.htm-13.html?page=dashboards/projects">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-some-files fs-1">
                                <i class="path1"></i>
                                <i class="path2"></i>
                            </i>
                        </span>
                        <span class="menu-title">Projects</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="index.htm-14.html?page=dashboards/ecommerce">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-chart-line-star fs-1">
                                <i class="path1"></i>
                                <i class="path2"></i>
                                <i class="path3"></i>
                            </i>
                        </span>
                        <span class="menu-title">eCommerce</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="index.htm-15.html?page=dashboards/bidding">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-rescue fs-1">
                                <i class="path1"></i>
                                <i class="path2"></i>
                            </i>
                        </span>
                        <span class="menu-title">Bidding</span>
                    </a>
                </div>
                <div class="menu-item pt-7">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-5">Pages</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-colors-square fs-1">
                                <i class="path1"></i>
                                <i class="path2"></i>
                                <i class="path3"></i>
                                <i class="path4"></i>
                            </i>
                        </span>
                        <span class="menu-title">User Profile</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-9.html?page=pages/user-profile/overview">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Overview</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-8.html?page=pages/user-profile/projects">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Projects</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-16.html?page=pages/user-profile/campaigns">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Campaigns</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-17.html?page=pages/user-profile/documents">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Documents</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-18.html?page=pages/user-profile/followers">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Followers</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-7.html?page=pages/user-profile/activity">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Activity</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-chart-pie-4 fs-1">
                                <i class="path1"></i>
                                <i class="path2"></i>
                                <i class="path3"></i>
                            </i>
                        </span>
                        <span class="menu-title">Account</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-10.html?page=account/overview">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Overview</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index-1.htm?page=account/settings">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Settings</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-2.html?page=account/security">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Security</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-19.html?page=account/activity">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Activity</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-3.html?page=account/billing">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Billing</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index-2.htm?page=account/statements">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Statements</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-4.html?page=account/referrals">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Referrals</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-5.html?page=account/api-keys">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">API Keys</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-6.html?page=account/logs">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Logs</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="menu-item pt-7">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-5">APPS</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-abstract-41 fs-1">
                                <i class="path1"></i>
                                <i class="path2"></i>
                            </i>
                        </span>
                        <span class="menu-title">Projects</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-11.html?page=apps/projects/list">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">My Projects</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-41.html?page=apps/projects/project">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">View Project</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-42.html?page=apps/projects/targets">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Targets</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-43.html?page=apps/projects/budget">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Budget</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-44.html?page=apps/projects/users">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Users</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-45.html?page=apps/projects/files">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Files</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-46.html?page=apps/projects/activity">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Activity</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-47.html?page=apps/projects/settings">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Settings</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-basket fs-1">
                                <i class="path1"></i>
                                <i class="path2"></i>
                                <i class="path3"></i>
                                <i class="path4"></i>
                            </i>
                        </span>
                        <span class="menu-title">eCommerce</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Catalog</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-48.html?page=apps/ecommerce/catalog/products">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Products</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-49.html?page=apps/ecommerce/catalog/categories">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Categories</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-50.html?page=apps/ecommerce/catalog/add-product">
                                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Product</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-51.html?page=apps/ecommerce/catalog/edit-product">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Edit Product</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-52.html?page=apps/ecommerce/catalog/add-category">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Add Category</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-53.html?page=apps/ecommerce/catalog/edit-category">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Edit Category</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Sales</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-54.html?page=apps/ecommerce/sales/listing">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Orders Listing</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-55.html?page=apps/ecommerce/sales/details">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Order Details</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-56.html?page=apps/ecommerce/sales/add-order">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Add Order</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-57.html?page=apps/ecommerce/sales/edit-order">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Edit Order</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Customers</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-58.html?page=apps/ecommerce/customers/listing">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Customer Listing</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-59.html?page=apps/ecommerce/customers/details">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Customer Details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Reports</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-60.html?page=apps/ecommerce/reports/view">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Products Viewed</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-61.html?page=apps/ecommerce/reports/sales">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Sales</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-62.html?page=apps/ecommerce/reports/returns">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Returns</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-63.html?page=apps/ecommerce/reports/customer-orders">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Customer Orders</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="index.htm-64.html?page=apps/ecommerce/reports/shipping">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Shipping</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="index.htm-65.html?page=apps/ecommerce/settings">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Settings</span>
                            </a>
                        </div>
                    </div>
                </div>


            </div>

            <div class="menu menu-rounded menu-column">
                <div class="menu-item">
                    <div class="menu-content menu-heading text-uppercase fs-6">
                        Projects
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="index.htm-41.html?page=apps/projects/project">
                        <span class="menu-icon">
                            <span class="bullet bullet-dot h-10px w-10px bg-primary"> </span>
                        </span>
                        <span class="menu-title"> Google Ads </span>
                        <span class="menu-badge">
                            <span class="badge badge-custom"> 6 </span>
                        </span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="index.htm-41.html?page=apps/projects/project">
                        <span class="menu-icon">
                            <span class="bullet bullet-dot h-10px w-10px bg-success"> </span>
                        </span>
                        <span class="menu-title"> AirStoke App </span>
                        <span class="menu-badge">
                            <span class="badge badge-custom"> 2 </span>
                        </span>
                    </a>
                </div>

                <div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_projects_collapse">
                    <div class="menu-item">
                        <a class="menu-link" href="index.htm-41.html?page=apps/projects/project">
                            <span class="menu-icon">
                                <span class="bullet bullet-dot h-10px w-10px bg-danger"> </span>
                            </span>
                            <span class="menu-title"> Fitnes App </span>
                            <span class="menu-badge">
                                <span class="badge badge-custom"> 3 </span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="menu-item">
                    <a class="menu-link menu-collapse-toggle toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_sidebar_menu_projects_collapse" data-kt-toggle-text="Show less">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-down toggle-off fs-3 me-0"></i>
                            <i class="ki-duotone ki-up toggle-on fs-3 me-0"></i>
                        </span>
                        <span class="menu-title" data-kt-toggle-text-target="true">
                            Show more
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>