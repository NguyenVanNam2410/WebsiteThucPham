
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
    @include('backend.par.content',['name'=> 'news','key'=> 'all'])
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
                    <select name="category_id" id="" class="form-control">
                      <option value="">chọn danh mục</option>
                      @foreach ($categories as $item)
                        <option {{request()->input('category_id') == $item['id'] ? 'selected' : ''}} value="{{$item['id']}}">{{$item['name']}}</option>
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
                    <th scope="col">Tên tin tức</th>
                    <th scope="col">image</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Trang thái</th>
                    <th scope="col">created date</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                    <tr>
                      <th scope="row">{{$post->id}}</th>
                      <td class="name">{{$post->name}}</td>
                      <td>
                        <img class="image__path" src="{{asset('/storage/images/news/'.$post->image)}}" alt="" srcset="">
                      </td>
                      <td>
                          @if ($post->category_new)
                          {{$post->category_new->name}}
                          @endif
                      </td>
                      <td>
                         @if ($post->status == 0)
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
                        <a href="{{route('NewController.edit'  ,  ['id'=> $post->id])}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" data-url="{{route('NewController.delete',['id'=> $post->id])}}" class="btn btn-danger action_delete"><i class="far fa-trash-alt"></i></a>
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