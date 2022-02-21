@extends('frontend.admin')
@section('css')
    <link rel="stylesheet" href="{{asset('login/css2.css')}}">
@endsection
@section('js')
    {{--  <script src="{{asset('login/js.js')}}"></script>  --}}
    {{--  <script src="{{asset('login/js1.js')}}"></script>  --}}
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
                            <a href="#" class="compare__banner--news">Tin tức cửa hàng</a>
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
                                @foreach ($categories as $items)
                                    <li class="category__news--active">
                                        <a href="{{route('HomeController.news',$items->id)}}" class="news__links ">{{$items->name}}</a>
                                    </li>
                                @endforeach
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
                        <div id="news__all" class="news__posts active">
                            <div class="row">
                                @foreach ($postsNew as $post_new)
                                    <div class="col l-6 m-6 c-0 active_news news__post">
                                        <div class="news__img active">
                                            <a href="{{route('HomeController.details_new',$post_new->id)}}" class="news__img--link">
                                                <img  src="{{asset('storage/images/news/'.$post_new->image)}}" alt=""  class="img_news"/>
                                            </a>
                                        </div>
                                        <div class="news__title">
                                            <div class="news__time">
                                                <i class="far fa-clock"></i>{{$post_new->created_at}}
                                            </div>
                                            <h2 class="news__heading">
                                                <a href="{{route('HomeController.details_new',$post_new->id)}}">
                                                    {{$post_new->name}}
                                                </a>
                                                
                                            </h2>
                                            <p>{{$post_new->title}}</p>
                                            <div class="button2">
                                                <a href="{{route('HomeController.details_new',$post_new->id)}}" class="btn btn-gr">XEM THÊM <i class="fas fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                {{$postsNew->appends(request()->all())->links('pagination::bootstrap-4')}}

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