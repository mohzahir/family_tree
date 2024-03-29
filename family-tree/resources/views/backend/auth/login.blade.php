<x-guest-layout>
        <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="col-md-4 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header border-0">
                    <div class="card-title text-center">
                        <div class="p-1">
                        <img src="../../../template/app-assets/images/logo/logo-dark.png" alt="branding logo">
                        </div>
                    </div>
                    {{-- <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                        <span>Easily Using</span>
                    </h6> --}}
                    </div>
                    <div class="card-content">
                    {{-- <div class="card-body pt-0 text-center">
                        <a href="#" class="btn btn-social mb-1 mr-1 btn-outline-facebook">
                        <span class="la la-facebook"></span>
                        <span class="px-1">facebook</span>
                        </a>
                        <a href="#" class="btn btn-social mb-1 mr-1 btn-outline-google">
                        <span class="la la-google-plus font-medium-4"></span>
                        <span class="px-1">google</span>
                        </a>
                    </div> --}}
                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2">
                        <span>قم بادخال بيانات الحساب</span>
                    </p>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" action="{{route('login.post')}}" method="POST">
                            @csrf
                        <fieldset class="form-group floating-label-form-group">
                            <label for="user-name">الايميل</label>
                            <input type="text" class="form-control" name="email" id="user-name" placeholder="admin@example.com">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group mb-1">
                            <label for="user-password">كلمة السر</label>
                            <input type="password" class="form-control" name="password" id="user-password" placeholder="****">
                        </fieldset>
                        <div class="form-group row">
                            <div class="col-md-6 col-12 text-center text-sm-left">
                            <fieldset>
                                <input type="checkbox" id="remember-me" class="chk-remember">
                                <label for="remember-me"> تذكرني</label>
                            </fieldset>
                            </div>
                            <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">نسيت كلمة السر?</a></div>
                        </div>
                        <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> دخول</button>
                        </form>
                    </div>
                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                        <span>تسجيل عائلة جديدة ?</span>
                    </p>
                    <div class="card-body">
                        <a href="{{ route('register') }}" class="btn btn-outline-danger btn-block"><i class="ft-user"></i> تسجيل عائلة</a>
                    </div> 
                    </div>
                </div>
                </div>
            </div>
        </section>
</x-guest-layout>