<x-app-layout>

    @push('styles')
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('template/app-assets/vendors/css/forms/selects/select2.min.css') }}">
        <!-- END Page Level CSS-->
    @endpush

    <x-slot name="header">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">لوحة التحكم</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('person.index') }}">ادارة الافراد</a>
                    </li>
                    @if(!request()->routeIs('person.edit'))
                        <li class="breadcrumb-item active"> اضافة
                        </li>
                    @else
                        <li class="breadcrumb-item active"> تعديل
                        </li>
                    @endif
                </ol>
                </div>
            </div>
            @if(!request()->routeIs('person.edit'))
                <h3 class="content-header-title mb-0">اضافه فرد جديد</h3>
            @else
                <h3 class="content-header-title mb-0">تعديل فرد</h3>
            @endif
        </div>
        <div class="content-header-right col-md-6 col-12">
            {{-- <div class="float-md-right" role="group">
                <a href="{{ route('person.index') }}" class="btn btn-info round box-shadow-2 px-2 d-flex" id="btnGroupDrop1">
                    رجوع
                    <i class="la la-chevron-left fa-lg"></i> 
                </a>
            </div> --}}
        </div>
    </x-slot>

    

        <section class="row">
            <div class="col-md-12">

                @include('backend.layout.alerts.validation')

                <div class="card">
                    <div class="card-header">
                        @if(!request()->routeIs('person.edit'))
                            <h4 class="card-title">
                                اضافه فرد
                            </h4>
                        @else
                            <h4 class="card-title">
                                {{$person->name}}
                            </h4>
                        @endif

                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @if(!request()->routeIs('person.edit'))
                            {{-- add page --}}
                            <form action="{{route('person.store')}}" method="POST" enctype="multipart/form-data" class="form">
                            @else
                            <form action="{{route('person.update', $person->id)}}" method="POST" enctype="multipart/form-data" class="form">
                            @method('PUT')
                            @endif
                                @csrf
                                <div class="form-body">
                                    <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                        <li class="nav-item">
                                        <a class="nav-link active" id="active-tab1" data-toggle="tab" href="#active1" aria-controls="active1" aria-expanded="true">البيانات الشخصية</a>
                                        </li>
                                    </ul>
                                    <div x-data="{
                                        is_dead: false,
                                        cities: [],
                                        async getCountryCities(country_id){
                                            console.log(country_id)
                                            if (country_id) {
                                                console.log('{{ route('getCountryCities') }}' + '/?country_id=' + country_id)
                                                this.cities = await (await fetch('{{ route('getCountryCities') }}' + '/?country_id=' + country_id)).json();
                                    
                                                // log out all the posts to the console
                                                console.log(this.cities);
                                            }else{
                                                this.cities = [];
                                            }
                                        }
                                    }" class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="active1" aria-labelledby="active-tab1" aria-expanded="true">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label for="">الاسم الكامل</label>
                                                        <input class="form-control" type="text" value="{{$person->name ?? null}}" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">اللقب</label>
                                                        <input class="form-control" type="text" value="{{$person->another_name ?? null}}" name="another_name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="companyName">مكان السكن</label>
                                                        <select @change="getCountryCities($($el).val())" type="text" class="form-control" name="country_id" >
                                                            <option value=""></option>
                                                            @foreach($countries as $country)
                                                                <option value="{{$country->id}}" {{($person->country_id ?? null) == $country->id ? 'selected' : ''}}>{{$country->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    @if(!request()->routeIs('person.edit'))
                                                    {{-- add page --}}
                                                    <div class="form-group">
                                                        <label for="companyName">المدينة</label>
                                                        <select class="form-control" name="city_id">
                                                            <option value=""></option>
                                                            <template x-for="city in cities">
                                                                <option :value="city.id" x-text="city.name"></option>
                                                            </template>
                                                        </select>
                                                    </div>
                                                    @else
                                                    {{-- edit page --}}
                                                    <div class="form-group">
                                                        <label for="companyName">المدينة</label>
                                                        <select type="text" class="form-control" name="city_id" >
                                                            <option value=""></option>
                                                            @foreach($cities as $city)
                                                                <option value="{{$city->id}}" {{($person->city_id ?? null) == $city->id ? 'selected' : ''}}>{{$city->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="companyName">تاريخ الميلاد</label>
                                                        <input type="date" class="form-control" name="dateOfBirth" value="{{$person->dateOfBirth ?? null}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="companyName">النوع</label><br>
                                                        <span><input type="radio" class="radio" name="gender" value="male" {{($person->gender ?? null) == 'male' ? 'checked' : ''}}> ذكر</span> 
                                                        <span class="m-3"><input type="radio" class="radio" name="gender" value="female" {{($person->gender ?? null) == 'female' ? 'checked' : ''}}> انثى</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">ملاحظة</label>
                                                        <textarea id="" rows="5" class="form-control" name="note">{{$person->note ?? null}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <fieldset class="form-group">
                                                        <label for="">الصورة الشخصية</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="photo">
                                                            <label class="custom-file-label" for="inputGroupFile01">اختر الصورة</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 d-flex align-items-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" x-init="$el.checked = {{$person->is_dead ?? null}}; is_dead = {{$person->is_dead ?? null}}" @change=" is_dead = $el.checked"  class="checkbox mr-1" name="is_dead">
                                                        <label for="companyName">متوفي ؟</label>
                                                    </div>
                                                </div>
                                                <div x-show="is_dead" x-transition class="col-md-9">
                                                    <div class="form-group">
                                                        <label for="companyName">تاريخ الوفاة</label>
                                                        <input type="date" value="{{$person->dateOfDeath ?? null}}" class="form-control" name="dateOfDeath">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 d-flex align-items-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" {{($person->is_featured ?? null) == '1' ? 'checked' : ''}}  class="checkbox mr-1" name="is_featured">
                                                        <label for=""> شخصية مميزة ؟</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="form-actions">
                                    @if(!request()->routeIs('person.edit'))
                                    <button class="btn btn-rounded btn-success">اضافة</button>
                                    @else
                                    <button class="btn btn-rounded btn-success">تعديل</button>
                                    @endif
                                    <a href="{{route('person.index')}}" class="btn btn-rounded btn-secondary">الغاء</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    

    @push('scripts')
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{ asset('template/app-assets/vendors/js/forms/select/select2.full.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
    @endpush
</x-app-layout>