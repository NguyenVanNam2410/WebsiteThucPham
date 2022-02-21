
@extends('backend.admin')

@section('content')
{{--  <div class="content-wrapper">  --}}
    <!-- Content Header (Page header) -->
    @include('backend.par.content',['name'=> 'menu','key'=> 'edit'])
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('MenuController.update',['id'=>$menu->id])}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">tên danh mục</label>
                      <input type="text" class="form-control" name = "name" value="{{$menu->name}}" placeholder="Nhập tên danh mục">
                    </div>
                  
                    <select class="form-select form-control" aria-label="Default select example" name="parent_id">
                        <option value="0">chọn danh mục cha</option>
                        {!!$option!!}
                      </select>
                    <button type="submit" class="btn btn-primary" style="margin-top: 15px ">Submit</button>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
