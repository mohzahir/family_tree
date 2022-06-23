<!-- FOOTER : begin -->
<footer id="footer" class="footer--has-menu footer--has-text">
    <div class="footer__inner">




        <!-- FOOTER WIDGETS : begin -->
        <div class="footer-widgets footer-widgets--4-cols footer-widgets--wider-first-col">
            <div class="footer-widgets__bg">
                <div class="lsvr-container">
                    <div class="footer-widgets__inner">
                        <div class="footer-widgets__grid">

                            <!-- <div class="footer-widgets__col">
                                <div id="text-2" class="widget widget_text">
                                    <div class="widget__inner">
                                        <div class="textwidget">
                                            <p>Lewis family roots reach back to the late <strong>19th century</strong> England. Founded by <em>John Lewis</em>, the middle-class entrepreneur, who married <em>Mary Wright</em> and together they started a family which now spans over four generations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="footer-widgets__col">
                                <div id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="widget__inner">
                                        <div class="menu-footer-widgets-menu-1-container">
                                            <ul id="menu-footer-widgets-menu-1" class="menu">
                                                <li id="menu-item-312" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-312 {{ request->routeIs('family.members') ? 'current-menu-item' : '' }}"><a href="{{ route('family.members') }}">أفراد العائلة</a></li>
                                                <li id="menu-item-314" class="menu-item menu-item-type-post_type menu-item-object-lsvr_family_member {{ request->routeIs('family.member') ? 'current-menu-item' : '' }} menu-item-314"><a href="{{ route('family.member', ['id' => 1]) }}" aria-current="page">شجرة العائلة</a></li>
                                                <!-- <li id="menu-item-313" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a href="https://preview.lsvr.sk/lineago/family-timeline/">Family Timeline</a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-widgets__col">
                                <div id="nav_menu-3" class="widget widget_nav_menu">
                                    <div class="widget__inner">
                                        <div class="menu-footer-widgets-menu-2-container">
                                            <ul id="menu-footer-widgets-menu-2" class="menu">
                                                <!-- <li id="menu-item-316" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-316"><a href="#">Lewis History</a></li> -->
                                                <li id="menu-item-315" class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-315"><a href="#">الاخبار</a></li>
                                                <li id="menu-item-317" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-317"><a href="https://preview.lsvr.sk/lineago/galleries/">معرض الصور</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="footer-widgets__col">
                                <div id="nav_menu-4" class="widget widget_nav_menu">
                                    <div class="widget__inner">
                                        <div class="menu-footer-widgets-menu-3-container">
                                            <ul id="menu-footer-widgets-menu-3" class="menu">
                                                <li id="menu-item-318" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-318"><a target="_blank" rel="noopener" href="https://themeforest.net/item/lineago-genealogy-wordpress-theme/35901606">Theme Info</a></li>
                                                <li id="menu-item-319" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-319"><a target="_blank" rel="noopener" href="http://docs.lsvr.sk/lineago.wp/">Documentation</a></li>
                                                <li id="menu-item-320" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-320"><a target="_blank" rel="noopener" href="https://themeforest.net/item/lineago-genealogy-wordpress-theme/35901606/comments">Support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER WIDGETS : end -->





        <!-- FOOTER COLLAGE : begin -->
        <div class="footer-collage">
            <div class="footer-collage__inner">
                <div class="footer-collage__grid">


                    @if(count($people) > 0)
                    @foreach($people as $person)

                    <div class="footer-collage__grid-item">

                        <a href="{{ route('family.member', ['id' => $person->id]) }}" class="footer-collage__grid-item-link footer-collage__grid-item-link--loading" title="{{ $person->name }}" style="background-image: url( {{ $person->photo ? asset($person->photo) : asset('template/app-assets/images/portrait/medium/avatar-m-1.png') }} )">
                            <img src="{{ $person->photo ? asset($person->photo) : asset('template/app-assets/images/portrait/medium/avatar-m-1.png') }}" class="footer-collage__grid-item-image" alt="{{ $person->name }}">
                        </a>

                    </div>

                    @endforeach
                    @endif



                </div>
            </div>
        </div>
        <!-- FOOTER COLLAGE : end -->




        <!-- FOOTER BOTTOM : begin -->
        <div class="footer-bottom">
            <div class="lsvr-container">
                <div class="footer-bottom__inner">
                    <div class="footer-bottom__grid">



                        <!-- FOOTER MENU : begin -->
                        <nav class="footer-menu" aria-label="Footer Menu">

                            <ul id="menu-footer-menu" class="footer-menu__list" role="menu">

                                <!-- <li class="footer-menu__item footer-menu__item--level-0 menu-item menu-item-type-post_type menu-item-object-page" role="presentation">

                                    <a href="https://preview.lsvr.sk/lineago/demo-credits/" class="footer-menu__item-link footer-menu__item-link--level-0" role="menuitem">

                                        Demo Credits</a>


                                </li> -->



                                <li class="footer-menu__item footer-menu__item--level-0 menu-item menu-item-type-custom menu-item-object-custom" role="presentation">

                                    <a href="#" class="footer-menu__item-link footer-menu__item-link--level-0" role="menuitem">

                                        الذهاب لاعلى</a>


                                </li>

                            </ul>
                        </nav>
                        <!-- FOOTER MENU : end -->





                        <!-- FOOTER TEXT : begin -->
                        <!-- <div class="footer-text">
                            <p>Created with <a target="_blank" href="https://themeforest.net/item/lineago-genealogy-wordpress-theme/35901606">Lineago - Genealogy WordPress Theme</a></p>
                        </div> -->
                        <!-- FOOTER TEXT : end -->



                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER BOTTOM : end -->



    </div>
</footer>
<!-- FOOTER : end -->