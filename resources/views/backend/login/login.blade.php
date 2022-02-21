
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('login/css1.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/css1/css/all.min.css')}}">

</head>

<body>
    <div class="content">
        <form action="{{route('LoginController.store')}}" method="post">
            @csrf
            <h2>
                Đăng nhập trang quản trị
            </h2>
            <div class="from">
                <input type="email" placeholder="Tên đăng nhập" name="email">
                <input type="password" placeholder="Mật khẩu" name="password">
                <button type="submit">Đăng nhập</button>
            </div>
        </form>
    </body>

</html>