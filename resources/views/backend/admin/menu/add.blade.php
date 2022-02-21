
@extends('backend.admin')

@section('content')
  @include('backend.par.content',['name'=> 'menu','key'=> 'add'])
   
  <div class="content">
  <div class="container-fluid">
      {{--  <form action="{{route('MenuController.store')}}" method="POST" enctype="multipart/form-data">  --}}
          <div class="row">
            <div class="col-md-6">
              <form action="{{route('MenuController.store')}}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">tên danh mục</label>
                    <input type="text" class="form-control" name = "name" placeholder="Nhập tên danh mục">
                  </div>
                
                  <select class="form-select form-control" aria-label="Default select example" name="parent_id">
                      <option value="0">chọn danh mục cha</option>
                      {!!$option!!}
                    </select>
                  <button type="submit" class="btn btn-primary" style="margin-top: 15px ">Submit</button>
              </form>
          </div>
          </div>
      {{--  </form>  --}}
  </div>
  </div>
</div>
  @endsection