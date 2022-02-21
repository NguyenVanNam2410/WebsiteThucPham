<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/css1/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/grid1.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!--  css OWL -->
    <link rel="stylesheet" href="{{asset('frontend/javascript/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/javascript/owlcarousel/assets/owl.theme.default.min.css')}}">
</head>

<body>
    <!-- header -->
    <div class="header__system hide-on-mobile">
        <div class="grid wide">
            <div class="header__system--nav">
                <p class="header__system--title">
                    free shipping on every demestic order of $40 or more!
                </p>
                <ul class="header__system--item">
                    <li class="header__system--login"><a href="{{route('HomeController.login')}}" class="header__system--login--link">Đăng nhập</a></li>
                    <li class="header__system--registration"><a href="#" class="header__system--login--link">Đăng kí tài khoản</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="menu__child ">
        <div class="grid wide">
            <div class="menu__child--item">
                <div class="menu__child--img">
                    <img src="image/logo.png" alt="" srcset="">
                </div>
                <ul class="navbar__child">
                    <li>
                        <a href="#" class="menu__child--link">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('HomeController.cart')}}" class="menu__child--link">
                            <i class="fas fa-shopping-basket"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu__child--link">
                            <i class="fas fa-bars icon_child"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <header class="header hide-on-mobile">
        <div class="grid wide">
            <div class="header__banner">
                <div class="header__logo">
                    <a href=""><img class="header__image" src="{{asset('frontend/image/logo.png')}}" alt="" srcset=""></a>
                </div>
                <div class="header__title">
                    <h3 class="padding__logo">new daily holiday deals</h3>
                    <p>24 house only - ends midnight!</p>
                    <p class="header__title--p">no promo code required</p>
                </div>
                <div class="header__contact">
                    <div class="header__contact--item">
                        <div class="header__contact--phone">
                            <i class="header--icon fas fa-phone-alt"></i>
                             (+84)3999-61768
                        </div>
                        <div class="header__contact--mail">
                            <i class="header--icon fas fa-envelope"></i>
                             nguyenvankhangnd123@gmail.com
                        </div>
                    </div>
                    <div class="header__contact--search">
                        <form action="" class="header__contact--search-item">
                            <input type="text" name="key" class="header__contact--search--post" placeholder="Từ khóa tìm kiếm" autocomplete="off">
                            {{--  <button class="header__contact--search-icon">
                                <i class="fas fa-search"></i>
                            </button>     --}}
                            <div class="search__child-ajax">


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu" class="hi hide-on-mobile">
            <div class="grid wide">
                <nav class="header__navbar">
                    <ul class="header__navbar--item">
                        <li class="header__navbar--link"><a href="{{route('HomeController.index')}}" class="header__navbar--label">Trang chủ</a></li>
                        <li class="header__navbar--link">
                            <a href="{{route('HomeController.product')}}" class="header__navbar--label">cửa hàng
                            <i class="fas fa-caret-down"></i></a>
                            <div class="header__child--item">
                                
                                {{-- dd($menus); --}}
                                @foreach ($menus as $menu)
                                    <ul class="header__child">
                                        <li class="header__child--post">
                                            <a  class="header__child--link">{{$menu->name}}</a>
                                        </li>
                                        @foreach ($menu->menu_child as $item)
                                            <li>
                                                <a href="{{route('HomeController.products',$item->id)}}" class="header__child--link">{{$item->name}}</a>
                                            </li>
                                        @endforeach
                                        {{-- <li>
                                            <a href="product.html" class="header__child--link">Rau-Cu</a>
                                        </li>
                                        <li>
                                            <a href="product.html" class="header__child--link">Nấm</a>
                                        </li> --}}
                                    </ul>
                                    
                                @endforeach
                                {{-- <ul class="header__child">
                                    <li class="header__child--post">
                                        <a href="product.html" class="header__child--link">Thịt-Hải Sản</a>
                                    </li>
                                    <li>
                                        <a href="product.html" class="header__child--link">Thịt</a>
                                    </li>
                                    <li>
                                        <a href="product.html" class="header__child--link">Thủy-Hải Sản</a>
                                    </li>
                                   
                                </ul>
                                <ul class="header__child">
                                    <li class="header__child--post">
                                        <a href="product.html" class="header__child--link">Trứng-Gạo</a>
                                    </li>
                                    <li>
                                        <a href="product.html" class="header__child--link">Trứng </a>
                                    </li>
                                    <li>
                                        <a href="product.html" class="header__child--link">gạo</a>
                                    </li>
                                </ul> --}}
                            </div>

                        </li>
                        <li class="header__navbar--link">
                            <a href="{{route('HomeController.news_home')}}" class="header__navbar--label">tin tức
                                <i class="fas fa-caret-down"></i>
                            </a>
                            <div class="header__child--news">
                                <ul class="header__child--newItem">
                                    @foreach ($post_categories as $post_news)
                                        <li class="header__child--newItem--link">
                                            <a href="{{route('HomeController.news',$post_news->id)}}" class="header__child--newItem--label">{{$post_news->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="header__navbar--link"><a href="{{route('HomeController.introduce')}}" class="header__navbar--label">giới thiệu</a></li>
                        <li class="header__navbar--link"><a href="{{route('HomeController.contact')}}" class="header__navbar--label">liên hệ</a></li>
                    </ul>
                    <ul class="header__navbar--icon">
                        <li class="header__navbar--icon--label">
                            <a class="header__nav--icon fas fa-sync-alt" href="{{route('HomeController.compare')}}">
                                <div class="header__label--amount">
                                    <label  class="header__label" for="">0</label>
                                </div>
                            </a>
                        </li>
                        <li class="header__navbar--icon--label">
                            <div class="header__nav--icon fas fa-shopping-basket">
                                <div class="header__label--amount">
                                    @if(Session::has("Cart") != null)
                                        <label  class="header__label" id="total_quanity" for="">{{Session::get("Cart")->TotalQuanity}}</label>
                                    @else
                                        <label  class="header__label" for="" id="total_quanity">0</label>
                                    @endif
                                </div>
                                <div class="cart__child">
                                    <div id="change-item-cart">
                                        @if (Session::has("Cart") != null)
                                            @foreach (Session::get("Cart")->products as $item)
                                                <div class="cart__child--item">
                                                    <div class="cart__child--img">
                                                        <img src="{{asset('storage/images/product/'.$item['productInfo']->image)}}" alt="" srcset="">
                                                    </div>
                                                    <div class="cart__child--label">
                                                        <h3>{{$item['productInfo']->name}}</h3>
                                                        
                                                        @if($item['productInfo']->sale == 0)
                                                                <p> {{$item['quanity']}} x {{number_format($item['productInfo']->price, 0 ,",", "." )}}đ</p>
                                                        @else
                                                                <p> {{$item['quanity']}} x   {{number_format( ((100 - $item['productInfo']->sale) * ($item['productInfo']->price) / 100 ), 0 ,",", "." )}}đ </p>
                                                        @endif  
                                                        
                                                    </div>
                                                    <div class="cart__child--icon">
                                                        <i class="fas fa-times icon__cart" data-id = "{{$item['productInfo']->id}}"></i>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="cart__child--money">
                                                <p>Thành tiền</p>
                                                <p>{{number_format(Session::get("Cart")->TotalPrice, 0 ,",", "." )}} đ</p>
                                            </div> 
                                        @endif
                                    </div>
                                    <div class="cart__child--bottom">
                                        <a href="{{route('HomeController.cart')}}" >Thông tin giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>