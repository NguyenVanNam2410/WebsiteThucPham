@extends('frontend.admin')
@section('css')
    <link rel="stylesheet" href="{{asset('login/css2.css')}}">
@endsection
@section('content')
    <div id="content">
    <div class="banner__compare">
        <div class="grid wide">
            <div class="banner__compare--title">
                <ul class="compare__banner">
                    <li>
                        <a href="home.html">Trang chủ /</a>
                    </li>
                    <li>
                        <a href="#" class="compare__banner--news">Thông tin đơn hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cart">
        <div class="cart__header">
            <div class="grid wide">
                <ul class="cart__header--post">
                    <li>
                        <span class="cart__number active">1</span>
                        <a href="#">Thông tin đơn hàng</a>
                    </li>
                    <li>
                        <span class="cart__number">2</span>
                        <a href="#">Hình thức thanh toán</a>
                    </li>
                    <li>
                        <span class="cart__number">3</span>
                        <a href="#">Hoàn thành</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cart__form">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-8 m-8 c-12">
                        <div class="cart__address">
                            <div class="cart__form--item">
                                <ul class="cart__label">
                                    <li>
                                        <a href="#cart__1" class="cart__link active">Địa chỉ giao hàng</a>
                                    </li>
                                    <li>
                                        <a href="#cart__2" class="cart__link" >Đăng nhập</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart__post">
                                <div id="cart__1" class="cart__posts cart__address--item active">
                                    <form action="{{route('HomeController.PostCart')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col l-6 m-6 c-12">
                                                <div class="cart__address__1">
                                                    @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <input type="text" name="name"  class="@error('name') is-invalid @enderror" placeholder="Họ và tên">
                                                    @error('email')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <input type="text" name="email" class="@error('email') is-invalid @enderror" placeholder="Email">
                                                    <select name="province" id="province" class="choose province">
                                                        <option value="0">
                                                            -- Chọn Quận huyện -- 
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col l-6 m-6 c-12">
                                                <div class="cart__address__2">
                                                    @error('SDT')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <input type="text" name="SDT"  class="@error('SDT') is-invalid @enderror" placeholder="Số điện thoại">
                                                    <select name="city" id="city" class="choose city">
                                                        <option value="">
                                                            -- Chọn thành phố -- 
                                                        </option>
                                                        @foreach ($city as $key => $itemCity)
                                                            <option value="{{$itemCity->matp}}">{{$itemCity->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <select name="wards" id="wards" class="wards">
                                                        <option>
                                                            -- Chọn phường xã --
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col l-12 m-12 c-12">
                                                <div class="cart__address__3">
                                                    @error('address')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <input type="text" name="address"  class="@error('address') is-invalid @enderror" placeholder="Địa chỉ">
                                                    <textarea name="note" placeholder="Ghi chú"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart__button">
                                            <button type="submit">tiếp tục thanh toán <i class="fas fa-arrow-right submitAjax"></i></button>
                                        </div>
                                    </form>
                                    
                                </div>
                                <div id="cart__2" class="cart__posts cart__address--2">
                                    <div class="row">
                                        <div class="col l-12 m-12 c-12">
                                            <form action="" method="post">
                                                <input class="cart__fb" type="text" placeholder="Tên đăng nhập hoặc email">
                                                <input  class="cart__fb" type="text" placeholder="mật khẩu">
                                                <div class="cart__bt">
                                                    <button type="submit"><i class="fas fa-sign-in-alt"></i> Đăng nhập</button>
                                                </div>
                                            </form>
                                            <p class="cart__text">hoặc</p>
                                        </div>
                                        <div class="col l-12 m-12 c-12">
                                            <div class="cart__facebook fb">
                                                <a href="#"><i class="fab fa-facebook-f"></i> Đăng nhập bằng facebook</a>
                                            </div>
                                            <div class="cart__facebook gg">
                                                <a href="#"><i class="fab fa-google"></i> Đăng nhập bằng google</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-4 m-4 c-12">
                        <div class="cart__information">
                            <h2>Thông tin đơn hàng</h2>
                            @if (Session::has("thongbao"))
                                <div class="alert1 alert-success">{{Session::get("thongbao")}}</div>
                            @endif
                            <div id= "list_cart">
                                @if(Session::has("Cart") != null)
                                    @foreach (Session::get("Cart")->products as $item)
                                        
                                        <div class="cart__product">
                                            <a href="{{route('HomeController.details_product',$item['productInfo']->id)}}" class="cart__product--img">
                                                <img src="{{asset('storage/images/product/'.$item['productInfo']->image)}}" alt="" srcset="">
                                            </a>
                                            <div class="cart__product__title">
                                                <div class="cart__price">
                                                    @if($item['productInfo']->sale == 0)
                                                        <p>{{number_format($item['productInfo']->price, 0 ,",", "." )}}đ</p>
                                                        <p class="cart__price--label"></p>
                                                    @else
                                                        <p>{{number_format( ((100 - $item['productInfo']->sale) * ($item['productInfo']->price) / 100 ), 0 ,",", "." )}}đ </p>
                                                        <p class="cart__price--label">{{number_format($item['productInfo']->price, 0 ,",", "." )}}đ</p>
                                                    @endif  
                                                </div>
                                                <h3>{{$item['productInfo']->name}}</h3>
                                                <div class="cart__product--number">
                                                    <p>số lượng: </p>
                                                    <p class="cart__product--number--label">{{$item['quanity']}}</p>
                                                </div>
                                            </div>
                                            <div class="cart__icon">
                                                <a class="close__cart fas fa-times" onclick="DeleteListItem({{$item['productInfo']->id}})"></a>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="cart__money">
                                        <p>Tổng cộng:</p>
                                        <p>{{number_format(Session::get("Cart")->TotalPrice, 0 ,",", "." )}} đ</p>
                                    </div>

                                    <div class="cart__voucher">
                                        <h4>Sử dụng voucher</h4>
                                        <div class="cart__voucher--item">
                                            <button><i class="far fa-trash-alt"></i></button>
                                            <input type="text">
                                            <button><i class="fas fa-check"></i></button>
                                        </div>
                                    </div>
                                    <div class="into__money">
                                        <p>thành tiền</p>
                                        <p class="cart__product--number--label">{{number_format(Session::get("Cart")->TotalPrice, 0 ,",", "." )}} đ</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection