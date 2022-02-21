
@extends('backend.admin')


@section('css')
    <link rel="stylesheet" href="{{asset('LTE/plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{asset('login/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('login/css2.css')}}">
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
    @include('backend.par.content',['name'=> 'product','key'=> 'edit'])
   
        <div class="content">
        <div class="container-fluid">
            <form action="{{route('productController.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    <div class="col-md-6 col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">title</label>
                            <textarea class="form-control content_1" name="title" id="" cols="30" rows="3">
                                {{$product->title}}
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">code</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="code" value="{{$product->code}}" placeholder="Nhập mã sản phẩm">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">description</label>
                            <textarea name="description" class="form-control content_1" id="content" cols="30"  rows="20">
                                {{$product->description}}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$product->name}}" placeholder="Nhập tên sản phẩm">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sale</label>
                            <input type="text" value="{{$product->sale}}" class="form-control @error('name') is-invalid @enderror" name="sale" placeholder="nhập mức sale">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{$product->price}}" name="price" placeholder="Nhập giá sản phẩm">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select name="type_id" class="form-control" id="">
                                <option value="">--chọn danh mục sản phẩm--</option>
                                @foreach ($menus as $menu)
                                    <option {{$product->type_id == $menu['id'] ? 'selected' : '' }} value="{{$menu['id']}}">{{$menu['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        @php
                            $tag_id = $product->tags->pluck('id')->toArray();
                        @endphp
                        <div class="mb-3">
                            <label class="form-label">tag</label>
                            <select multiple name="tag_id[]" class="form-control select2">
                                @foreach ($tags as $tag)
                                    <option {{in_array($tag->id, $tag_id ) ? 'selected' : ''}} value="{{$tag['id']}}">{{$tag['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">active</label>
                            <div class="radio">
                                @if ($product->active == 1)
                                    <label>
                                        <input type="radio" name="active" value="1" checked>
                                        Public
                                    </label>
                                    <label>
                                        <input type="radio" name="active" value="0" >
                                        Private
                                    </label>
                                @else
                                    <label>
                                        <input type="radio" name="active" value="1">
                                        Public
                                    </label>
                                    <label>
                                        <input type="radio" name="active" value="0" checked>
                                        Private
                                    </label>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">image</label>
                            <input type="file" value class="form-control"  name="image" >
                            <div style="margin-top: 10px">
                                <img width="100px" src="{{asset('/storage/images/product/'.$product->image)}}" alt="" srcset=""/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tải nhiều ảnh</label>
                            <input type="file" multiple value class="form-control"  name="image_path[]" >
                            <div style="margin-top: 10px">
                                @foreach ($product->Product_image as $item)
                                    <img width="100px" src="{{asset('/storage/images/products/'.$item->image)}}" alt="" />
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">origin</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$product->origin}}" name="origin" placeholder="Nhập xuất xứ">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">color</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="color" value="{{$product->color}}" placeholder="Nhập Màu sắc sản phẩm">
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 15px; margin-bottom:10px ">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </div>

  
  @endsection