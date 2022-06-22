<x-front-layout class="core--darker-bg core--narrow-header">
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
                                افراد العائلة </h1>


                            <p class="core-header__subtitle lsvr-secondary-font">
                                افراد عائلة<br>عبود </p>


                        </div>
                        <!-- CORE HEADER HEADING : end -->


                    </div>
                    <!-- CORE HEADER CONTAINER : end -->


                </div>
            </div>
        </div>
        <!-- CORE HEADER INNER : end -->


        <!-- CORE HEADER BACKGROUND : begin -->
        <div class="core-header__bg core-header__bg--loading">

            <div class="core-header__bg-image" style="background-image: url( 'https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/header_bg_01_blur.jpg' );">
                <img src="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/header_bg_01_blur.jpg" class="core-header__bg-img" aria-hidden="true" alt="">
            </div>

            <div class="core-header__bg-overlay" style="opacity: 0.2"></div>

        </div>
        <!-- PAGE BACKGROUND : end -->
    </x-slot>

    <!-- POST ARCHIVE : begin -->
    <div class="lsvr_family_member-archive lsvr_family_member-archive--grid lsvr_family_member-archive--5-cols lsvr_family_member-archive--has-search lsvr_family_member-archive--has-sorting lsvr_family_member-archive--has-options">

        <!-- ARCHIVE OPTIONS : begin -->
        <div class="post-archive-options">
            <div class="post-archive-options__inner">


                <!-- SEARCH : begin -->
                <div class="post-archive-options__search">

                    <form class="post-archive-options__search-form" action="{{ route('family.members') }}" method="get" role="search">
                        <div class="post-archive-options__search-form-inner">
                            <div class="post-archive-options__search-input-wrapper">


                                <label class="post-archive-options__search-input-label screen-reader-text" for="post-archive-options__search-input">
                                    بحث:</label>

                                <input id="post-archive-options__search-input" class="post-archive-options__search-input" type="text" name="searchText" placeholder="ابحث عن افراد العائلة هنا" aria-label="Search field" value="{{ request('searchText') }}">

                                <button class="post-archive-options__search-submit" type="submit" title="Submit search">
                                    <span class="post-archive-options__search-submit-icon" aria-hidden="true"></span>
                                </button>

                            </div>
                        </div>
                    </form>

                </div>
                <!-- SEARCH : end -->



                <!-- SORTING : begin -->
                <div class="post-archive-options__sorting">

                    <h5 class="screen-reader-text">
                        الترتيب حسب </h5>

                    <ul class="post-archive-options__sorting-list">



                        <li class="post-archive-options__sorting-item post-archive-options__sorting-item--asc post-archive-options__sorting-item--birth">

                            <a href="https://preview.lsvr.sk/lineago/family/?order=birth_asc" class="post-archive-options__sorting-item-link" title="Sort by birth date, ascending">
                                <span class="post-archive-options__sorting-item-icon" aria-hidden="true"></span>
                                <span class="post-archive-options__sorting-item-label">تاريخ الميلاد</span>
                            </a>

                        </li>




                        <li class="post-archive-options__sorting-item post-archive-options__sorting-item--asc post-archive-options__sorting-item--first_name">

                            <a href="https://preview.lsvr.sk/lineago/family/?order=first_name_asc" class="post-archive-options__sorting-item-link" title="Sort by first name, ascending">
                                <span class="post-archive-options__sorting-item-icon" aria-hidden="true"></span>
                                <span class="post-archive-options__sorting-item-label">الاسم</span>
                            </a>

                        </li>




                        <li class="post-archive-options__sorting-item post-archive-options__sorting-item--asc post-archive-options__sorting-item--last_name">

                            <a href="https://preview.lsvr.sk/lineago/family/?order=last_name_asc" class="post-archive-options__sorting-item-link" title="Sort by last name, ascending">
                                <span class="post-archive-options__sorting-item-icon" aria-hidden="true"></span>
                                <span class="post-archive-options__sorting-item-label">اللقب</span>
                            </a>

                        </li>



                    </ul>

                </div>
                <!-- SORTING : end -->


            </div>
        </div>
        <!-- ARCHIVE OPTIONS : end -->



        <!-- POST ARCHIVE LIST : begin -->
        <div class="post-archive__list">


            <!-- POST ARCHIVE GRID : begin -->
            <div class="post-archive__grid">


                @foreach($people as $person)
                <!-- POST ARCHIVE GRID COL : begin -->
                <div class="post-archive__grid-col">

                    <!-- POST : begin -->
                    <article class="post post-221 lsvr_family_member type-lsvr_family_member status-publish has-post-thumbnail hentry">
                        <div class="post__inner">

                            <!-- POST THUMB : begin -->
                            <div class="post__thumb">
                                @if($person->photo)
                                <a href="{{ asset($person->photo) }}" class="post__thumb-link" style="background-image: url( {{ asset($person->photo) }} );">
                                    <span class="screen-reader-text">Go to profile page</span>
                                </a>
                                @else
                                <a href="{{ asset($person->photo) }}" class="post__thumb-link" style="background-image: url( {{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }} );">
                                    <span class="screen-reader-text">Go to profile page</span>
                                </a>
                                @endif

                            </div>
                            <!-- POST THUMB : end -->

                            <!-- POST CONTENT : begin -->
                            <div class="post__content">
                                <div class="post__content-inner">

                                    <!-- POST TITLE : begin -->
                                    <h2 class="post__title">
                                        <a href="{{ route('family.member', ['id' => $person->id]) }}" class="post__title-link">
                                            {{ $person->name }} </a>
                                    </h2>
                                    <!-- POST TITLE : end -->


                                    <!-- POST DATE : begin -->
                                    <p class="post__date">
                                        ({{ $person->dateOfBirth }}) </p>
                                    <!-- POST DATE : end -->


                                </div>
                            </div>
                            <!-- POST HEADER : end -->

                        </div>
                    </article>
                    <!-- POST : end -->

                </div>
                <!-- POST ARCHIVE GRID COL : end -->
                @endforeach



            </div>
            <!-- POST ARCHIVE GRID : end -->


        </div>
        <!-- POST ARCHIVE LIST : end -->



    </div>
    <!-- POST ARCHIVE : end -->




</x-front-layout>