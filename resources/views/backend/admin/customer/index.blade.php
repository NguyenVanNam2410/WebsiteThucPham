
@extends('backend.admin')
@section('js')
    <script src="{{asset('venders/sweetAlert2/sweetAlert2.js')}}"></script>
    <script src="{{asset('admins/main.js')}}"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('admins/setting/index/css.css')}}">
    <link rel="stylesheet" href="{{asset('admins/style/css.css')}}">
@endsection
@section('content')
    @include('backend.par.content',['name'=> 'customer','key'=> 'list'])
    <div class="container mt-2">
      {{-- @if(session()->exists('message'))
      
        <div class="alert alert-success" role= "alert">
          {{session('message')}}
        </div>

      @endif --}}
    </div>
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 form-margin" >
            </div>
            <div class="col-12">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">id đơn hàng mới nhất</th>
                    <th scope="col">Tên khách hàng</th>
                    {{--  <th scope="col">SDT</th>  --}}
                    <th scope="col">email</th>
                    {{--  <th scope="col">note</th>  --}}
                    {{--  <th scope="col">tổng tiền</th>  --}}
                    {{--  <th scope="col">tên sản phẩm</th>  --}}
                    <th scope="col">created date</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                    <tr>
                      <th scope="row">{{$post->id_customer}}</th>
                      <td>{{$post->customer_item->name}}</td>
                      {{--  <td>{{$post->customer_item->SDT}}</td>  --}}
                      <td>{{$post->customer_item->email}}</td>
                      {{--  <td>{{$post->note}}</td>  --}}
                      {{--  <td>                         
                        {{number_format($post->total_price ,0 ,",", "." )}} đ                          
                      </td>  --}}
                      {{--  <td>
                        @if ($post->customer_bill)
                          @foreach ($post->customer_bill as $item)
                            {{$item->name_product .' x '. $item->quanity .' / '}}
                          @endforeach
                        @endif
                      </td>  --}}
                      <td>
                        @if ($post->created_at)
                          {{$post->created_at}}
                        @endif
                      </td>
                      <td>
                        <a href="{{route('CustomerController.check'  ,  ['id'=> $post->id])}}" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>

                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{$posts->appends(request()->all())->links()}}
            </div>
          </div>
        </div>
      </div>
</div>

@endsection