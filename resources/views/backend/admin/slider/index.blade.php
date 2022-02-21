
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
    @include('backend.par.content',['name'=> 'slider','key'=> 'list'])
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
            <div class="col-12">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Tên</th>
                    <th scope="col">image</th>
                    <th scope="col">note</th>
                    <th scope="col">created date</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                    <tr>
                      <th scope="row">{{$post->id}}</th>
                      <td >{{$post->name}}</td>
                      <td>
                        <img class="image__path" src="{{asset('/storage/images/sliders/'.$post->image)}}" alt="" srcset="">
                      </td>
                      <td style="width:500px">
                        {{$post->note}}
                      </td>
                      <td>
                        @if ($post->created_at)
                          {{$post->created_at->format('m-d-Y')}}
                          @endif
                        </td>
                      <td>
                        <a href="{{route('SliderController.edit'  ,  ['id'=> $post->id])}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" data-url="{{route('SliderController.delete',['id'=> $post->id])}}" class="btn btn-danger action_delete"><i class="far fa-trash-alt"></i></a>
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