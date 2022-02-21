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
                            <a href="{{route('HomeController.index')}}">Trang chủ /</a>
                        </li>
                        <li>
                            <a href="#" class="compare__banner--news">Sản phẩm của cửa hàng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="details__product">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-9 m-9 c-12">
                        
                            <div class="row">
                                <div class="col l-5 m-5 c-12">
                                    <div class="details__image">
                                        <img src="{{asset('storage/images/product/'.$product_item->image)}}" alt="" srcset="">
                                    </div>
                                    <div class="details__img">
                                        @foreach ($product_item->Product_image as $image)
                                            <a href="#"><img src="{{asset('/storage/images/products/'.$image->image)}}" alt="" srcset=""></a>
                                            
                                        @endforeach
                                        {{-- <a href="#"><img src="image/prodcut_1_1.jpg" alt="" srcset=""></a> --}}
                                    </div>
                                </div>
                                <div class="col l-7 m-7 c-12">
                                    <div class="details__titles">
                                        <h2>{{$product_item->name}}</h2>
                                        <ul class="details__ma">
                                            <li class="details__ma--links">
                                                <label> Mã sản phẩm: </label>
                                                <span > {{$product_item->code}}</span>
                                            </li>
                                            <li>
                                                <label> Thương hiệu: </label>
                                                @foreach ($product_item->tags as $tag)
                                                    <span class="origin">{{$tag->name}}</span>
                                                @endforeach
                                            </li>
                                        </ul>
                                        <div class="price__details">
                                            @if($product_item->sale === 0)
                                                <div class="price__details--item">
                                                    <span class="price__item">{{number_format($product_item->price, 0 ,",", "." )}}</span>
                                                    <span class="dv">đ</span>
                                                    {{--  <span class="price__sale"></span>  --}}
                                                </div>
                                                <span class="price__details--sale"></span>
                                                @else
                                                <div class="price__details--item">
                                                    <span class="price__item">{{number_format($product_item->price * (100 - $product_item->sale) / 100, 0 ,",", "." )}}</span>
                                                    <span class="dv">đ</span>
                                                    <span class="price__sale">Giảm giá {{$product_item->sale}}%</span>
                                                </div>
                                                <span class="price__details--sale">{{number_format($product_item->price, 0 ,",", "." )}} đ</span>
                                            @endif
                                        </div>
                                        <div class="details__title">
                                            <ul>
                                                {{--  <li>Thực phẩm tươi giàu dinh dưỡng</li>
                                                <li>Thích hợp chế biến nhiều món ăn ngon</li>
                                                <li>Sản phẩm đạt tiêu chuẩn VietGAP</li>  --}}
                                                
                                                <li>
                                                    {!!$product_item->title!!}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="details__available">
                                            <div class="a-row">
                                                <label >Màu săc:</label>
                                                <span> {{$product_item->color}}</span>
                                            </div>
                                            <div class="a-row">
                                                <label >Xuất xứ:</label>
                                                <span> {{$product_item->origin}}</span>
                                            </div>
                                        </div>
                                        <div class="input__group">
                                            <div class="input__group--quantity">
                                                <span class="input__tru">-</span>
                                                <input class="group__item" type="text" value="1" min="1" placeholder="số">
                                                <span class="input__cong">+</span>
                                            </div>
                                            <div class="input__group--submit">
                                                 <button> 
                                                    <a href="javascript:" onclick="AddCartItem({{$product_item->id}})" id="cart__click" >
                                                        <i  class="fas fa-shopping-cart"></i>
                                                        Thêm vào giỏ hàng
                                                    </a>
                                                 </button> 
                                            </div>

                                        </div>
                                        <div class="share__icon">
                                            <div class="share__facebook active">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                            <div class="share__google active">
                                                <i class="fab fa-google"></i>
                                            </div>
                                            <div class="share__twitter active">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                            <div class="share__linkein active">
                                                <i class="fab fa-linkedin-in"></i>
                                            </div>
                                            <div class="share__pinterest active">
                                                <i class="fab fa-pinterest-p"></i>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>  
                                
                            </div>
                            <div class="row">
                                <div class="col l-12 m-12 c-6">
                                    <ul class="details__menu">
                                        <li class="details__menu--item">
                                            <a href="#menu__1--details" class="details__menu--link active">Mô tả</a>
                                        </li>
                                        <li class="details__menu--item">
                                            <a href="#menu__2--details" class="details__menu--link">Điểm nổi bật</a>
                                        </li>
                                        <li class="details__menu--item">
                                            <a href="#menu__3--details" class="details__menu--link">Điều kiện</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col l-12 m-12 c-12">
                                    <div id="menu__1--details" class="description menu__details active">
                                       
                                            {!!$product_item->description!!}
                                        
                                        {{--  <div class="description__img">
                                            <img src="image/product_1_1_1.jpg" alt="" srcset="">
                                            <p>Măng tây xanh (ảnh sản phẩm chỉ mang tính chất minh họa)</p>
                                        </div>  --}}
                                    </div>
                                    <div id= "menu__2--details" class="highlight menu__details">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="hightlight__item">Quy cách đóng gói</td>
                                                    <td class="hightlight__link">gói</td>
                                                </tr>
                                                <tr>
                                                    <td class="hightlight__item">Hướng dẫn bảo quản</td>
                                                    <td class="hightlight__link">Bảo quản</td>
                                                </tr>
                                                <tr>
                                                    <td class="hightlight__item">Xuất xứ</td>
                                                    <td class="hightlight__link"> {{$product_item->origin}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="hightlight__item">Hướng dẫn sử dụng</td>
                                                    <td class="hightlight__link">Dùng để chế biến món ăn</td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="menu__3--details" class="condition menu__details">
                                        <p>là 1 trong những sản phẩm vipro</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col l-3 m-3 c-12">
                        <div class="details__child">
                            <h2>Sản phẩm cùng loại</h2>
                        </div>
                        <div class="row">
                            @foreach ($product_relate as $item)
                                <div class="col l-12 m-12 c-0">
                                    <div class="products_item__2">
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
                                                <a href="javascript:" onclick="AddCartItem({{$item->id}})" class="product__icon"><i class="fas fa-shopping-cart"></i></a>
                                                <a href="#" class="product__icon"><i class="fas fa-retweet"></i></a>
                                            </div>
                                            <div class="button1">
                                                <a href="javascript:" onclick="AddCartItem({{$item->id}})" class="btn1 btn-width"><i class="fas fa-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            @endforeach
                            {{--  <div class="col l-12 m-12 c-0">
                                <div class="products_item__2">
                                    <div class="products_image">
                                        <span class="promotion">HOT</span>
                                        <img class="img_pro" src="image/prodcut_1.jpg" alt="" srcset="">
                                    </div>
                                    <div class="pro_content">
                                        <h3>Măng tây xanh</h3>
                                        <div class="price">
                                            <p>56,000 đ</p>
                                            <p class="price__pro">56,000 đ</p>
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
                                            <a href="#" class="product__icon"><i class="far fa-eye"></i></a>
                                            <a href="#" class="product__icon"><i class="fas fa-shopping-cart"></i></a>
                                            <a href="#" class="product__icon"><i class="fas fa-retweet"></i></a>
                                        </div>
                                        <div class="button1">
                                            <a href="#" class="btn1 btn-width"><i class="fas fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>  --}}
                        </div>
                    </div>
                </div>
            
                <div class="heading">
                    <h2 class="content__heading">Featured Product</h2>
                    <div class="content__note"></div>
                </div>
                <div  class="owl-carousel owl-theme owl-details">
                    @foreach ($products as $item)
                        <div class="item">
                            <div class="products_item__2">
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
                                        <a  href="javascript:" onclick="AddCartItem({{$item->id}})" class="product__icon"><i class="fas fa-shopping-cart"></i></a>
                                        <a href="#" class="product__icon"><i class="fas fa-retweet"></i></a>
                                    </div>
                                    <div class="button1">
                                        <a  href="javascript:" onclick="AddCartItem({{$item->id}})" class="btn1 btn-width"><i class="fas fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    @endforeach
                    
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
@endsection