
@extends('backend.admin')
@section('content')
    @include('backend.par.content',['name'=> 'slider','key'=> 'add'])
   
        <div class="content">
        <div class="container-fluid">
            <form action="{{route('SliderController.store')}}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    <div class="col-md-6 col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">note</label>
                            <textarea name="note" class="form-control"  cols="10"  rows="10">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">Tên slider</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nhập tiêu đề">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
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