
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
                            <a href="#" class="compare__banner--news">Sản phẩm của cửa hàng /</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="news__post1">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-3 m-3 c-12">
                        <div class="product__category_1">
                            <h2>Danh mục sản phẩm</h2>
                            <nav class="nav_product">
                                <ul>
                                    @foreach ($menus as $item)
                                        <li class="nav__product--item">
                                            <a href="#" class="icon__product">{{$item->name}}
                                                <span class="product__hoa--icon fas fa-sort-up"></span>
                                            </a>
                                            <ul class="product__hoa">
                                                @foreach ($item->menu_child as $post)
                                                    <li>
                                                        <a href="{{route('HomeController.products',$post->id)}}">
                                                            <span class="fas fa-chevron-right"></span>
                                                            {{$post->name}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                    {{--  <li class="nav__product--item">
                                        <a href="#" class="icon__product1">
                                            Thịt-hải sản
                                            <span class="product__hoa--thit fas fa-sort-up">
                                            </span>
                                        </a>
                                        <ul class="product__thit">
                                            <li>
                                                <a href="#"> <span class="fas fa-chevron-right"></span>Thịt</a>
                                            </li>
                                            <li>
                                                <a href="#"> <span class="fas fa-chevron-right"></span>Thủy-hải sản</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav__product--item">
                                        <a href="#">trứng</a>
                                    </li>
                                    <li class="nav__product--item">
                                        <a href="#">gạo</a>
                                    </li>  --}}
                                </ul>
                            </nav>
                        </div>
                        <div class="product__category_1 product__category--active">
                            <h2>Tìm kiếm nâng cao</h2>
                            <nav class="nav_product">
                                <ul>
                                    <li class="nav__product--item">
                                        <a href="#" class="">Trạng thái
                                            <span class="product__search--icon fas fa-minus"></span>
                                        </a>
                                        <ul class="product__active active">
                                            <li>
                                                <a href="#">
                                                    <input type="checkbox" name="" id="">
                                                    Mới về
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <input type="checkbox" name="" id="">
                                                    Nổi bật 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <input type="checkbox" name="" id="">
                                                    Đang giảm giá
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <input type="checkbox" name="" id="">
                                                    Còn hàng
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav__product--item">
                                        <a href="#">
                                            Danh mục sản phẩm
                                            <span class="product__category--icon fas fa-minus">
                                            </span>
                                        </a>
                                        <ul class="product__active_1 active">
                                            <li>
                                                <a href="#">
                                                    <input type="checkbox" name="" id="">
                                                    Rau-củ quả
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <input type="checkbox" name="" id="">
                                                    Thịt hải sản
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <input type="checkbox" name="" id="">
                                                    Trứng 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <input type="checkbox" name="" id="">
                                                    Gạo
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav__product--item">
                                        <a href="#">Thương hiệu
                                            <span class="product__trademark--icon fas fa-minus">
                                            </span>
                                        </a>
                                        <ul class="product__active_2 active">
                                            <form action="" method="post">
                                                @foreach ($tags as $tag)
                                                    <li>
                                                        <a href="#">
                                                            <input type="checkbox" id="tag_check_{{$tag->id}}" value="{{$tag->id}}" name="tag_id[]">
                                                            {{$tag->name}}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                            </form>
                                        </ul>
                                            
                                    </li>
                                    <li class="nav__product--item">
                                        <a href="#">Giá sản phẩm
                                            <span class="product__price--icon fas fa-minus">
                                            </span>
                                        </a>

                                    </li>
                                    
                                </ul>
                            </nav>
                        </div>
                        <div class="product__footer--img">
                            <a href="#">
                                <img src="image/product__footer.jpg" alt="" srcset="">
                            </a>
                        </div>
                    </div>
                    <div class="col l-9 m-9 c-12">
                        <div class="product__menu">
                            <div class="product__menu--item">
                                <a href="#product__menus" class="product__menu--lable active">
                                    <span class="fas fa-th-large"></span>
                                </a>
                                <a  href="#product__menu--list" class="product__menu--lable ">
                                    <span class="fas fa-th-list"></span>
                                </a>
                            </div>
                            <form action="">
                                @csrf
                                <select name="sort" id="product__checked" >
                                    <option value="{{Request::url()}}?sort_by=none ">------- sắp xếp -------</option>
                                    <option value="{{Request::url()}}?sort_by=ky_tu_Z">sắp xếp theo tên A-Z</option>
                                    <option value="{{Request::url()}}?sort_by=ky_tu_A">sắp xếp theo tên Z-A</option>
                                    <option value="{{Request::url()}}?sort_by=tang_dan">sắp xếp theo giá tăng dần</option>
                                    <option value="{{Request::url()}}?sort_by=giam_dan">sắp xếp theo giá giảm dần</option>
                                </select>
                            </form>
                        </div>
                        <div class="product__menu--posts">
                            <div id="ajaxCheckbox">

                            </div>
                            <div id="product__menus" class=" products1 products_1 active">
                                @foreach ($products as $item)
                                    <div class="products__menu__post">
                                        <div class="products_image">
                                            @if ($item->sale === 0)
                                                <span class="promotion">HOT</span>
                                            
                                            @else
                                                <span class="promotion">{{$item->sale}} %</span>
                                            @endif
                                            <img class="img_pro" src="{{asset('storage/images/product/'.$item->image)}}" alt="" srcset="">
                                        </div>
                                        <div class="pro_content">
                                            <h3>{{$item->name}}</h3>
                                            <div class="price">
                                                @if ($item->sale === 0)
                                                    <p>{{number_format($item->price, 0 ,",", "." )}} đ</p>
                                                    <p class="price__pro"></p>
                                                @else
                                                    <p>{{number_format(($item->price) * (100 - $item->sale) / 100, 0,",",".")}} đ</p>
                                                    <p class="price__pro">{{number_format($item->price, 0 ,",", "." )}} đ</p>
                                                @endif
                                            </div>
                                        </div>
            
                                        <div class="product__cart">
                                            <div class="products__star">
                                                <p><i class="far fa-star"></i></p>
                                                <p><i class="far fa-star"></i></p>
                                                <p><i class="far fa-star"></i></p>
                                                <p><i class="far fa-star"></i></p>
                                                <p><i class="far fa-star"></i></p>
                                            </div>
                                            <div class="products__action">
                                                <a href="{{route('HomeController.details_product',$item->id)}}" class="product__icon"><i class="far fa-eye"></i></a>
                                                <a href="javascript:"onclick="AddCartItem({{$item->id}})" class="product__icon"><i class="fas fa-shopping-cart"></i></a>
                                                <a href="#" class="product__icon"><i class="fas fa-retweet"></i></a>
                                            </div>
                                            <div class="button1">
                                                <a href="javascript:"  onclick="AddCartItem({{$item->id}})" class="btn1 btn-width"><i class="fas fa-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                @endforeach
                                {{$products->appends(request()->all())->links()}}

                                {{--  @if(Array($products))
                                    
                                @else
                                    {{$products->appends(request()->all())->links()}}
                                @endif  --}}
                            </div>
                            <div id="product__menu--list" class="products1">
                                <div class="row">
                                    @foreach ($products as $item)
                                        <div class="col l-12 m-12 c-12">
                                            <div class="product__list">
                                                <div class="product__list--img">
                                                    <a href="{{route('HomeController.details_product',$item->id)}}">
                                                        <img class="img_pro" src="{{asset('storage/images/product/'.$item->image)}}" alt="" srcset="">
                                                    </a>
                                                    @if ($item->sale === 0)
                                                        <span class="promotion">HOT</span>
                                                    
                                                    @else
                                                        <span class="promotion">{{$item->sale}} %</span>
                                                    @endif
                                                </div>
                                                <div class="product__list--title">
                                                    <h2>{{$item->name}}</h2>
                                                    @if ($item->sale === 0)
                                                        <div class="product__list--price">
                                                            <p>{{number_format($item->price, 0 ,",", "." )}} đ</p>
                                                            <p class="product__list--priceSale"></p>
                                                        </div>
                                                    @else
                                                        <div class="product__list--price">
                                                            <p>{{number_format(($item->price) * (100 - $item->sale) / 100, 0,",",".")}} đ</p>
                                                            <p class="product__list--priceSale">{{number_format($item->price, 0 ,",", "." )}} đ</p>
                                                        </div>
                                                    @endif
                                                    <ul class="product__list--icon">
                                                        <li>
                                                            <a href="{{route('HomeController.details_product',$item->id)}}">
                                                                <i class="fas fa-search"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:" onclick="AddCartItem({{$item->id}})">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fas fa-retweet"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="product__list--item">
                                                        <li class="product__list--item--link">
                                                            {!!$item->title!!}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{$products->appends(request()->all())->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news__logo">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-2 m-4 c-6">
                        <div class="news__image">
                            <a href="#">
                                <img src="image/footer_news.png" alt="" srcset="">
                            </a>
                        </div>
                    </div>
                    <div class="col l-2 m-4 c-6">
                        <div class="news__image">
                            <a href="#">
                                <img src="image/footer_news1.png" alt="" srcset="">
                            </a>
                        </div>
                    </div>
                    <div class="col l-2 m-4 c-0">
                        <div class="news__image">
                            <a href="#">
                                <img src="image/footer_news2.png" alt="" srcset="">
                            </a>
                        </div>
                    </div>
                    <div class="col l-2 m-0 c-0">
                        <div class="news__image">
                            <a href="#">
                                <img src="image/footer_news3.png" alt="" srcset="">
                            </a>
                        </div>
                    </div>
                    <div class="col l-2 m-0 c-0">
                        <div class="news__image">
                            <a href="#">
                                <img src="image/footer_news4.png" alt="" srcset="">
                            </a>
                        </div>
                    </div>
                    <div class="col l-2 m-0 c-0">
                        <div class="news__image">
                            <a href="#">
                                <img src="image/footer_news5.png" alt="" srcset="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mail">
            <div class="mail__Post">
                <div class="grid wide">
                    <div class="mail__post--padding">
                        <div class="row">
                            <div class="col l-6 m-6 c-12">
                                <div class="mail__title">
                                    <div class="mail__title--heading">
                                        <h2>
                                            Subscribe to us!
                                        </h2>
                                    </div>
                                    <div class="mail__title--footer">
                                        <p>Enter Your email address for our mailing list to keep yourself update.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-6 m-6 c-12">
                                <div class="mail__form">
                                    <form action="#" class="mail__form--post">
                                        <input type="text" class="mail__input" placeholder="Nhập thông tin đăng kí">
                                        <input type="submit" value="Subscribe me" class="mail__submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection