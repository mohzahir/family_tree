{{-- <section id="user-cards-with-square-thumbnail" class="row mt-2">

    <div class="col-sm-12">
        <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <input type="search" wire:model="searchText" placeholder="بحث" class="form-control">
                    </div>
                </div>
        </div>
    </div>

    @if(count($data) > 0)

        @foreach ($data as $item)
            <div class="col-xl-3 col-md-6 col-12">
                <div class="card box-shadow-1">
                    <div class="text-center">
                        <div class="card-body">
                            <h4 class="card-title">
                                اسره : {{$item->father->name}}
                            </h4>
                            <h6 class="card-subtitle">
                                الام : {{$item->mother->name}}
                            </h6>
                        </div>
                        <div x-data="" class="text-center">
                            <button @click="x = confirm(`هل انت متاكد ؟`); if(x){ $wire.delete({{$item->id}}) }" class="btn btn-social-icon mr-1 mb-1 btn-outline-danger">
                            <span class="la la-trash"></span>
                            </button>
                            <a href="{{ route('family.edit', $item->id) }}" class="btn btn-social-icon mr-1 mb-1 btn-outline-primary">
                            <span class="la la-edit"></span>
                            </a>
                            <a href="{{route('family.show', $item->id)}}" class="btn btn-social-icon mb-1 btn-outline-warning">
                            <span class="la la-eye font-medium-4"></span>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>

        @endforeach
        @else
            <div class="text-center">
                <h3>لا توجد بيانات</h3>
            </div>
    @endif
    <div class="col-12 mb-4">
        <div style="display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-around;">
            {{ $data->links() }}
        </div>
    </div>
</section> --}}



<section class="row">


    <div class="col-sm-12">
        <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <input type="search" wire:model="searchText" placeholder="بحث" class="form-control">
                    </div>
                </div>
        </div>
    </div>

    
    
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <!-- Task List table -->
                    <div class="table-responsive">
                        @if(count($data) > 0)
                        <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الاب</th>
                                    <th>الام</th>
                                    <th>الاجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                    @foreach ($data as $item)
                                <tr>
                                    <td>
                                        {{ $item->id }}
                                    </td>
                                    <td>
                                        <div class="media">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-sm avatar-online rounded-circle">
                                            <img src="{{ asset('template/app-assets/images/portrait/small/avatar-s-2.png') }}" alt="avatar"><i></i></span>
                                        </div>
                                        <div class="media-body media-middle">
                                            <a href="#" class="media-heading">{{$item->father->name}}</a>
                                        </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-sm avatar-online rounded-circle">
                                            <img src="{{ asset('template/app-assets/images/portrait/small/avatar-s-2.png') }}" alt="avatar"><i></i></span>
                                        </div>
                                        <div class="media-body media-middle">
                                            <a href="#" class="media-heading">{{$item->mother->name}}</a>
                                        </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="dropdown">
                                        <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                        <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                            <a href="{{ route('family.edit', $item->id) }}" class="dropdown-item"><i class="ft-edit-2 primary"></i> تعديل</a>
                                            <button @click="x = confirm(`هل انت متاكد ؟`); if(x){ $wire.delete({{$item->id}}) }" class="dropdown-item"><i class="ft-trash-2 danger"></i> حذف</button>
                                            <a href="{{ route('family.show', $item->id) }}" class="dropdown-item"><i class="ft-eye success"></i> معاينه</a>
                                        </span>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>الاب</th>
                                    <th>الام</th>
                                    <th>الاجراءات</th>
                                </tr>
                            </tfoot>
                        </table>
                        @else
                            <div class="text-center">
                                <h3>لا توجد بيانات</h3>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mb-4">
        <div style="display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-around;">
            {{ $data->links() }}
        </div>
    </div>
</section>