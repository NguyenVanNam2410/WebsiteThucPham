
@extends('backend.admin')
@section('js')
    {{--  <script src="{{asset('venders/sweetAlert2/sweetAlert2.js')}}"></script>  --}}
    {{--  <script src="{{asset('admins/main.js')}}"></script>  --}}
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('admins/setting/index/css.css')}}">
    <link rel="stylesheet" href="{{asset('admins/style/css.css')}}">
    <link rel="stylesheet" href="{{asset('admins/style/css_cart.css')}}">
@endsection
@section('content')
    @include('backend.par.content',['name'=> 'check','key'=> 'đơn hàng'])
    <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-6 col-xl-6">
                  <h2 class="heading_cart">Thông tin Khách hàng</h2>
                <div class="check">
                    <div class="check_item">
                        <p class="check_p">Tên khách hàng: </p>
                        <p class="check_span">{{$post->customer_item->name}}</p>
                    </div>
                    <div class="check_item">
                        <p class="check_p">Số điện thoại: </p>
                        <p class="check_span">{{$post->customer_item->SDT}}</p>
                    </div>
                    <div class="check_item">
                        <p class="check_p">email: </p>
                        <p class="check_span">{{$post->customer_item->email}}</p>
                    </div>
                    <div class="check_item">
                        <p class="check_p">thời gian đặt hàng: </p>
                        <p class="check_span">{{$post->created_at}}</p>
                    </div>
                    <div class="check_item">
                        <p class="check_p">địa điểm giao hàng: </p>
                        <p class="check_span">{{$post->customer_item->address.'-'.$post2->XaPhuong->name_xahuyen.'-'.$post2->QuanHuyen->name_quanhuyen.'-'.$post2->Thanhpho->name}}</p>
                    </div>
                    <div class="check_i">
                        <p class="check_p">note:     </p>
                        <p class="check_span">{{$post->note}}</p>
                    </div>
                
                </div>  
            </div>
            <div class="col-md-6 col-xl-6">
                <h2 class="heading_cart">Thông tin đơn hàng</h2>
                <div class="check">
                    @foreach ($post->customer_bill as $item)
                        <div class="cart__product">
                            <a class="cart__product--img">
                                <img src="{{asset('storage/images/product/'.$item->image)}}" alt="" srcset="">
                            </a>
                            <div class="cart__product__title">
                                <div class="cart__price">
                                    <p>{{$item->unit_price}}</p>
                                    <p class="cart__price--label">{{$item->price_product}}</p>
                                    {{--  <p class="cart__price--label"></p>  --}}
                                </div>
                                <h3>{{$item->name_product}}</h3>
                                <div class="cart__product--number">
                                    <p>số lượng: </p>
                                    <p class="cart__product--number--label">{{$item->quanity}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <p class="money">tổng tiền:  {{number_format($post->total_price ,0 ,",", "." )}} đ        </p>

                </div>
                <form action="" method="post" class="formCart">
                    <button type="submit" class="btn btn-success">xác nhận</button>
                </form>
            </div>

          </div>
        </div>
      </div>
</div>

@endsection