
@extends('backend.admin')

@section('content')
    @include('backend.par.content',['name'=> 'category__news','key'=> 'add'])
   
        <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route('categoryNews.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">tên danh mục</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nhập tên danh mục tin tức">
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