<x-front-layout class="core--fullwidth">
    <x-slot name="header">

        <!-- CORE HEADER INNER : begin -->
        <div class="core-header__inner">
            <div class="lsvr-container">
                <div class="core-header__content">



                    <!-- CORE HEADER CONTAINER : begin -->
                    <div class="core-header__container">

                        <!-- CORE HEADER HEADING : begin -->
                        <div class="core-header__heading">

                            <h1 class="core-header__title">
                                شجرة عائلة عبود </h1>


                            <p class="core-header__subtitle lsvr-secondary-font">
                                بدت هذه القصة في سنة 1946,<br>منذ لحظة ولادة  <a href="https://preview.lsvr.sk/lineago/family/john-lewis/"> عبود </a> </p>


                        </div>
                        <!-- CORE HEADER HEADING : end -->


                    </div>
                    <!-- CORE HEADER CONTAINER : end -->


                    <!-- CORE HEADER SEARCH : begin -->
                    <div id="core-header-search" class="core-header-search" role="group">

                        <!-- SEARCH FORM : begin -->
                        <form class="core-header-search__form" action="{{ route('family.home') }}" method="get" role="search">
                            @csrf

                            <!-- SEARCH INPUT WRAPPER : begin -->
                            <div class="core-header-search__input-wrapper">

                                <label for="core-header-search-input" class="core-header-search__input-label screen-reader-text">Search</label>

                                <input id="core-header-search-input" type="text" name="searchText" autocomplete="off" class="core-header-search__input" placeholder="ابحث عن الافراد هنا" aria-label="Search field">

                                <button class="core-header-search__submit" type="submit" title="Submit search">
                                    <span class="core-header-search__submit-icon" aria-hidden="true"></span>
                                </button>

                            </div>
                            <!-- SEARCH INPUT WRAPPER : end -->


                        </form>
                        <!-- SEARCH FORM : begin -->

                    </div>
                    <!-- CORE HEADER SEARCH : end -->


                </div>
            </div>
        </div>
        <!-- CORE HEADER INNER : end -->


        <!-- CORE HEADER BACKGROUND : begin -->
        <div class="core-header__bg core-header__bg--loading">

            <div class="core-header__bg-image" style="background-image: url( {{ asset('files/IMG-20210815-WA0064.jpg') }} );">
                <img src="asset('files/IMG-20210815-WA0064.jpg') }}" class="core-header__bg-img" aria-hidden="true" alt="">
            </div>

            <div class="core-header__bg-overlay" style="opacity: 0.5"></div>

        </div>
        <!-- PAGE BACKGROUND : end -->


    </x-slot>



    <!-- POST CONTENT : begin -->
    <div class="post__content">


        <!-- LINEAGO CTA : begin -->
        <section class="lineago-cta-list lineago-cta-list--4-items">
            <div class="lineago-cta-list__inner">

                <div class="lsvr-container">
                    <ul class="lineago-cta-list__list">



                        <li class="lineago-cta-list__item">

                            <h3 class="lineago-cta-list__item-title">
                                تعرف على<br>افراد العائلة </h3>

                            <a href="{{ route('family.members')}}" class="lineago-cta-list__item-link">
                                <span class="lineago-cta-list__item-label">الذهاب الى افراد العائلة</span>
                                <span class="lineago-cta-list__item-icon" aria-hidden="true"></span>
                            </a>

                        </li>




                        <li class="lineago-cta-list__item">

                            <h3 class="lineago-cta-list__item-title">
                                تصفح شجرة عائلة<br>عبود </h3>

                            <a href="{{ route('family.member', ['id' => 1]) }}" class="lineago-cta-list__item-link">
                                <span class="lineago-cta-list__item-label">الذهاب الى شجرة العائلة</span>
                                <span class="lineago-cta-list__item-icon" aria-hidden="true"></span>
                            </a>

                        </li>




                        <li class="lineago-cta-list__item">

                            <h3 class="lineago-cta-list__item-title">
                                اشهد تاريخ العائلة<br>من خلال الاحداث </h3>

                            <a href="#" class="lineago-cta-list__item-link">
                                <span class="lineago-cta-list__item-label">الذهاب الى تسلسل الاحداث</span>
                                <span class="lineago-cta-list__item-icon" aria-hidden="true"></span>
                            </a>

                        </li>




                        <li class="lineago-cta-list__item">

                            <h3 class="lineago-cta-list__item-title">
                                شاهد صور<br>الماضي &amp; الحاضر </h3>

                            <a href="#" class="lineago-cta-list__item-link">
                                <span class="lineago-cta-list__item-label">فتح معرض الصور</span>
                                <span class="lineago-cta-list__item-icon" aria-hidden="true"></span>
                            </a>

                        </li>



                    </ul>
                </div>

            </div>
        </section>
        <!-- LINEAGO CTA : end -->




        <!-- LINEAGO FAMILY ANNIVERSARIES : begin -->
        <section class="lineago-anniversaries lineago-anniversaries--dark-bg">
            <div class="lineago-anniversaries__inner">
                <div class="lsvr-container">

                    
                    @if(count($featured_people) > 0)
                    <!-- SECTION HEADER : begin -->
                    <header class="lineago-anniversaries__header">

                        <h2 class="lineago-anniversaries__header-title">
                            الشخصيات المميزة </h2>


                        <p class="lineago-anniversaries__header-more">

                            <a href="{{ route('family.member', 1) }}" class="lineago-anniversaries__header-more-link">
                                <span class="lineago-anniversaries__header-more-label">الذهاب لشجرة العائلة</span>
                                <span class="lineago-anniversaries__header-more-icon" aria-hidden="true"></span>
                            </a>

                        </p>


                    </header>
                    <!-- SECTION HEADER : end -->



                    <!-- SECTION GRID : begin -->
                    <div class="lineago-anniversaries__grid">

                        @foreach($featured_people as $person)
                        <!-- GRID COL : begin -->
                        <div class="lineago-anniversaries__grid-col">

                            <!-- GRID ITEM : begin -->
                            <div class="lineago-anniversaries__item">
                                <div class="lineago-anniversaries__item-inner">

                                    <!-- ITEM DATE : begin -->
                                    <!-- <h3 class="lineago-anniversaries__item-date" title="June 26, 2022">

                                        <span class="lineago-anniversaries__item-date-month">
                                            Jun </span>

                                        <span class="lineago-anniversaries__item-date-day">
                                            26 </span>

                                    </h3> -->
                                    <!-- ITEM DATE : end -->

                                    <!-- ITEM CONTENT : begin -->
                                    <div class="lineago-anniversaries__item-content">
                                        <div class="lineago-anniversaries__item-content-inner">

                                            <!-- ITEM TITLE : begin -->
                                            <h4 class="lineago-anniversaries__item-title">
                                                <a href="{{ route('family.member', ['id' => $person->id]) }}" class="lineago-anniversaries__item-title-link">
                                                    {{ $person->name }} </a>
                                            </h4>
                                            <!-- ITEM TITLE : end -->

                                            <!-- ITEM LIFESPAN : begin -->
                                            <p class="lineago-anniversaries__item-lifespan">
                                                {{ $person->dateOfDeath ? '(' . $person->dateOfDeath . ')' : '' }} </p>
                                            <!-- ITEM LIFESPAN : end -->


                                        </div>
                                    </div>
                                    <!-- ITEM CONTENT : end -->

                                    <!-- ITEM THUMB : begin -->
                                    @if($person->photo)
                                    <p class="lineago-anniversaries__item-thumb">
                                        <a href="{{ route( 'family.member', ['id' => $person->id] ) }}" class="lineago-anniversaries__item-thumb-link" style="background-image: url({{ asset($person->photo) }});">
                                            <span class="screen-reader-text">Go to profile page</span>
                                        </a>
                                    </p>
                                    @else
                                    <p class="lineago-anniversaries__item-thumb">
                                        <a href="{{ route( 'family.member', ['id' => $person->id] ) }}" class="lineago-anniversaries__item-thumb-link" style="background-image: url({{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }});">
                                            <span class="screen-reader-text">Go to profile page</span>
                                        </a>
                                    </p>
                                    @endif
                                    <!-- ITEM THUMB : end -->

                                </div>
                            </div>
                            <!-- GRID ITEM : end -->

                        </div>
                        <!-- GRID COL : begin -->
                        @endforeach
                        
                        
                    </div>
                    <!-- SECTION GRID : end -->
                    @endif


                </div>
            </div>
        </section>
        <!-- LINEAGO FAMILY ANNIVERSARIES : end -->



    </div>
    <!-- POST CONTENT : end -->


</x-front-layout>