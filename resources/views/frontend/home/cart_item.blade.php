@if (Session::has("Cart") != null)
    @foreach (Session::get("Cart")->products as $item)
        <div class="cart__child--item">
            <div class="cart__child--img">
                <img src="{{asset('storage/images/product/'.$item['productInfo']->image)}}" alt="" srcset="">
            </div>
            <div class="cart__child--label">
                <h3>{{$item['productInfo']->name}}</h3>
                
                @if($item['productInfo']->sale == 0)
                        <p> {{$item['quanity']}} x {{number_format($item['productInfo']->price, 0 ,",", "." )}}đ</p>
                @else
                        <p> {{$item['quanity']}} x   {{number_format( ((100 - $item['productInfo']->sale) * ($item['productInfo']->price) / 100 ), 0 ,",", "." )}}đ </p>
                @endif  
                
            </div>
            <div class="cart__child--icon">
                <i class="fas fa-times icon__cart" data-id = "{{$item['productInfo']->id}}"></i>
            </div>
        </div>
    @endforeach
    <div class="cart__child--money">
        <p>Thành tiền</p>
        <p>{{number_format(Session::get("Cart")->TotalPrice, 0 ,",", "." )}} đ</p>
        <input type="number" hidden id="total-quanity" value="{{Session::get("Cart")->TotalQuanity}}">
    </div> 
@endif