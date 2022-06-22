<x-front-layout class="core--search-page core--narrow core--darker-bg">
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
								نتائج البحث </h1>


							<p class="core-header__subtitle lsvr-secondary-font">
								{{ $searchText }} </p>


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

			<div class="core-header__bg-image" style="background-image: url( 'https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/header_bg_01.jpg' );">
				<img src="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/header_bg_01.jpg" class="core-header__bg-img" aria-hidden="true" alt="">
			</div>

			<div class="core-header__bg-overlay" style="opacity: 0.2"></div>

		</div>
		<!-- PAGE BACKGROUND : end -->




	</x-slot>



	<!-- SEARCH PAGE : begin -->
	<div class="search-page">

		<!-- FORM : begin -->
		<div class="search-page__form">


			<!-- SEARCH FORM : begin -->
			<form class="lsvr-search-form" action="{{ route('family.home') }}" method="get" role="search">
				@csrf
				<div class="lsvr-search-form__inner">
					<div class="lsvr-search-form__input-wrapper">

						<label class="lsvr-search-form__input-label screen-reader-text" for="lsvr-search-form__input-694">بحث:</label>

						<input id="lsvr-search-form__input-694" class="lsvr-search-form__input" type="text" name="searchText" value="{{ $searchText }}" placeholder="ابحث عن الافراد" aria-label="Search field">

						<button class="lsvr-search-form__submit" type="submit" title="Submit search">
							<span class="lsvr-search-form__submit-icon" aria-hidden="true"></span>
						</button>

					</div>
				</div>
			</form>
			<!-- SEARCH FORM : end -->
		</div>
		<!-- FORM : end -->


		@if(count($persons) > 0)
		@foreach($persons as $person)
		<p class="lsvr-info-message">
			<span class="lsvr-info-message__icon" aria-hidden="true"></span>
			<a href="{{ route('family.member', ['id' => $person->id]) }}">{{ $person->name }}</a>
		</p>
		@endforeach
		@else
		<p class="lsvr-info-message">
			<span class="lsvr-info-message__icon" aria-hidden="true"></span>
			لا توجد نتائج ل &quot;{{ $searchText }}&quot;
		</p>

		@endif

	</div>
	<!-- SEARCH PAGE : end -->


</x-front-layout>