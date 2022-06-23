<x-front-layout class="core--lsvr_family_member-single core--narrow core--fullwidth core--darker-bg">
    <x-slot name="header">
        <!-- CORE HEADER INNER : begin -->
					<div class="core-header__inner">
						<div class="lsvr-container">
							<div class="core-header__content">
				
				
				
				
								<!-- BREADCRUMBS : begin -->
								<div class="breadcrumbs">
									<div class="breadcrumbs__inner">
				
				
										<nav class="breadcrumbs__nav" aria-label="Breadcrumbs">
											<ul class="breadcrumbs__list">
				
				
												<li class="breadcrumbs__item">
													<span class="breadcrumbs__item-decor" aria-hidden="true"></span>
													<a href="{{ route('family.home') }}" class="breadcrumbs__link">الرئيسيه</a>
												</li>
				
				
												<li class="breadcrumbs__item">
													<span class="breadcrumbs__item-decor" aria-hidden="true"></span>
													<a href="{{ route('family.member', ['id' => $person->id]) }}" class="breadcrumbs__link">اعضاء العائلة</a>
												</li>
				
				
											</ul>
										</nav>
				
				
				
									</div>
								</div>
								<!-- BREADCRUMBS : end -->
				
				
				
								<!-- CORE HEADER CONTAINER : begin -->
								<div class="core-header__container">
				
									<!-- CORE HEADER HEADING : begin -->
									<div class="core-header__heading">
				
										<h1 class="core-header__title">
											{{ $person->name }} </h1>
				
				
									</div>
									<!-- CORE HEADER HEADING : end -->
				
									<!-- CORE HEADER PORTRAIT : begin -->
									<p class="core-header__portrait">
                                        @if($person->photo)
                                        <a href="{{ asset($person->photo) }}" class="core-header__portrait-link lsvr-open-in-lightbox" style="background-image: url({{ asset($person->photo) }});">
											<span class="core-header__portrait-link-inner">
												<img src="{{ asset($person->photo) }}" class="core-header__portrait-img" alt="John Lewis">
											</span>
										</a>
                                        @else
                                        <a href="{{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }}" class="core-header__portrait-link lsvr-open-in-lightbox" style="background-image: url({{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }});">
											<span class="core-header__portrait-link-inner">
												<img src="{{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }}" class="core-header__portrait-img" alt="John Lewis">
											</span>
										</a>
                                        @endif
									</p>
									<!-- CORE HEADER PORTRAIT : end -->
				
				
									<!-- CORE HEADER INFO : begin -->
                                    @if($person->dateOfBirth || $person->dateOfDeath || $person->another_name)
									<p class="core-header__info">
				
				
										<span class="core-header__info-date core-header__info-date--birth" title="Date of birth">
											{{ $person->dateOfBirth ?? '' }} </span>
				
				
				
										<span class="core-header__info-separator">-</span>
				
										<span class="core-header__info-date core-header__info-date--death" title="Date of death">
											{{ $person->dateOfDeath ?? '' }} </span>
				
				
				
										<span class="core-header__info-age">
											{{ $person->another_name ? '('. $person->another_name .')' : ' ' }}  </span>
				
				
									</p>
                                    @endif
									<!-- CORE HEADER INFO : begin -->
				
				
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



    <!-- POST SINGLE : begin -->
    <div class="lsvr_family_member-single">


        <!-- POST : begin -->
        <article class="post post-77 lsvr_family_member type-lsvr_family_member status-publish has-post-thumbnail hentry">
            <div class="post__inner">


                <!-- POST CONTAINER : begin -->
                <div class="post__container">

                    <!-- POST CONTAINER TOGGLE : begin -->
                    <p class="post__container-toggle-wrapper">
                        <button type="button" style="padding-left: 30px;" class="post__container-toggle" aria-controls="post__container-inner" aria-expanded="false" data-label-expand-popup="المعلومات الشخصية" data-label-collapse-popup="اخفاء المعلومات الشخصية">
                            <span class="post__container-toggle-label">معلومات شخصية</span>
                            <!-- <span class="post__container-toggle-icon" aria-hidden="true"></span> -->
                            <i class="la la-arrows-alt la-lg"></i>
                        </button>
                    </p>
                    <!-- POST CONTAINER TOGGLE : end -->

                    <!-- POST CONTAINER INNER : begin -->
                    <div id="post__container-inner" class="post__container-inner" role="group" aria-expanded="false">
                        <div class="lsvr-container">


                            <!-- POST CONTENT : begin -->
                            <!-- <div class="post__content">




                            </div> -->
                            <!-- POST CONTENT : end -->


                            <!-- POST INFO : begin -->
                            <div class="post__info">

                                <!-- POST INFO LIST : begin -->
                                <ul class="post__info-list">



                                    <!-- PLACE OF BIRTH : begin -->
                                    <li class="post__info-item post__info-item--birth-place">

                                        <!-- POST INFO ITEM TITLE : begin -->
                                        <h2 class="post__info-item-title">الاب</h2>
                                        <!-- POST INFO ITEM TITLE : end -->

                                        <!-- POST INFO ITEM TEXT : begin -->
                                        <p class="post__info-item-text">
                                            @if($person->family)
                                                    <a href="{{route('family.member', ['id' => $person->family->father->id])}}">{{$person->family->father->name}}</a>
                                                @else
                                                    ---
                                                @endif </p>
                                        <!-- POST INFO ITEM TEXT : end -->

                                    </li>
                                    <!-- PLACE OF BIRTH : end -->



                                    <!-- PLACE OF DEATH : begin -->
                                    <li class="post__info-item post__info-item--death-place">

                                        <!-- POST INFO ITEM TITLE : begin -->
                                        <h2 class="post__info-item-title">الام</h2>
                                        <!-- POST INFO ITEM TITLE : end -->

                                        <!-- POST INFO ITEM TEXT : begin -->
                                        <p class="post__info-item-text">
                                            @if($person->family)
                                                    <a href="{{route('family.member', ['id' => $person->family->mother->id])}}">{{$person->family->mother->name}}</a>
                                                @else
                                                    ---
                                                @endif </p> </p>
                                        <!-- POST INFO ITEM TEXT : end -->

                                    </li>
                                    <!-- PLACE OF DEATH : end -->



                                    <!-- BURIAL PLACE : begin -->
                                    <li class="post__info-item post__info-item--burial-place">

                                        <!-- POST INFO ITEM TITLE : begin -->
                                        <h2 class="post__info-item-title"> نبذه شخصية </h2>
                                        <!-- POST INFO ITEM TITLE : end -->

                                        <!-- POST INFO ITEM TEXT : begin -->
                                        <p class="post__info-item-text">
                                            {!! $person->note !!}
                                        </p>
                                        <!-- POST INFO ITEM TEXT : end -->

                                    </li>
                                    <!-- BURIAL PLACE : end -->



                                </ul>
                                <!-- POST INFO LIST : end -->

                            </div>
                            <!-- POST INFO : end -->




                            <!-- POST GALLERY : begin -->
                            <div class="post__gallery">

                                <ul class="post__gallery-list lsvr-is-masonry">


                                    <li class="post__gallery-item">

                                        <a href="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_07.jpg" class="post__gallery-item-link lsvr-open-in-lightbox" title="">

                                            <img class="post__gallery-item-img" src="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_07-600x600.jpg" alt="Family">

                                        </a>

                                    </li>


                                    <li class="post__gallery-item">

                                        <a href="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_06.jpg" class="post__gallery-item-link lsvr-open-in-lightbox" title="">

                                            <img class="post__gallery-item-img" src="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_06-600x600.jpg" alt="Family">

                                        </a>

                                    </li>


                                    <li class="post__gallery-item">

                                        <a href="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_05.jpg" class="post__gallery-item-link lsvr-open-in-lightbox" title="">

                                            <img class="post__gallery-item-img" src="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_05-600x600.jpg" alt="Family">

                                        </a>

                                    </li>


                                    <li class="post__gallery-item">

                                        <a href="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_04.jpg" class="post__gallery-item-link lsvr-open-in-lightbox" title="">

                                            <img class="post__gallery-item-img" src="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_04-600x600.jpg" alt="Family">

                                        </a>

                                    </li>


                                </ul>

                            </div>
                            <!-- POST GALLERY : end -->



                        </div>
                    </div>
                    <!-- POST CONTAINER INNER : end -->

                </div>
                <!-- POST CONTAINER : end -->


                <!-- FAMILY TREE : begin -->
                @livewire('family-tree', ['person' => $person]);
                <!-- FAMILY TREE : end -->

                <script type="application/ld+json">
                    {
                        "@context": "http://schema.org",
                        "@type": "Person",
                        "name": "John Lewis"

                            ,
                        "image": {
                            "@type": "ImageObject",
                            "url": "https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2021/12/portrait_01.jpg",
                            "width": "1200",
                            "height": "1200",
                            "thumbnailUrl": "https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2021/12/portrait_01-300x300.jpg"
                        }

                    }
                </script>


            </div>
        </article>
        <!-- POST : end -->


    </div>
    <!-- POST SINGLE : end -->




</x-front-layout>