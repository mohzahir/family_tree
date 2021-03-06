
<section id="user-cards-with-square-thumbnail" class="row mt-2">
    <div class="col-sm-12">
        <div class="card">
            {{-- <div class="card-content"> --}}
                <div class="card-body">

                    <div class="form-group">
                        <input type="search" wire:model="searchText" placeholder="بحث" class="form-control">
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>
    @if(count($data) > 0)
    
        @foreach ($data as $item)
            <div class="col-xl-3 col-md-6 col-12">
                
                <div class="card box-shadow-1">
                    <div class="text-center">
                        <div class="card-body">
                            @if ($item->photo)
                                <img src="{{asset($item->photo)}}" class="rounded-circle  height-150" alt="Card image">
                            @else
                                <img src="../../../template/app-assets/images/portrait/medium/avatar-m-4.png" class="rounded-circle  height-150" alt="Card image">
                            @endif
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                الاسم : {{$item->name}}
                            </h4>
                            @if($item->family)
                            <h6 class="card-subtitle">
                                الاب : {{$item->family->father->name ?? null}} <br>
                                الام : {{$item->family->mother->name ?? null}}
                            </h6>
                            @endif
                        </div>
                        <div x-data="" class="text-center">
                            <button @click="x = confirm(`هل انت متاكد ؟`); if(x){ $wire.delete({{$item->id}}) }" class="btn btn-social-icon mr-1 mb-1 btn-outline-danger">
                            <span class="la la-trash"></span>
                            </button>
                            <a href="{{route('person.edit', $item->id)}}" class="btn btn-social-icon mr-1 mb-1 btn-outline-primary">
                            <span class="la la-edit"></span>
                            </a>
                            <a href="{{route('person.show', $item->id)}}" class="btn btn-social-icon mb-1 btn-outline-warning">
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
                {{-- {{dd($data)}} --}}
                <div style="display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: space-around;">
                    {{ $data->links() }}
                </div>
            </div>
        </section>
    