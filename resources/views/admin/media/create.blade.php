@extends('admin.master')
@section('content-admin')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item"><a href="{{ route('media.index') }}">{{ trans('message.title.manage_media') }}</a></li>
    <li class="breadcrumb-item active">{{ trans('message.title.create_media') }}</li>
</ol>
<div class="card card-register mx-auto mt-5">
    <div class="card-header">{{ trans('message.title.create_media') }}</div>
    <div class="card-body">
    @if (session('error'))            <!--thong bao cho nguoi dung khi thực hiện câu lệnh-->
        <div class="alert alert-success"
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{route('media.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}  
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-12">
                <label for="exampleInputName">{{ trans('message.column.name') }}</label>
                <input class="form-control" type="text"  name="name" value="{{ old('name') }}" placeholder="Enter name" required>
                @if ($errors->has('name'))
                    <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">{{ trans('message.column.file') }}</label>
            <input class="form-control" id="file-media" type="file" name="path" value="{{ old('path') }}" placeholder="Enter email" required>
            @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('path') }}</strong>
                </span>
            @endif
            <img class="col-md-12 img-responsive review-file-media">
        </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="0">{{ trans('message.config.hide') }}
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="1">{{ trans('message.config.show') }}
                </label>
            </div>
        </div>
       	
        <button type="submit" class="btn btn-primary btn-block">{{ trans('message.action.show') }}</button>
    </form>
    </div>
</div>
@endsection
@section('script')
    <script src="{{ asset('js/admin/media.js') }}"> </script>
@endsection