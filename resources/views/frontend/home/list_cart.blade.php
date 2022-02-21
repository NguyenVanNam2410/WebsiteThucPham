
@if(Session::has("Cart") != null)
    @foreach (Session::get("Cart")->products as $item)
        
        <div class="cart__product">
            <a class="cart__product--img">
                <img src="{{asset('storage/images/product/'.$item['productInfo']->image)}}" alt="" srcset="">
            </a>
            <div class="cart__product__title">
                <div class="cart__price">
                    @if($item['productInfo']->sale == 0)
                        <p>{{number_format($item['productInfo']->price, 0 ,",", "." )}}đ</p>
                        <p class="cart__price--label"></p>
                    @else
                        <p>{{number_format( ((100 - $item['productInfo']->sale) * ($item['productInfo']->price) / 100 ), 0 ,",", "." )}}đ </p>
                        <p class="cart__price--label">{{number_format($item['productInfo']->price, 0 ,",", "." )}}đ</p>
                    @endif  
                </div>
                <h3>{{$item['productInfo']->name}}</h3>
                <div class="cart__product--number">
                    <p>số lượng: </p>
                    <p class="cart__product--number--label">{{$item['quanity']}}</p>
                </div>
            </div>
            <div class="cart__icon">
                <a class="close__cart fas fa-times" onclick="DeleteListItem({{$item['productInfo']->id}})"></a>
            </div>
        </div>
    @endforeach
    <div class="cart__money">
        <p>Tổng cộng:</p>
        <p>{{number_format(Session::get("Cart")->TotalPrice, 0 ,",", "." )}} đ</p>
    </div>

    <div class="cart__voucher">
        <h4>Sử dụng voucher</h4>
        <div class="cart__voucher--item">
            <button><i class="far fa-trash-alt"></i></button>
            <input type="text">
            <button><i class="fas fa-check"></i></button>
        </div>
    </div>
    <div class="into__money">
        <p>thành tiền</p>
        <p class="cart__product--number--label">{{number_format(Session::get("Cart")->TotalPrice, 0 ,",", "." )}} đ</p>
    </div>
    <input type="number" hidden id="total-quanity" value="{{Session::get("Cart")->TotalQuanity}}">
@endif