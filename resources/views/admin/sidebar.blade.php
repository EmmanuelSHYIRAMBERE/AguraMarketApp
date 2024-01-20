<nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div
                    class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
                >
                    <a class="sidebar-brand brand-logo" href="{{url('/')}}"
                        ><img src="assets/hero-banner.png" alt="logo"
                    /></a>
                    <a class="sidebar-brand brand-logo-mini" href="{{url('/')}}"
                        ><img src="admin/assets/images/logo-mini.svg" alt="logo"
                    /></a>
                </div>
                <ul class="nav">
                    <li class="nav-item profile">
                        <div class="profile-desc">
                            <div class="profile-pic">
                                <div class="count-indicator">
                                    <img
                                        class="img-xs rounded-circle"
                                        src="assets/blog-4.jpg"
                                        alt=""
                                    />
                                    <span class="count bg-success"></span>
                                </div>
                                <div class="profile-name">
                                    <h5 class="mb-0 font-weight-normal">
                                        Admin
                                    </h5>
                                    <span>System Authorization</span>
                                </div>
                            </div>
                            <a
                                href="#"
                                id="profile-dropdown"
                                data-toggle="dropdown"
                                ><i class="mdi mdi-dots-vertical"></i
                            ></a>
                            <div
                                class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                                aria-labelledby="profile-dropdown"
                            >
                                <a href="#" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div
                                            class="preview-icon bg-dark rounded-circle"
                                        >
                                            <i
                                                class="mdi mdi-settings text-primary"
                                            ></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p
                                            class="preview-subject ellipsis mb-1 text-small"
                                        >
                                            Account settings
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div
                                            class="preview-icon bg-dark rounded-circle"
                                        >
                                            <i
                                                class="mdi mdi-onepassword text-info"
                                            ></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p
                                            class="preview-subject ellipsis mb-1 text-small"
                                        >
                                            Change Password
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div
                                            class="preview-icon bg-dark rounded-circle"
                                        >
                                            <i
                                                class="mdi mdi-calendar-today text-success"
                                            ></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p
                                            class="preview-subject ellipsis mb-1 text-small"
                                        >
                                            To-do list
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-category">
                        <span class="nav-link">Navigation</span>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="{{url('/redirect')}}">
                            <span class="menu-icon">
                                <i class="mdi mdi-speedometer"></i>
                            </span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    
                   
                    <li class="nav-item menu-items">
                        <a
                            class="nav-link"
                            data-toggle="collapse"
                            href="#ui-basic3"
                            aria-expanded="false"
                            aria-controls="ui-basic1"
                        >
                            <span class="menu-icon">
                                <i class="mdi mdi-bullhorn"></i>
                            </span>
                            <span class="menu-title">Ad Campaigns</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic3">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="{{url('/view_campaign')}}"
                                        >Add Campaign</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="{{url('/show_campaign')}}"
                                        >Show Campaigns</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item menu-items">
                        <a
                            class="nav-link"
                            data-toggle="collapse"
                            href="#ui-basic"
                            aria-expanded="false"
                            aria-controls="ui-basic"
                        >
                            <span class="menu-icon">
                                <i class="mdi mdi-laptop"></i>
                            </span>
                            <span class="menu-title">Products</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="{{url('/view_product')}}"
                                        >Add Product</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="{{url('/show_product')}}"
                                        >Show Product</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="{{url('view_category')}}"
                                        >Category</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="{{url('orders')}}"
                                        >Orders</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item menu-items">
                        <a
                            class="nav-link"
                            href="{{url('view_service')}}"
                        >
                            <span class="menu-icon">
                                <i class="mdi mdi-sort"></i>
                            </span>
                            <span class="menu-title">Services</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a
                            class="nav-link"
                            href="{{url('view_contact')}}"
                        >
                            <span class="menu-icon">
                                <i class="mdi mdi-phone-classic"></i>
                            </span>
                            <span class="menu-title">Contact</span>
                        </a>
                    </li>
                </ul>
            </nav>