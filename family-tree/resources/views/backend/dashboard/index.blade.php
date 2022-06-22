<x-app-layout>

    @push('styles')
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('template/app-assets/css-rtl/pages/dashboard-ecommerce.css') }}">
        <!-- END Page Level CSS-->
    @endpush

    <x-slot name="header">
        
    </x-slot>

    <!-- eCommerce statistic -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                <div class="media-body text-left">
                    <h3 class="info">{{ $people_count }}</h3>
                    <h6>عدد الافراد</h6>
                </div>
                <div>
                    <i class="icon-basket-loaded info font-large-2 float-right"></i>
                </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                <div class="media-body text-left">
                    <h3 class="warning">{{ $families_count }}</h3>
                    <h6>عدد الاسر</h6>
                </div>
                <div>
                    <i class="icon-pie-chart warning font-large-2 float-right"></i>
                </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                <div class="media-body text-left">
                    <h3 class="success">146</h3>
                    <h6>New Customers</h6>
                </div>
                <div>
                    <i class="icon-user-follow success font-large-2 float-right"></i>
                </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                <div class="media-body text-left">
                    <h3 class="danger">99.89 %</h3>
                    <h6>Customer Satisfaction</h6>
                </div>
                <div>
                    <i class="icon-heart danger font-large-2 float-right"></i>
                </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!--/ eCommerce statistic -->

    @push('scripts')
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{ asset('template/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
    @endpush
</x-app-layout>