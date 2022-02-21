
@extends('backend.admin')


@section('css')
    <link rel="stylesheet" href="{{asset('LTE/plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{asset('login/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('login/css3.css')}}">
@endsection
@section('js')
    <script src="{{asset('LTE/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('login/select2.min.js')}}"></script>
    <script>
        $(function(){
            $('.content_1').summernote({
                height: 250,
            })
        })
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection
@section('content')
    @include('backend.par.content',['name'=> 'product','key'=> 'add'])
   
        <div class="content">
        <div class="container-fluid">
            <form action="{{route('productController.store')}}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    <div class="col-md-6 col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">title</label>
                            {{--  <input type="text" class="form-control @error('name') is-invalid @enderror" name="sale" placeholder="Nhập tiêu đề">
                              --}}
                            <textarea class="form-control content_1"  name="title" id="" cols="30" rows="3"></textarea>
                             @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="mb-3">
                            <label class="form-label">code</label>
                            <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" placeholder="Nhập mã sản phẩm">
                             @error('code')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="mb-3">
                            <label class="form-label">description</label>
                            <textarea name="description" class="form-control content_1" id="content" cols="30"  rows="20">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nhập tên sản phẩm">
                             @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sale</label>
                            <input type="text" class="form-control @error('sale') is-invalid @enderror" name="sale" placeholder="nhập mức sale">
                             @error('sale')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="mb-3">
                            <label class="form-label">price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Nhập giá sản phẩm">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select name="type_id" class="form-control form-control @error('type_id') is-invalid @enderror" id="">
                                <option value="">--chọn danh mục sản phẩm--</option>
                                @foreach ($menus as $menu)
                                    <option value="{{$menu['id']}}">{{$menu['name']}}</option>
                                @endforeach
                            </select>
                            @error('type_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">tag</label>
                            <select multiple name="tag_id[]" class="form-control select2 form-control @error('tag_id') is-invalid @enderror">
                                @foreach ($tag as $post)
                                    <option value="{{$post['id']}}">{{$post['name']}}</option>
                                @endforeach
                            </select>
                            @error('tag_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">active</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="active" value="1" checked>
                                    Public
                                </label>
                                <label>
                                    <input type="radio" name="active" value="0" checked>
                                    Private
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">image</label>
                            <input type="file" value class="form-control form-control @error('file') is-invalid @enderror"  name="image" >
                            @error('file')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tải nhiều ảnh</label>
                            <input type="file" multiple value class="form-control"  name="image_path[]" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">origin</label>
                            <input type="text" class="form-control @error('origin') is-invalid @enderror" name="origin" placeholder="Nhập xuất xứ">
                             @error('origin')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="mb-3">
                            <label class="form-label">color</label>
                            <input type="text" class="form-control @error('color') is-invalid @enderror" name="color" placeholder="Nhập Màu sắc sản phẩm">
                             @error('color')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 15px; margin-bottom:10px ">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </div>

  
  @endsection