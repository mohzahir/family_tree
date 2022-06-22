<x-app-layout>

    @push('styles')
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="../../../template/app-assets/css-rtl/pages/users.css">
        <!-- END Page Level CSS-->
    @endpush

    <x-slot name="header">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">لوحة التحكم</a>
                    </li>
                    <li class="breadcrumb-item active">ادارة الافراد
                    </li>
                </ol>
                </div>
            </div>
            <h3 class="content-header-title mb-0">ادارة الافراد</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ft-settings icon-left"></i> الخيارات
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="{{ route('person.create') }}">اضافة فرد جديده</a>
                    <a class="dropdown-item" href="component-buttons-extended.html">Buttons</a>
                </div>
            </div>
        </div>
    </x-slot>

    @if (session()->has('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif
    @livewire('people-list')
    

    @push('scripts')
        <!-- BEGIN PAGE LEVEL JS-->
        <!-- END PAGE LEVEL JS-->
    @endpush
</x-app-layout>