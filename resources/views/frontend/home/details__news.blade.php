@extends('frontend.admin')

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
                            <a href="{{route('HomeController.news_home')}}" class="">Tin tức/</a>
                        </li>
                        <li>
                            <a href="#" class="">{{$post->category_new->name}}/</a>
                        </li>
                        <li>
                            <a href="#" class="compare__banner--news">{{$post->name}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="details__new">
            <div class="grid wide">
                <div class="details__news--post">
                    <div class="details__news--heading">
                        <h1>{{$post->name}}</h1>
                        <p><i class="far fa-clock"></i> {{$post->created_at}}</p>
                    </div>
                    <div class="details__news--title">
                        <h3>{{$post->title}}</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>
                                    Nấu ăn ngon hơn nhờ thực phẩm sạch
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>
                                    Lựa chịn thực phẩm sạch và nấu ăn đúng cách
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>
                                    Cách lựa chọn thực phẩm tươi sống an toàn
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>
                                    mẹo chọn thực phẩm an toàn
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="details__news--label">
                        <ul>
                            {{-- <li>
                                <h4>Cà phê và quế</h4>
                                <p>Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập trung, hãy thêm một chút quế vào cốc cà phê và bạn sẽ thấy sự tập trung tăng lên.</p>
                            </li>
                            <li>
                                <h4>Trà xanh</h4>
                                <p>Đây là thức uống tốt nhất để giảm cân và cũng giúp tăng khả năng miễn dịch. Các axit amin L-theanine có trong thức uống này giúp não bộ thư giãn và làm tăng sự tập trung.</p>
                            </li>
                            <li>
                                <h4>Bữa sáng</h4>
                                <p>Không bao giờ bỏ qua bữa ăn sáng, bữa ăn đầu tiên trong ngày: Có một bữa ăn sáng phù hợp để phục hồi lại năng lượng và giúp bạn tập trung tốt hơn. Đây là cách tốt nhất và đơn giản nhất để tăng sự tập trung.</p>
                            </li>
                            <li>
                                <h4>Các loại quả mọng</h4>
                                <p>Các loại quả mọng giàu chất chống oxy hóa giúp làm tăng lưu lượng máu đến não. Điều này sẽ giúp não hoạt động và giúp tăng sự tập trung.</p>
                            </li>
                            <li>
                                <h4>Sôcôla đen</h4>
                                <p>Chất dẫn truyền thần kinh được phát hành trong cơ thể giúp hệ thần kinh bình tĩnh và giúp bạn tập trung tốt hơn. Đây là một trong những thực phẩm tốt nhất giúp bạn tập trung.</p>
                            </li>
                            <li>
                                <h4>Củ cải đường</h4>
                                <p>Loại củ này rất giàu nitrat, chế độ ăn uống giúp tăng lưu lượng máu đến não. Thực phẩm này giúp tập trung và chú ý một cách tốt hơn.</p>
                            </li> --}}
                            <li>
                                {!! $post->description !!}
                                {{--  <p>
                                    {{$post->description}}
                                </p>  --}}
                            </li>
                            {{-- {{$post->description}} --}}
                        </ul>
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
@endsection