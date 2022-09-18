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
                    <li class="breadcrumb-item active">الإعدادات
                    </li>
                </ol>
                </div>
            </div>
            <h3 class="content-header-title mb-0">الإعدادات</h3>
        </div>
        <!-- <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ft-settings icon-left"></i> الخيارات
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="{{ route('family.create') }}">اضافة اسره جديده</a>
                    <a class="dropdown-item" href="component-buttons-extended.html">Buttons</a>
                </div>
            </div>
        </div> -->
    </x-slot>

    @if (session()->has('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif
    



    <section class="row">
        <div class="col-md-12">

            @include('backend.layout.alerts.validation')

            <div class="card">
                <!-- <div class="card-header">
                    <h4 class="card-title">
                        اضافه فرد
                    </h4>
                </div> -->
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{route('settings.update')}}" method="POST" class="form">
                            @csrf
                            <div class="form-body">
                                <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                    <li class="nav-item">
                                    <a class="nav-link active" id="active-tab1" data-toggle="tab" href="#active1" aria-controls="active1" aria-expanded="true">إعدادات عامة</a>
                                    </li>
                                </ul>
                                <div  class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="active1" aria-labelledby="active-tab1" aria-expanded="true">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">إسم العائلة</label>
                                                    <input class="form-control" type="text" value="{{ $big_family->name }}" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="companyName">الشخصية الأساسية</label>
                                                    <select class="form-control" name="main_person_id">
                                                        <option value="">إختر الشخصية الاساسية للعائلة</option>
                                                        @foreach($big_family_people as $person)
                                                        <option {{ $person->id == $big_family->main_person_id ? 'selected' : '' }} value="{{ $person->id }}">{{ $person->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">ملاحظة</label>
                                                    <textarea id="" rows="5" class="form-control" name="note">{{ $big_family->note }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-rounded btn-success">تحديث</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>





    @push('scripts')
        <!-- BEGIN PAGE LEVEL JS-->
        <!-- END PAGE LEVEL JS-->
    @endpush
</x-app-layout>