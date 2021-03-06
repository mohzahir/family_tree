<header id="header" class="header--has-logo header--has-title header--has-tagline header--has-search">
    <div class="header__inner">
        <div class="lsvr-container">
            <div class="header__container">



                <!-- HEADER NAVBAR : begin -->
                <div id="header-navbar" class="header-navbar">
                    <div class="header-navbar__inner">



                        <!-- PRIMARY HEADER MENU : begin -->
                        <nav id="header-menu-primary" class="header-menu-primary" data-label-expand-popup="Expand submenu" data-label-collapse-popup="Collapse submenu" aria-label="Header Menu">

                            <ul id="menu-header-menu" class="header-menu-primary__list" role="menu">
                                <li id="header-menu-primary__item-309" class="header-menu-primary__item header-menu-primary__item--level-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-home {{ request()->routeIs('family.home') ? 'current-menu-ancestor': '' }}" role="presentation">

                                    <a href="{{ route('family.home') }}" id="header-menu-primary__item-link-309" class="header-menu-primary__item-link header-menu-primary__item-link--level-0" role="menuitem">

                                        <span class="header-menu-primary__item-link-label">الرئيسيه</span>


                                    </a>


                                </li>


                                <li id="header-menu-primary__item-334" class="header-menu-primary__item header-menu-primary__item--level-0 menu-item menu-item-type-custom menu-item-object-custom {{ request()->routeIs('family.members') || request()->routeIs('family.member') ? 'current-menu-ancestor': '' }} current-menu-parent menu-item-has-children" role="presentation">

                                    <a href="{{ route('family.members') }}" id="header-menu-primary__item-link-334" class="header-menu-primary__item-link header-menu-primary__item-link--level-0" role="menuitem" aria-owns="header-menu-primary__submenu-wrapper-334" aria-controls="header-menu-primary__submenu-wrapper-334" aria-haspopup="true" aria-expanded="false">

                                        <span class="header-menu-primary__item-link-label" >العائلة</span>


                                        <span class="header-menu-primary__item-link-icon" aria-hidden="true"></span>


                                    </a>




                                </li>


                                <li id="header-menu-primary__item-332" class="header-menu-primary__item header-menu-primary__item--level-0 menu-item menu-item-type-post_type menu-item-object-page" role="presentation">

                                    <a href="#" id="header-menu-primary__item-link-332" class="header-menu-primary__item-link header-menu-primary__item-link--level-0" role="menuitem">

                                        <span class="header-menu-primary__item-link-label">التاريخ</span>


                                    </a>


                                </li>


                                <li id="header-menu-primary__item-331" class="header-menu-primary__item header-menu-primary__item--level-0 menu-item menu-item-type-post_type menu-item-object-page current_page_parent" role="presentation">

                                    <a href="#" id="header-menu-primary__item-link-331" class="header-menu-primary__item-link header-menu-primary__item-link--level-0" role="menuitem">

                                        <span class="header-menu-primary__item-link-label">الاخبار</span>


                                    </a>


                                </li>


                                <li id="header-menu-primary__item-337" class="header-menu-primary__item header-menu-primary__item--level-0 menu-item menu-item-type-custom menu-item-object-custom" role="presentation">

                                    <a href="#" id="header-menu-primary__item-link-337" class="header-menu-primary__item-link header-menu-primary__item-link--level-0" role="menuitem">

                                        <span class="header-menu-primary__item-link-label">معرض الصور</span>


                                    </a>


                                </li>

                            </ul>
                        </nav>
                        <!-- PRIMARY HEADER MENU : end -->









                    </div>
                </div>
                <!-- HEADER NAVBAR : end -->

                <!-- HEADER NAVBAR TOGGLE : begin -->
                <button id="header-navbar-toggle" class="header-navbar-toggle" type="button" title="Open menu" data-label-expand-popup="Open menu" data-label-collapse-popup="Close menu" aria-controls="header-navbar" aria-haspopup="true" aria-expanded="false">
                    <!-- <span class="header-navbar-toggle__icon" aria-hidden="true"></span> -->
                    <i class="la la-bars"></i>
                </button>
                <!-- HEADER NAVBAR TOGGLE : end -->


            </div>
        </div>
    </div>
</header>