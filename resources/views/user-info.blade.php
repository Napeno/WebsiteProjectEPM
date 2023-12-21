
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/User/user-info.css') }}">
@endpush
    @extends('layouts.app')
    @section('content')
        <div class="customer-layout">
            <div class="col-left">
                <div class="col-left-head">
                    <div class="tag-info order">
                        <img width="74px" height="74px" src="{{ asset('assets/img/User/layouts/curnonlogo.svg') }}">
                        @if(session()->has('user_session'))
                    
                            <h1>{{session('user_session')->last_name}} {{session('user_session')->first_name}}</h1>
                        @endif 
    
                        @if (session('login_success'))
                            <div class="py-2 bg-green-200 rounded-sm px-4 text-green-800 mb-2"><p>{{ session('login_success') }}</p></div>
                        @endif
                    </div>
                </div>
                <div class="col-left-contents">
                    <ul class="tab-links">
                        <div class="tab-link-item">
                                <a href="{{route("user.orders")}}" class="nav">
                                    <div class="tablinks-left">
                                    <img width="32px" height="32px" src="{{ asset('assets/img/User/user-info/product.png') }}">
                                    Đơn hàng của tôi
                                </div>
                                    <img width="12px" height="12px"  src="{{ asset('assets/img/User/Blog/arrow.png') }}">
                                </a>
                        </div>
                        <div class="tab-link-item">
                            <a href="{{route("user.profile")}}" class="nav">
                                <div class="tablinks-left">
                                    <img width="32px" height="32px"  src="{{ asset('assets/img/User/user-info/setting.png') }}">
                                    Cài đặt tài khoản
                                </div>
                                <img width="12px" height="12px"  src="{{ asset('assets/img/User/Blog/arrow.png') }}">
                            </a>
                        </div>
                        <div class="tab-link-item">
                            <form method="POST" action={{route('user.post.logout')}}>
                                @csrf
                                <button type="submit" class="nav">
                                   <div class="tablinks-left">
                                    <img width="32px" height="32px"  src="{{ asset('assets/img/User/user-info/logout.png') }}">
                                    Đăng xuất
                                   </div>
                                    <img width="12px" height="12px"  src="{{ asset('assets/img/User/Blog/arrow.png') }}">
                                </button>
                            </form>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-right">
                <div id="user" class="user-info">
                    <h2 style="margin-bottom: 6%;">Thông tin tài khoản</h2>
                    @if (session('update_success'))
                        <div class="message"><p>{{ session('update_success') }}</p></div>
                    @endif

                    <div class="user-infor infor-items">
                        <div class="info-item">
                            <p>Email</p>
                            <p class="bold">{{session('user_session')->email}}</p> 
                        </div>
                        <div class="info-item">
                            <p>Mật khẩu</p> 
                            <p class="bold">*****</p> 
                        </div>
                    </div>
            </div>
        </div>
    </div>
    @endsection
