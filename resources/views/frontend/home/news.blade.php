@extends('frontend.admin')

@section('content')
    <div id="content">
        <div class="banner__compare">
            <div class="grid wide">
                <div class="banner__compare--title">
                    <ul class="compare__banner">
                        <li>
                            <a href="{{route('HomeController.index')}}}">Trang chủ /</a>
                        </li>
                        <li>
                            <a href="{{route('HomeController.news_home')}}}">Tin tức cửa hàng /</a>
                        </li>
                        <li>
                            <a href="#" class="compare__banner--news">{{$posts_category->name}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="news__post1">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-3 m-3 c-12">
                        <div class="category__news">
                            <h2>
                                Danh mục tin tức
                            </h2>
                            <ul>
                                @foreach ($categories as $item)
                                    <li class="category__news--active">
                                        <a href="{{$item->id}}" class="news__links  {{$id == $item->id ? 'active__news' : ''}} ">{{$item->name}}</a>
                                    </li>                               
                                @endforeach
                                {{--  <li class="category__news--active">
                                    <a href="#news__experience" class="news__links active__news">Kinh nghiệm chọn thực phẩm</a>
                                </li>
                                <li>
                                    <a href="#news__promotion" class="news__links" >Tin khuyên mãi</a>
                                </li>  --}}
                            </ul>
                        </div>
                        <div class="news__list">
                            <div class="heading">
                                <h2 class="content__heading">Tin tức mới</h2>
                                <div class="content__note"></div>
                            </div>
                            @foreach ($postsNew_1 as $item)
                                <div class="news__list--post">
                                    <div class="news__list--img">
                                        <a href="{{route('HomeController.details_new',$item->id)}}">
                                            <img src="{{asset('storage/images/news/'.$item->image)}}" alt="">
                                        </a>
                                    </div>
                                    <h3>
                                        <a href="{{route('HomeController.details_new',$item->id)}}">{{$item->name}}</a>
                                    </h3>
                                </div>
                                
                            @endforeach
                        </div>
                    
                    </div>
                    <div class="col l-9 m-9 c-0">
                        <div id="news__experience">
                        {{--  <div id="news__experience" class="news__posts">  --}}
                            <div class="row">
                                @foreach ($news_posts as $new)
                                <div class="col l-6 m-6 c-0 active_news news__post">
                                    <div class="news__img active">
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
                        {{--  <div id="news__promotion" class="news__posts">
                            <div class="row">
                                <div class="col l-6 m-6 c-0 active_news news__post">
                                    <div class="news__img active">
                                        <a href="#" class="news__img--link">
                                            <img  src="image/news_list.jpg" alt=""  class="img_news"srcset="">
                                        </a>
                                    </div>
                                    <div class="news__title">
                                        <div class="news__time">
                                            <i class="far fa-clock"></i>14:46 - 16/08/2021
                                        </div>
                                        <h2 class="news__heading">
                                            <a href="">
                                                6 thực phẩm bổ não, tăng cường chí nhớ bạn nên ăn
                                            </a>
                                            
                                        </h2>
                                        <p>Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...</p>
                                        <div class="button2">
                                            <a href="#" class="btn btn-gr">XEM THÊM <i class="fas fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-6 m-6 c-0 active_news news__post">
                                    <div class="news__img active">
                                        <a href="#" class="news__img--link">
                                            <img src="image/news2.jpg" class="img_news" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="news__title">
                                        <div class="news__time">
                                            <i class="far fa-clock"></i>14:46 - 16/08/2021
                                        </div>
                                        <h2 class="news__heading">
                                            <a href="">
                                                6 thực phẩm bổ não, tăng cường chí nhớ bạn nên ăn
                                            </a>
                                        </h2>
                                        <p>Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...</p>
                                        <div class="button2">
                                            <a href="#" class="btn btn-gr ">XEM THÊM <i class="fas fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-6 m-6 c-0 active_news news__post">
                                    <div class="news__img active">
                                        <a href="#" class="news__img--link">
                                            <img  src="image/news_list1.jpg" alt=""  class="img_news"srcset="">
                                        </a>
                                    </div>
                                    <div class="news__title">
                                        <div class="news__time">
                                            <i class="far fa-clock"></i>14:46 - 16/08/2021
                                        </div>
                                        <h2 class="news__heading">
                                            <a href="">
                                                6 thực phẩm bổ não, tăng cường chí nhớ bạn nên ăn
                                            </a>
                                            
                                        </h2>
                                        <p>Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...</p>
                                        <div class="button2">
                                            <a href="#" class="btn btn-gr">XEM THÊM <i class="fas fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-6 m-6 c-0 active_news news__post">
                                    <div class="news__img active">
                                        <a href="#" class="news__img--link">
                                            <img  src="image/news_list2.jpg" alt=""  class="img_news"srcset="">
                                        </a>
                                    </div>
                                    <div class="news__title">
                                        <div class="news__time">
                                            <i class="far fa-clock"></i>14:46 - 16/08/2021
                                        </div>
                                        <h2 class="news__heading">
                                            <a href="">
                                                6 thực phẩm bổ não, tăng cường chí nhớ bạn nên ăn
                                            </a>
                                            
                                        </h2>
                                        <p>Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...</p>
                                        <div class="button2">
                                            <a href="#" class="btn btn-gr">XEM THÊM <i class="fas fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-6 m-6 c-0 active_news news__post">
                                    <div class="news__img active">
                                        <a href="#" class="news__img--link">
                                            <img  src="image/news1.jpg" alt=""  class="img_news"srcset="">
                                        </a>
                                    </div>
                                    <div class="news__title">
                                        <div class="news__time">
                                            <i class="far fa-clock"></i>14:46 - 16/08/2021
                                        </div>
                                        <h2 class="news__heading">
                                            <a href="">
                                                6 thực phẩm bổ não, tăng cường chí nhớ bạn nên ăn
                                            </a>
                                            
                                        </h2>
                                        <p>Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...</p>
                                        <div class="button2">
                                            <a href="#" class="btn btn-gr">XEM THÊM <i class="fas fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>  --}}
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