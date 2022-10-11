<body class="layout-default">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>

                <!-- Header -->

                <div id="header" class="mdk-header js-mdk-header m-0" data-fixed data-effects="waterfall" data-retarget-mouse-scroll="false">
                    <div class="mdk-header__content">

                        <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-primary pl-md-0 pr-0" id="navbar" data-primary>
                            <div class="container-fluid page__container pr-0">

                                <!-- Navbar toggler -->
                                <button class="navbar-toggler navbar-toggler-custom  d-lg-none d-flex mr-navbar" type="button" data-toggle="sidebar">
                                    <span class="material-icons icon-14pt">menu</span>
                                </button>
                                <div class="navbar-collapse collapse" id="navbarsExample03">
                                    <ul class="nav navbar-nav">
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" data-caret="false" class="dropdown-toggle navbar-toggler navbar-toggler-dashboard border-left d-flex align-items-center ml-navbar">
                                        <span class="material-icons">laptop</span> My Dashboard
                                    </a>
                                    <div id="company_menu" class="dropdown-menu dropdown-menu-right navbar-company-menu">
                                        <div class="dropdown-item d-flex align-items-center py-2 navbar-company-info py-3">

                                            <!-- <span class="mr-3">
                                                <img src="<?php echo $base_url; ?>images/frontted-logo-blue.svg" width="43" height="43" alt="avatar">
                                            </span> -->
                                            <span class="flex d-flex flex-column">
                                                <strong class="h5 m-0">Admin</strong>
                                                <!-- <small class="text-muted text-uppercase">Mahendra sahu</small> -->
                                            </span>

                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <!-- 
										 <a class="dropdown-item d-flex align-items-center py-2" href="#">
                                            <span class="material-icons mr-2">account_circle</span> Change Password
                                        </a>
                                         -->
                                        <a class="dropdown-item d-flex align-items-center py-2" href="<?php echo base_url(); ?>login">
                                            <span class="material-icons mr-2">exit_to_app</span> Logout
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- // END Header -->