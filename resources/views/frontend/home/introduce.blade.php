@extends('frontend.admin')
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
                            <a href="#" class="compare__banner--news">giới thiệu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="introduce__posts">
            <div class="grid wide">
                <div class="introduce__post">
                    <h2><span>Câu chuyện về chúng tôi</span></h2>
                </div>
                <div class="row margin__top">
                    <div class="col l-6 m-6 c-12">
                        <p class="introduct__p">Organic chuyên cung cấp những sản phẩm được kiểm soát chặt chẽ từ khâu con giống, chế biến thức ăn, chăm sóc sức khỏe vật nuôi đến giết mổ, bao gói, bảo quản và vận chuyển một cách tốt nhất, sạch nhất cho thị trường.</p>
                        <p class="introduct__p">Các sản phẩm rau hữu cơ của Michimart cung cấp đều nằm trong dự án ADDA được tổ chức Hệ thống bảo đảm cùng tham gia– PGS (Participatory Guarantee System) chứng nhận, đảm bảo tính hữu cơ.</p>
                        <p class="introduct__p">Thực phẩm sạch, trái cây an toàn đều có giấy chứng nhận an toàn VIETGAP, GLOBAL GAP, HACCP, có xuất xứ rõ ràng, không những sạch – mà còn ngon.</p>
                    </div>
                    <div class="col l-6 m-6 c-12">
                        <div class="introduce__img">
                            <img src="image/h1.png" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="introduce__post">
                    <h2><span>Kĩ năng của chúng tôi</span></h2>
                </div>
                <div class="row margin__top">
                    <div class="col l-6 m-6 c-12">
                        <div class="introduce__skill">
                            <div class="skill__wordpress">
                                <small class="skill__smail">wordpress</small>
                                <span class="skill__wordpress--item  active" data-percentage-value="100" data-value="100"></span>
                            </div>
                            <div class="skill__Photoshop">
                                <small class="skill__smail">photoshop</small>
                                <span class="skill__Photoshop--item active" data-percentage-value="100" data-value="100"></span>
                            </div>
                            <div class="skill__html">
                                <small class="skill__smail">html/css</small>
                                <span class="skill__html--item active" data-percentage-value="100" data-value="100"></span>
                            </div>
                            <div class="skill__other">
                                <small class="skill__smail">other</small>
                                <span class="skill__other--item active" data-percentage-value="100" data-value="100"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col l-6 m-6 c-12">
                        <p class="introduct__p">Nhận thức được tầm quan trọng của thực phẩm sạch đối với sức khỏe, chúng tôi – Công ty cổ phần thương mại và dịch vụ Organic – những doanh nhân có tâm với nghề đã quyết định đầu tư vào ngành cung cấp thực phẩm sạch.</p>
                        <p class="introduct__p">Organic là nhà phân phối rau hữu cơ chính thức của tổ chức ADDA – Đan Mạch hỗ trợ kỹ thuật và giám sát chất lượng. Rau hữu cơ của chúng tôi là loại rau canh tác trong điều kiện hoàn toàn tự nhiên.</p>
                        <p class="introduct__p">Thịt sạch là sản phẩm không có thuốc, kháng sinh, hormon, chất kích thích tăng trưởng… Gia súc, gia cầm chỉ ăn cỏ rơm hay ngũ cốc có chứng nhận sinh học không thuốc trừ sâu hay phân bón hóa học.</p>
                    </div>
                </div>
                <div class="introduce__post">
                    <h2><span>Đội ngũ của chúng tôi</span></h2>
                </div>
                <div class="row margin__top">
                    <div class="col l-3 m-3 c-6">
                        <div class="introduce__items">
                            <figure>
                                <img class="img__socials" src="image/introduce.jpg" alt="" srcset="">
                            </figure>
                            <div class="socials">
                                <ul>
                                    <li>    
                                        <a class="facebook" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="twitter"  href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="google"  href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="linkein" href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="wifi" href="#">
                                            <i class="fas fa-wifi"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <div class="introduce__items">
                            <figure>
                                <img class="img__socials" src="image/introduce__1.jpg" alt="" srcset="">
                            </figure>
                            <div class="socials">
                                <ul>
                                    <li>    
                                        <a class="facebook" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="twitter"  href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="google"  href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="linkein" href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="wifi" href="#">
                                            <i class="fas fa-wifi"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <div class="introduce__items">
                            <figure>
                                <img class="img__socials" src="image/introduce__2.jpg" alt="" srcset="">
                            </figure>
                            <div class="socials">
                                <ul>
                                    <li>    
                                        <a class="facebook" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="twitter"  href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="google"  href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="linkein" href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="wifi" href="#">
                                            <i class="fas fa-wifi"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <div class="introduce__items">
                            <figure>
                                <img class="img__socials" src="image/introduce__3.jpg" alt="" srcset="">
                            </figure>
                            <div class="socials">
                                <ul>
                                    <li>    
                                        <a class="facebook" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="twitter"  href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="google"  href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="linkein" href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>    
                                        <a class="wifi" href="#">
                                            <i class="fas fa-wifi"></i>
                                        </a>
                                    </li>
                                </ul>
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
@endsection