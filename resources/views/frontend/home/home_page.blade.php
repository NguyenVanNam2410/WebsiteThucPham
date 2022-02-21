@extends('frontend.admin')

@section('content')
    <div id="content">
        <div class="slider">
            <div class="owl-carousel owl-theme slider__item">
                @foreach ($post_slider as $item)
                    <div class="item">
                        <h4><img src="{{asset('storage/images/sliders/'.$item->image)}}" alt="" srcset=""></h4>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="aboutUs">
            <div class="grid wide">
                <div class="aboutUs__post">
                    <div class="heading">
                        <h2 class="content__heading">About Us</h2>
                        <div class="content__note"></div>
                    </div>
                    <p class="aboutUs__label ">
                        Đến với của hàng là không gian mua sắm với những mặt hàng chất lượng cho bữa ăn hàng ngày của bạn chở nên thú vị an toàn và sức khỏe. FoodFarm mang lại niềm vui thỏa sức đam mê với những sản phẩm tươi ngon giá cả hợp lý, giao hàng siêu nhanh tiết kiệm thời gian một cách hiệu quả. Còn chần chờ gì nữa hãy cùng nhau khám phá đi thôi. 
                    </p>
                    <div class="button">
                        <a href="#" class="btn btn-gr">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="BigSale">
            <div class="grid wide">
                <div class="heading">
                    <h2 class="content__heading">Big Sale Today</h2>
                    <div class="content__note"></div>
                </div>
                <div class="Sale__item">
                    <div class="row">
                        <div class="col l-5 m-4 c-12">
                            <div class="BigSale__img ">
                                <img src="image/banner.jpg" alt="" srcset="">
                            </div>
                        </div>
                        <div class="col l-7 m-8 c-12">
                            <div class="BigSale__content">
                                <div class="BigSale__header">
                                    <h2 class="BigSale__header--post">
                                        GET 30% OFF YOUR ORDER OF $100 OR MORE
                                        <!-- GET 30% OFF YOUR ORDER OF $100 OR MORE -->
                                        <!-- GET 30% OFF YOUR ORDER OF $100 OR MORE -->
                                    </h2>
                                    <p class="fadein">
                                        Duis sed odio sit amet nibh vutate cursus a sit amet mauris.Morbi accumsan ipsum velit.Duis sed odio sit amet nibh vutate cursus a sit amet mauris.Morbi accumsan ipsum velit.
                                    </p>                                        
                                </div>
                                <div class="BigSale__time">
                                    <div class="demo__time" id="demo">

                                    </div>
                                    <script>
                                        var countDownDate = new Date("Jan 2, 2023 00:00:00").getTime();

                                        // console.log(countDownDate);
                                        // cập nhập thời gian sau mỗi 1 giây
                                        var x = setInterval(function() {

                                            // Lấy thời gian hiện tại
                                            var now = new Date().getTime();


                                            // Lấy số thời gian chênh lệch
                                            var distance = countDownDate - now;

                                            // Tính toán số ngày, giờ, phút, giây từ thời gian chênh lệch
                                            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                            
                                            // HIển thị chuỗi thời gian trong thẻ p
                                            document.getElementById("demo").innerHTML = "<div class=\"hour\">" + days + "<\/div> <div class=\"hour\">" + hours + "<\/div> <div class=\"hour\">" + minutes + "<\/div> <div class=\"hour\">" + seconds + "<\/div>";

                                            // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
                                            if (distance < 0) {
                                                clearInterval(x);
                                                document.getElementById("demo").innerHTML = "Thời gian đếm ngược đã kết thúc";
                                            }
                                        }, 1000)
                                    </script>
                                    <div class="demo__hour">
                                        <div class="time__text">Day</div>
                                        <div class="time__text">Hours</div>
                                        <div class="time__text">Mins</div>
                                        <div class="time__text">Secs</div>
                                    </div>
                                </div>
                                <div class="button">
                                    <a href="#" class="btn btn-gr">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="SaveFree hide-on-mobile ">
            <div class="grid grid2">
                <div class="no-gutters">
                    <div class="col1 l-6 m-6 c-12">
                        <div class="SaveUp">
                            <div class="no-gutters">
                                <div class="col1 l-6 m-6 c-12">
                                    <div class="Save__img">
                                        <img src="image/h1.png" alt=""  srcset="">
                                    </div>
                                </div>
                                <div class="col1 l-6 m-6 c-12">
                                    <div class="Save__title">
                                        <h2>Save Up to 50%</h2>
                                        <h4 class="Save__title--h42">On your first purchase</h4>
                                        <div class="button">
                                            <a href="#" class="btn btn__shop">SHOP NOW</a>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col1 l-6 m-6 c-12">
                        <div class="FreeShip">
                            <div class="no-gutters">
                                <div class="col1 l-6 m-6 c-12">
                                    <div class="Save__title">
                                        <h2>Free Shipping </h2>
                                        <h4 class="Save__title--h4">On order over $99</h4>
                                        <div class="button">
                                            <a href="#" class="btn btn__Free">TRACK NOW</a>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col1 l-6 m-6 c-12">
                                    <div class="Save__img Save__img2 ">
                                        <img src="image/h2.png" alt=""  srcset="">
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="save2 save3">
            <div class="grid wide ">
                <div class="row margin">
                    <div class="col l-0 m-0 c-12">
                        <div class="Free__ship">
                            <img src="image/h1.png" alt=""  srcset="">
                        </div>
                    </div>
                    <div class="col l-0 m-0 c-12">
                        <div class="Save__title save__1">
                            <h2>Save Up to 50%</h2>
                            <h4 class="Save__title--h42">On your first purchase</h4>
                            <div class="button">
                                <a href="#" class="btn btn__shop">SHOP NOW</a>
                            </div>
                        </div>   
                    </div>
                    <div class="col l-0 m-0 c-12">
                        <div class="Save__title">
                            <h2>Free Shipping </h2>
                            <h4 class="Save__title--h4">On order over $99</h4>
                            <div class="button">
                                <a href="#" class="btn btn__Free">TRACK NOW</a>
                            </div>
                        </div>      
                    </div>
                    <div class="col l-0 m-0 c-12">
                        <div class="Free__ship">
                            <img src="image/h2.png" alt=""  srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="product">
            <div class="grid wide">
                <div class="heading">
                    <h2 class="content__heading">Our Product</h2>
                    <div class="content__note"></div>
                </div>
                <div class="product__category">
                    <ul class="product__category--item">
                        <li class="product__category--link product__category--post">
                            <a href="#Product__fruit" class="product__category--label active">Rau-củ-Quả</a>
                        </li>
                        <li class="product__category--link">
                            <a href="#Product__meat" class="product__category--label">Thịt-Hải Sản</a>
                        </li>
                    </ul>
                </div>
                <div class="product__post">
                    <div id="Product__fruit" class="products active10">
                        @foreach ($products_2 as $item)
                            <div class="products_item" >
                                <div class="products_image">
                                    @if($item->sale === 0)
                                        <span class="promotion">Hot</span>
                                    @else
                                        <span class="promotion">{{$item->sale}} %</span>
                                    @endif
                                    <img class="img_pro" src="{{asset('storage/images/product/'.$item->image)}}" alt="" srcset="">
                                </div>
                                <div class="pro_content">
                                    <h3>{{$item->name}}</h3>
                                    <div class="price">
                                        @if($item->sale === 0)
                                            <p class="price__quanity">{{number_format($item->price, 0 ,",", "." )}} đ</p>
                                            <p class="price__pro"></p>
                                        @else
                                            <p class="price__quanity">{{number_format(($item->price) * (100 - $item->sale) / 100, 0,",",".")}} đ</p>
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
                                        <a href="javascript:"   id="cart__click" onclick="AddCart({{$item->id}})" class="product__icon"><i class="fas fa-shopping-cart"></i></a>
                                        <a href="#" class="product__icon"><i class="fas fa-retweet"></i></a>
                                    </div>
                                    <div class="button1">
                                        <a href="javascript:"  id="cart__click" onclick="AddCart({{$item->id}})" class="btn1 btn-width"><i class="fas fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div  id="Product__meat" class="products">
                        @foreach ($products_1 as $item)
                            <div class="products_item" >
                                <div class="products_image">
                                    @if($item->sale === 0)
                                        <span class="promotion">Hot</span>
                                    @else
                                        <span class="promotion">{{$item->sale}} %</span>
                                    @endif
                                    <img class="img_pro" src="{{asset('storage/images/product/'.$item->image)}}" alt="" srcset="">
                                </div>
                                <div class="pro_content">
                                    <h3>{{$item->name}}</h3>
                                    <div class="price">
                                        @if($item->sale === 0)
                                            <p class="price__quanity">{{number_format($item->price, 0 ,",", "." )}} đ</p>
                                            <p class="price__pro"></p>
                                        @else
                                            <p class="price__quanity">{{number_format(($item->price) * (100 - $item->sale) / 100, 0,",",".")}} đ</p>
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
                                        <a href="javascript:"  onclick="AddCart({{$item->id}})"  id="cart__click" class="product__icon"><i class="fas fa-shopping-cart"></i></a>
                                        <a href="#" class="product__icon"><i class="fas fa-retweet"></i></a>
                                    </div>
                                    <div class="button1">
                                        <a href="javascript:" onclick="AddCart({{$item->id}})" id="cart__click"  class="btn1 btn-width"><i class="fas fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    </div>
                </div>
                <div class="button">
                    <a href="product.html" class="btn btn__Product">Load More</a>
                </div>
            </div>
        </div>
        <div id="customer">
            <div class="customer__img">
                <div class="grid wide">
                    <div class="owl-carousel owl-theme customer__slider">
                        @foreach ($posts_slider as $item)
                            <div class="item customer__post">
                                <div class="customer__top">
                                    <img src="image/customer.jpg" class="customer__top--img" alt="" srcset="">
                                </div>
                                <p class="customer__information">
                                    {{ $item->note}}
                                </p>
                                <p class="customer__name">
                                    <span class="customer__text"> {{$item->name}}</span>
                                </p>
                            </div>
                            
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div id="news">
            <div class="grid wide">
                <div class="heading">
                    <h2 class="content__heading">Lastest from blog</h2>
                    <div class="content__note"></div>
                    <p>Get started on your healthy adventure. Find out latest recipe inspiration and diet tips to have a happy and healthier way to eat.</p>
                </div>
                <div class="row">
                    @foreach ($posts_news as $new)
                        <div class="col l-6 m-6 c-12 news__post">
                            <div class="news__img">
                                <a href="{{route('HomeController.details_new',$new->id)}}" class="news__img--link">
                                    <img  src="{{asset('storage/images/news/'.$new->image)}}" alt=""  class="img_news"srcset="">
                                </a>
                            </div>
                            <div class="news__title">
                                <div class="news__time">
                                    <i class="far fa-clock"></i>{{$new->created_at}}
                                </div>
                                <h2 class="news__heading">
                                    <a href="{{route('HomeController.details_new',$new->id)}}">
                                        {{$new->name}}
                                    </a>
                                </h2>
                                <p>{{$new->title}}</p>
                                <div class="button2">
                                    <a href="{{route('HomeController.details_new',$new->id)}}" class="btn btn-gr">XEM THÊM <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
