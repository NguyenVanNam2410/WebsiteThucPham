
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
    @include('backend.par.content',['name'=> 'product','key'=> 'list'])
    <div class="container mt-2">
      @if(session()->exists('message'))
      
        <div class="alert alert-success" role= "alert">
          {{session('message')}}
        </div>

      @endif
    </div>
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 form-margin" >
              <form class="form-inline" action="">
                  <div class="form-group btn-margin">
                    <input class="form-control" name="key" type="text" placeholder="Search name" value="{{request()->input('key')}}" />
                  </div>
                  <div class="form-group btn-margin">
                    <select name="type_id" id="" class="form-control">
                      <option value="">chọn danh mục</option>
                      @foreach ($menus as $menu)
                        <option {{request()->input('type_id') == $menu['id'] ? 'selected' : ''}} value="{{$menu['id']}}">{{$menu['name']}}</option>
                      @endforeach
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary "><i class="fas fa-search"></i></button>
              </form>
            </div>
            <div class="col-12">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">image</th>
                    <th scope="col">giá / sale</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Trang thái</th>
                    <th scope="col">created date</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $post)
                    <tr>
                      <th scope="row">{{$post->id}}</th>
                      <td class="name">{{$post->name}}</td>
                      <td>
                        <img class="image__path" src="{{asset('/storage/images/product/'.$post->image)}}" alt="" srcset="">
                      </td>
                      <td>
                        {{$post->price}}/{{$post->sale}}
                      </td>
                      <td>
                          @if ($post->type_id)
                          {{$post->Menu->name}}
                          @endif
                      </td>

                      <td>
                         @if ($post->active == 0)
                            <span class="badge badge-primary">Private</span>
                          @else
                             <span class="badge badge-success">Publish</span>
                          @endif
                      </td>
                      <td>
                        @if ($post->created_at)
                          {{$post->created_at->format('m-d-Y')}}
                          @endif
                        </td>
                      <td>
                        <a href="{{route('productController.edit'  ,  ['id'=> $post->id])}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" data-url="{{route('productController.delete',['id'=> $post->id])}}" class="btn btn-danger action_delete"><i class="far fa-trash-alt"></i></a>
                      </td>

                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{$products->appends(request()->all())->links()}}
            </div>
          </div>
        </div>
      </div>
</div>

@endsection