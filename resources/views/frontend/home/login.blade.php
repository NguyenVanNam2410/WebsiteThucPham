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
                            <a href="#" class="compare__banner--news">Đăng nhập</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="login">
            <div class="grid wide">
                <div class="login__header">
                    <h2>
                        Đăng nhập
                    </h2>
                    <div class="login__post">
                        <form action="" method="post" class="form__login">
                            <label>Tên đăng nhập</label>
                            <input type="text" placeholder="Tên đăng nhập hoặc email">
                            <label>Mật khẩu</label>
                            <input type="text" placeholder="Mật khẩu">
                            <button type="submit" class="login__button">
                                <i class="fas fa-sign-in-alt"></i>
                                Đăng nhập
                            </button>
                        </form>
                        <div class="login__item">
                            <a href="#" class="login__item__a login__facebook">
                                <i class="fab fa-facebook-f"></i>
                                Đăng nhập bằng facebook
                            </a>
                            <a href="#" class="login__item__a login__google">
                                <i class="fab fa-google"></i>
                                Đăng nhập bằng google
                            </a>
                        </div>
                        <a href="#" class="login__register al">Đăng kí tài khoản</a>
                        <a href="#" class="login__register">Quên mật khẩu</a>
                    </div>
                    
                </div>
            </div>
        </div>

@endsection