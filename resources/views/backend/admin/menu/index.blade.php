
@extends('backend.admin')

  @section('content')
    @include('backend.par.content',['name'=> 'menu','key'=> 'list'])
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
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($menus as $item)
                    <tr>
                      <td scope="row">{{$item['id']}}</td>
                      <td>{{$item->name}}</td>
                      <td>
                        <a href="{{route('MenuController.edit'  ,  ['id'=> $item->id])}}" class="btn btn-default"><i class="far fa-edit"></i></a>
                        <a href="{{route('MenuController.delete',  ['id'=> $item->id])}}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{$menus->appends(request()->all())->links()}}
            </div>
          </div>
        </div>
      </div>
</div>

@endsection