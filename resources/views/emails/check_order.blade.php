
<div style="width:600px; margin: 0 auto; ">
    <div style="text-align: center">
        <h2>Xin chào {{$post->name}}</h2>
        <p>
            bạn đã đặt hàng tại hệ thống website của chúng tôi, vui lòng kiểm tra lại thông tin đơn hàng của bạn và nhấn vào 
            nút xác nhận đơn hàng
        </p>
        <p>
            <a href="">Xác nhận đơn hàng của bạn</a>
        </p>
    </div>
    <table border="1" cellspacing = "0" cellpadding = "0" style="width: 100%">
        <tr>
            <th>Name</th>
            <td>{{$post->name}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$post->email}}</td>
        </tr>
        <tr>
            <th>phone</th>
            <td>{{$post->SDT}}</td>
        </tr>
        <tr>
            <th>Adress</th>
            <td>{{$post->address.'-'.$post->XaPhuong->name_xahuyen.'-'.$post->QuanHuyen->name_quanhuyen.'-'.$post->Thanhpho->name}}</td>
        </tr>
    </table>
    @if (Session::has("Cart") != null)
        <table border="1" cellspacing = "0" cellpadding = "0" style="width: 100% ; margin-top: 20px">
            @foreach (Session::get("Cart")->products as $item)
                <tr>
                    <th>Sản phẩm</th>
                    <td>{{$item['productInfo']->name}} x  {{$item['quanity']}}</td>
                </tr>
            @endforeach
            <tr>
                <th>Tổng tiền</th>
                <td>{{number_format(Session::get("Cart")->TotalPrice, 0 ,",", "." )}} đ</td>
            </tr>
        </table>
    @endif
</div>