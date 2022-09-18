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
                                نظام شجرة العائلة </h1>


                            <p class="core-header__subtitle lsvr-secondary-font">
                                مرحبا بكم في نظام شجرة العائلة,


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

                                <input id="core-header-search-input" value="{{ request('searchText') }}" type="text" name="searchText" autocomplete="off" class="core-header-search__input" placeholder="ابحث عن العوائل هنا" aria-label="Search field">

                                <button class="core-header-search__submit" type="submit" title="Submit search">
                                    <!-- <span class="core-header-search__submit-icon" aria-hidden="true"></span> -->
                                    <i class="la la-search"></i>
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

            <div class="core-header__bg-image" style="background-image: url( {{ asset('files/R.png') }} );background-size: contain;">
                <img src="asset('files/R.png') }}" class="core-header__bg-img" aria-hidden="true" alt="">
            </div>

            <div class="core-header__bg-overlay" style="opacity: 0.5"></div>

        </div>
        <!-- PAGE BACKGROUND : end -->


    </x-slot>



    <!-- POST CONTENT : begin -->
    <div class="post__content">






        <!-- LINEAGO FAMILY ANNIVERSARIES : begin -->
        <section class="lineago-anniversaries lineago-anniversaries--dark-bg">
            <div class="lineago-anniversaries__inner">
                <div class="lsvr-container">

                    
                    <!-- SECTION HEADER : begin -->
                    <header class="lineago-anniversaries__header">

                        <h2 class="lineago-anniversaries__header-title">
                            جميع العوائل المسجلة </h2>


                        <!-- <p class="lineago-anniversaries__header-more">

                            <a href="{{ route('family.member', 1) }}" class="lineago-anniversaries__header-more-link">
                                <span class="lineago-anniversaries__header-more-label">الذهاب لشجرة العائلة</span>
                                <span class="lineago-anniversaries__header-more-icon" aria-hidden="true"></span>
                            </a>
                            
                        </p> -->
                        
                        
                    </header>
                    <!-- SECTION HEADER : end -->
                    
                    
                    
                    <!-- SECTION GRID : begin -->
                    <div class="">
                        
                        @if(count($big_families) > 0)
                        @foreach($big_families as $big_family)
                        
                        <p class="lsvr-info-message">
                            <!-- <span class="lsvr-info-message__icon" aria-hidden="true"></span> -->
                            <span style="position: absolute;top: 32px;left: 30px;font-size: 22px;" class="la la-arrow-right"></span>
                            <a href="{{ route('family.member', ['id' => $big_family->main_person_id]) }}">{{ $big_family->name }} </a>
                        </p>
                        
                        @endforeach
                        @else
                        <p class="lsvr-info-message">
                            <!-- <span class="lsvr-info-message__icon" aria-hidden="true"></span> -->
                            <span style="position: absolute;top: 32px;left: 30px;font-size: 22px;" class="la la-arrow-close"></span>
                            <a href="{{ route('family.home') }}"> لا توجد نتائج لهذا البحث عرض جميع العوائل ؟ </a>
                        </p>

                        @endif
                        
                        
                    </div>
                    <!-- SECTION GRID : end -->


                </div>
            </div>
        </section>
        <!-- LINEAGO FAMILY ANNIVERSARIES : end -->



    </div>
    <!-- POST CONTENT : end -->


</x-front-layout>