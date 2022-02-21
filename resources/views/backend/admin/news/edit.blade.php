
@extends('backend.admin')


@section('css')
    <link rel="stylesheet" href="{{asset('LTE/plugins/summernote/summernote-bs4.min.css')}}">
@endsection
@section('js')
    <script src="{{asset('LTE/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function(){
            $('#content').summernote({
                height: 250,
            })
        })
    </script>
@endsection
@section('content')
    @include('backend.par.content',['name'=> 'news','key'=> 'edit'])
   
        <div class="content">
        <div class="container-fluid">
            <form action="{{route('NewController.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    <div class="col-md-6 col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">description</label>
                            <textarea name="description" class="form-control" id="content" cols="30"  rows="20">
                                {{$post->description}}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">Tiêu đề tin tức</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$post->name}}" name="name" placeholder="Nhập tiêu đề">
                            {{--  @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror  --}}
                        </div>
                        <div class="mb-3">
                            <label class="form-label">title phụ</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$post->name}}" name="title" placeholder="Nhập title">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select name="new_id" class="form-control" id="">
                                <option value="">--chọn danh mục tin tức--</option>
                                @foreach ($categories as $item)
                                    <option {{$item->id == $post->category_new->id ? 'selected' : ''}} value="{{$item['id']}}">{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">status</label>
                            <div class="radio">
                                @if ($post->status == 1)
                                    <label>
                                        <input type="radio" name="status" value="1" checked>
                                        Public
                                    </label>
                                    <label>
                                        <input type="radio" name="status" value="0" >
                                        Private
                                    </label>
                                @else
                                <label>
                                    <input type="radio" name="status" value="1">
                                    Public
                                </label>
                                <label>
                                    <input type="radio" name="status" value="0" checked>
                                    Private
                                </label>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">image</label>
                            <input type="file" value="{{$post->image}}" class="form-control"  name="image">
                            <div style="margin-top: 10px">
                                <img width="100px" src="{{asset('/storage/images/news/'.$post->image)}}" alt="" srcset=""/>
                            </div>
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 15px ">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </div>

  
  @endsection