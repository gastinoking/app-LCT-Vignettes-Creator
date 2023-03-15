<div class="top-navigation">
    <div class="page-title-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title-box">
                        <h4>LCT-Vignettes-Creator</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('administration.dashboard')}}">Administration</a></li>
                            <li class="breadcrumb-item"><a href="{{route('administration.dashboard')}}">LCT-Vignettes-Creator</a></li>

                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="state-information d-none d-sm-block">
                        <div class="state-graph float-right">
                            <div id="header-chart-1"></div>
                            <div class="info">Balance $ 2,317</div>
                        </div>
                        <div class="state-graph">
                            <div id="header-chart-2"></div>
                            <div class="info">Item Sold 1230</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
        </div>
    </div>

    <div class="container-fluid">
        <div class="topnav">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ti-dashboard"></i>Tableau de bord
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-email" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-image"></i>Vignettes
                            </a>
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="topnav-email">
                                <a href="{{route("administration.vignettes.index")}}" class="dropdown-item">Listes des Vignettes </a>
                                <a href="{{route("administration.vignettes.create")}}" class="dropdown-item">Ajouter une Vignettes </a>
{{--                                <a href="#" class="dropdown-item">Recherche</a>--}}
                            </div>
                        </li>

 {{--                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components"
                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-support"></i>UI Elements
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                 aria-labelledby="topnav-components">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="#" class="dropdown-item">Alerts</a>
                                            <a href="#" class="dropdown-item">Buttons</a>
                                            <a href="#" class="dropdown-item">Badge</a>
                                            <a href="#" class="dropdown-item">Cards</a>
                                            <a href="#" class="dropdown-item">Carousel</a>
                                            <a href="#" class="dropdown-item">Dropdowns</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="#" class="dropdown-item">Grid</a>
                                            <a href="#" class="dropdown-item">Images</a>
                                            <a href="#" class="dropdown-item">Lightbox</a>
                                            <a href="#" class="dropdown-item">Modals</a>
                                            <a href="#" class="dropdown-item">Pagination</a>
                                            <a href="#" class="dropdown-item">Popover
                                                &amp; Tooltips</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="#" class="dropdown-item">Progress
                                                Bars</a>
                                            <a href="#" class="dropdown-item">Sweet-Alert</a>
                                            <a href="#" class="dropdown-item">Tabs
                                                &amp; Accordions</a>
                                            <a href="#" class="dropdown-item">Typography</a>
                                            <a href="#" class="dropdown-item">Video</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-forms" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-receipt"></i>Forms
                            </a>
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="topnav-forms">
                                <a href="#" class="dropdown-item">Form Elements</a>
                                <a href="#" class="dropdown-item">Form Validation</a>
                                <a href="#" class="dropdown-item">Form Advanced</a>
                                <a href="#" class="dropdown-item">Form Editors</a>
                                <a href="#" class="dropdown-item">Form File Upload</a>
                                <a href="#" class="dropdown-item">Form Xeditable</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-menu-alt"></i>More
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-more">
                                <a href="#" class="dropdown-item">Calendar</a>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                       role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        Icons <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                        <a href="#" class="dropdown-item">Material
                                            Design</a>
                                        <a href="#" class="dropdown-item">Ion Icons</a>
                                        <a href="#" class="dropdown-item">Font
                                            Awesome</a>
                                        <a href="#" class="dropdown-item">Themify Icons</a>
                                        <a href="#" class="dropdown-item">Dripicons</a>
                                        <a href="#" class="dropdown-item">Typicons
                                            Icons</a>
                                    </div>
                                </div>


                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tables"
                                       role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        Tables <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-tables">
                                        <a href="#" class="dropdown-item">Basic Tables</a>
                                        <a href="#" class="dropdown-item">Data Table</a>
                                        <a href="#" class="dropdown-item">Responsive
                                            Table</a>
                                        <a href="#" class="dropdown-item">Editable
                                            Table</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-maps"
                                       role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        Maps <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                        <a href="#" class="dropdown-item"> Google Map</a>
                                        <a href="#" class="dropdown-item"> Vector Map</a>
                                    </div>
                                </div>


                                <a href="#" class="dropdown-item">Range Slider</a>
                                <a href="#" class="dropdown-item">Session Timeout</a>


                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-pie-chart"></i>Charts
                            </a>
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="topnav-charts">
                                <a href="#" class="dropdown-item">Morris Chart</a>
                                <a href="#" class="dropdown-item">Chartist Chart</a>
                                <a href="#" class="dropdown-item">Chartjs Chart</a>
                                <a href="#" class="dropdown-item">Flot Chart</a>
                                <a href="#" class="dropdown-item">C3 Chart</a>
                                <a href="#" class="dropdown-item">Jquery Knob Chart</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-support"></i>Pages
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-lg dropdown-menu-right"
                                 aria-labelledby="topnav-pages">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="#" class="dropdown-item">Timeline</a>
                                            <a href="#" class="dropdown-item">Invoice</a>
                                            <a href="#" class="dropdown-item">Directory</a>
                                            <a target="_self" href="#"
                                               class="dropdown-item">Login</a>
                                            <a target="_self" href="#"
                                               class="dropdown-item">Register</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <a target="_self" href="#"
                                               class="dropdown-item">Recover
                                                Password</a>
                                            <a target="_self" href="#"
                                               class="dropdown-item">Lock
                                                Screen</a>
                                            <a href="#" class="dropdown-item">Blank Page</a>
                                            <a target="_self" href="#" class="dropdown-item">Error
                                                404</a>
                                            <a target="_self" href="#" class="dropdown-item">Error
                                                500</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
--}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-settings"></i>Gestion
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-layout">
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                       id="topnav-layout-verti" role="button" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        Vertical <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-layout-verti">
                                        <a target="_self" href="#"
                                           class="dropdown-item">Light
                                            Sidebar</a>
                                        <a target="_self" href="#"
                                           class="dropdown-item">Compact
                                            Sidebar</a>
                                        <a target="_self" href="#"
                                           class="dropdown-item">Icon
                                            Sidebar</a>
                                        <a target="_self" href="#" class="dropdown-item">Boxed
                                            Layout</a>
                                        <a target="_self" href="#"
                                           class="dropdown-item">Preloader</a>
                                        <a target="_self" href="#"
                                           class="dropdown-item">Colored
                                            Sidebar</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                       id="topnav-layout-hori" role="button" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        LCT-Vignettes-Creator <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                        <a target="_self" href="#"
                                           class="dropdown-item">LCT-Vignettes-Creator</a>
                                        <a target="_self" href="#"
                                           class="dropdown-item">Topbar
                                            Dark</a>
                                        <a target="_self" href="#"
                                           class="dropdown-item">Preloader</a>
                                        <a target="_self" href="#"
                                           class="dropdown-item">Boxed
                                            Layout</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
