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
                    <li class="breadcrumb-item active"> تفاصيل الافراد
                    </li>
                </ol>
                </div>
            </div>
            <h3 class="content-header-title mb-0">تفاصيل الافراد</h3>
        </div>
    </x-slot>

    <section class="row">
        <div class="col-xl-3 col-md-6 col-12">
            <div class="card border-teal border-lighten-2">
            <div class="text-center">
                <div class="card-body">
                    @if($person->photo)
                        <img src="{{asset($person->photo)}}" class="rounded-circle  height-150" alt="">
                    @else
                        <img src="../../../template/app-assets/images/portrait/medium/avatar-m-4.png" class="rounded-circle  height-150" alt="Card image">
                    @endif
            </div>
                <div class="card-body">
                <h4 class="card-title">{{ $person->name}} {{$person->another_name ? '(' . $person->another_name .')' : ''}}</h4>
                <h4 class="card-title text-success">{{$person->is_featured ? '(شخصية مميزة)' : ''}}</h4>
                <h6 class="card-subtitle text-muted">{{ $person->dateOfBirth}}</h6>
                </div>
                <div x-data class="text-center">
                    <a href="{{ route('person.edit', $person->id) }}" class="btn btn-social-icon mr-1 mb-1 btn-outline-primary">
                        <span class="la la-edit"></span>
                    </a>
                    <button @click="x = confirm(`هل انت متاكد ؟`); if(x){ $refs.destroy_form.submit(); }" class="btn btn-social-icon mr-1 mb-1 btn-outline-danger">
                        <span class="la la-trash"></span>
                    </button>
                    <form x-ref="destroy_form" action="{{ route('person.destroy', $person->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-9 col-md-6 col-12">
            @if (session()->has('message'))
                <div class="alert alert-info">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card box-shadow-1">
                <div class="card-header">
                    
                    <div class="card-content">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                <li class="nav-item">
                                <a class="nav-link active" id="active-tab1" data-toggle="tab" href="#active1" aria-controls="active1" aria-expanded="true">البيانات الشخصية</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="link-tab1" data-toggle="tab" href="#link1" aria-controls="link1" aria-expanded="false">الاخوان</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="active1" aria-labelledby="active-tab1" aria-expanded="true">
                                    <div class="row mt-2">
                                        <div class="col-md-6 ">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  الاب: </strong>
                                                    <span>
                                                        @if($person->family)
                                                            <a href="{{route('person.show', $person->family->father->id)}}">{{$person->family->father->name}}</a>
                                                        @else
                                                            ---
                                                        @endif
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  الام: </strong>
                                                    <span>
                                                        @if($person->family)
                                                            <a href="{{route('person.show', $person->family->mother->id)}}">{{$person->family->mother->name}}</a>
                                                        @else
                                                            ---
                                                        @endif
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  مكان السكن: </strong>
                                                    <span> {{$person->country->name ?? null}} </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  المدينة: </strong>
                                                    <span> {{$person->city->name ?? null}} </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  تاريخ الميلاد: </strong>
                                                    <span> {{$person->dateOfBirth}} </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  ملاحظة: </strong>
                                                    <span> {{$person->note}} </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-3 d-flex align-items-center">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  حاله الوفاه: </strong>
                                                    <span @class(['badge', 'badge-danger' => $person->is_dead, 'badge-success' => !$person->is_dead])> {{$person->is_dead ? 'متوفي' : 'حي'}} </span>
                                                </p>
                                            </div>
                                        </div>
                                        @if($person->is_dead)
                                        <div class="col-md-9">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  تاريخ الوفاة: </strong>
                                                    <span> {{$person->dateOfDeath ?? null}} </span>
                                                </p>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    {{-- @if ($person->photo)
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0 text-center">
                                                    <span> <img src="{{asset($person->photo)}}" alt=""> </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endif --}}
                                </div>
                                <div class="tab-pane" id="link1" role="tabpanel" aria-labelledby="link-tab1" aria-expanded="false">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card collapse-icon accordion-icon-rotate">
                                                <div id="headingCollapse31" class="card-header bg-success">
                                                <a data-toggle="collapse" href="#collapse31" aria-expanded="true" aria-controls="collapse31" class="card-title lead white">اخوان لاب وام</a>
                                                </div>
                                                <div id="collapse31" role="tabpanel" aria-labelledby="headingCollapse31" class="card-collapse collapse show" aria-expanded="true">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="row mt-2">
                                                            <div  class="col-md-6">
                                                                <div class="d-flex justify-content-center align-items-end">
                                                                    <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                                        <p class="m-0">
                                                                            <strong>  عدد الذكور: </strong>
                                                                            <span> {{count($brothers_from_mother_and_father->where('gender', 'male'))}} </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                    
                                                                <div x-ref="sons_container" class="mt-2">
                                                                    @foreach($brothers_from_mother_and_father->where('gender', 'male') as $brother)
                                                                    <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                                        <p class="m-0">
                                                                            <strong>  الاخ: </strong>
                                                                            <span> <a href="{{route('person.show', $brother->id)}}">{{$brother->name}}</a> </span>
                                                                        </p>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="d-flex justify-content-center align-items-end">
                                                                    <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                                        <p class="m-0">
                                                                            <strong>  عدد الاناث: </strong>
                                                                            <span> {{count($brothers_from_mother_and_father->where('gender', 'female'))}} </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div x-ref="daughters_container" class="mt-2">
                                                                    @foreach($brothers_from_mother_and_father->where('gender', 'female') as $sister)
                                                                    <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                                        <p class="m-0">
                                                                            <strong>  الاخت: </strong>
                                                                            <span> <a href="{{route('person.show', $sister->id)}}">{{$sister->name}}</a> </span>
                                                                        </p>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                @if($brothers_from_father != $brothers_from_mother_and_father)
                                                    <div id="headingCollapse32" class="card-header bg-info">
                                                    <a data-toggle="collapse" href="#collapse32" aria-expanded="false" aria-controls="collapse32" class="card-title lead white collapsed"> الاخوة لاب <Strong>({{$person->family->father->name}})</Strong></a>
                                                    </div>
                                                    <div id="collapse32" role="tabpanel" aria-labelledby="headingCollapse32" class="card-collapse collapse" aria-expanded="false">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="row mt-2">
                                                                <div  class="col-md-6">
                                                                    <div class="d-flex justify-content-center align-items-end">
                                                                        <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  عدد الذكور: </strong>
                                                                                <span> {{count($brothers_from_father->where('gender', 'male'))}} </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div x-ref="sons_container" class="mt-2">
                                                                        @foreach($brothers_from_father->where('gender', 'male') as $brother)
                                                                        <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  الاخ: </strong>
                                                                                <span> <a href="{{route('person.show', $brother->id)}}">{{$brother->name}}</a> </span>
                                                                            </p>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="d-flex justify-content-center align-items-end">
                                                                        <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  عدد الاناث: </strong>
                                                                                <span> {{count($brothers_from_father->where('gender', 'female'))}} </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div x-ref="daughters_container" class="mt-2">
                                                                        @foreach($brothers_from_father->where('gender', 'female') as $sister)
                                                                        <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  الاخت: </strong>
                                                                                <span> <a href="{{route('person.show', $sister->id)}}">{{$sister->name}}</a> </span>
                                                                            </p>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                @endif
                                                @if($brothers_from_mother != $brothers_from_mother_and_father)
                                                    <div id="headingCollapse33" class="card-header bg-danger">
                                                    <a data-toggle="collapse" href="#collapse33" aria-expanded="false" aria-controls="collapse33" class="card-title lead white collapsed"> الاخوة لام <Strong>({{$person->family->mother->name}})</Strong></a>
                                                    </div>
                                                    <div id="collapse33" role="tabpanel" aria-labelledby="headingCollapse33" class="card-collapse collapse" aria-expanded="false">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="row mt-2">
                                                                <div  class="col-md-6">
                                                                    <div class="d-flex justify-content-center align-items-end">
                                                                        <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  عدد الذكور: </strong>
                                                                                <span> {{count($brothers_from_mother->where('gender', 'male'))}} </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div x-ref="sons_container" class="mt-2">
                                                                        @foreach($brothers_from_mother->where('gender', 'male') as $brother)
                                                                        <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  الاخ: </strong>
                                                                                <span> <a href="{{route('person.show', $brother->id)}}">{{$brother->name}}</a> </span>
                                                                            </p>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="d-flex justify-content-center align-items-end">
                                                                        <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  عدد الاناث: </strong>
                                                                                <span> {{count($brothers_from_mother->where('gender', 'female'))}} </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div x-ref="daughters_container" class="mt-2">
                                                                        @foreach($brothers_from_mother->where('gender', 'female') as $sister)
                                                                        <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  الاخت: </strong>
                                                                                <span> <a href="{{route('person.show', $sister->id)}}">{{$sister->name}}</a> </span>
                                                                            </p>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                @endif                                                
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row mt-2">
                                        <div  class="col-md-6">
                                            <div class="d-flex justify-content-center align-items-end">
                                                <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                    <p class="m-0">
                                                        <strong>  عدد الذكور: </strong>
                                                        <span> {{count($brothers)}} </span>
                                                    </p>
                                                </div>
                                            </div>
                
                                            <div x-ref="sons_container" class="mt-2">
                                                @foreach($brothers as $brother)
                                                <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                    <p class="m-0">
                                                        <strong>  الاخ: </strong>
                                                        <span> <a href="{{route('person.show', $brother->id)}}">{{$brother->name}}</a> </span>
                                                    </p>
                                                </div>
                                                @endforeach
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-center align-items-end">
                                                <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                    <p class="m-0">
                                                        <strong>  عدد الاناث: </strong>
                                                        <span> {{count($sisters)}} </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div x-ref="daughters_container" class="mt-2">
                                                @foreach($sisters as $sister)
                                                <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                    <p class="m-0">
                                                        <strong>  الاخت: </strong>
                                                        <span> <a href="{{route('person.show', $sister->id)}}">{{$sister->name}}</a> </span>
                                                    </p>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
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