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
                        <a href="#" class="compare__banner--news">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="contact__map">
        <div class="grid wide">
            <div class="contact__post">
                <div class="contact__address">
                    <div class="contact__address--icon fas fa-map-marker-alt"></div>
                    <div class="contact__address--item">
                        <p>
                            Phường đứu thắng- bắc từ liêm hà nội
                        </p>
                        <p>Đại học Mỏ-Địa Chất</p>
                    </div>
                </div>
                <div class="contact__phone">
                    <div class="contact__address--icon fas fa-phone-alt"></div>
                    <div class="contact__phone--item">
                        <p>phone: (03) 9996 1768</p>
                        <p>hotline : 19001000</p>
                    </div>
                </div>
                <div class="contact__email">
                    <div class="contact__address--icon fas fa-globe-asia"></div>
                    <div class="contact__email--item">
                        <p>email :</p>
                        <p>nguyenvankhangnd123@gmail.com</p>
                        <p>web: copy by Web4s.com</p>
                    </div>
                </div>
            </div>
            <div class="contact__maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.017336361203!2d105.7717246144081!3d21.071969791678924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552defbed8e9%3A0x1584f79c805eb017!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBN4buPIC0gxJDhu4thIGNo4bqldC4!5e0!3m2!1svi!2s!4v1629973213314!5m2!1svi!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <div class="contact__information">
        <div class="grid wide">
            <div class="contact__information--post">
                <h2><span>Để lại lời nhắn</span></h2>
                <div class="contact__information--item">
                    <form action="#" method="post" class="contact__input">
                        <input type="text" class="contact__input--lable" placeholder="Họ và tên">
                        <input type="text" class="contact__input--lable" placeholder="Điện thoại">
                        <input type="text" class="contact__input--lable" placeholder="Tiêu đề">
                        <textarea name=""  class="contact__input--lable" placeholder=" Ghi chú" aria-required="true" id="" cols="30" rows="5">
                           
                        </textarea>
                        <div class="form__contact">
                            <!-- <span></span> -->
                            <a href="#" class="form__contact--link">
                                <i class="fas fa-sync-alt"></i>
                            </a>
                            <input class="form__contact--ma" type="text" placeholder="Mã bảo vệ">
                        </div>
                        <div class="button2">
                            <input type="submit" value="submit" class="btn2">
                        </div>
                    </form>
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