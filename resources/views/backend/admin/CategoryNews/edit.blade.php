
@extends('backend.admin')

@section('content')
    @include('backend.par.content',['name'=> 'category__news','key'=> 'edit'])
   
        <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route('categoryNews.update',$posts->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$posts['id']}}" id="">
                        <div class="mb-3">
                        <label class="form-label">tên danh mục</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name = "name" value="{{$posts['name']}}" placeholder="Nhập tên danh mục tin tức">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 15px ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>

  
  @endsection