d
@extends('backend.admin')

@section('content')
    @include('backend.par.content',['name'=> 'file_manager','key'=> 'all'])
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <iframe   src="{{url('/filemanager/dialog.php')}}" style="width:100%; height:500px; overflow-y:auto;border:none" frameborder="0"></iframe>
   
            </div>
        </div>
    </div>

</div>
@endsection
