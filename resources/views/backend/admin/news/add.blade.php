
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
    @include('backend.par.content',['name'=> 'news','key'=> 'add'])
   
        <div class="content">
        <div class="container-fluid">
            <form action="{{route('NewController.store')}}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    <div class="col-md-6 col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">description</label>
                            <textarea name="description" class="form-control" id="content" cols="30"  rows="20">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">Tiêu đề tin tức</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nhập tiêu đề">
                            {{--  @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror  --}}
                        </div>
                        <div class="mb-3">
                            <label class="form-label">title phụ</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Nhập title">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select name="new_id" class="form-control" id="">
                                <option value="">--chọn danh mục tin tức--</option>
                                @foreach ($categories as $item)
                                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">status</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" value="1" checked>
                                    Public
                                </label>
                                <label>
                                    <input type="radio" name="status" value="0" checked>
                                    Private
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">image</label>
                            <input type="file" value class="form-control"  name="image" >
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 15px ">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </div>

  
  @endsection