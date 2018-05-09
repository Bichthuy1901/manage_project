@extends('admin.master')
@section('content-admin')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ trans('message.title.manage_admin') }}</a></li>
    <li class="breadcrumb-item active">{{ trans('message.title.edit_admin') }}</li>
</ol>
<div class="card card-register mx-auto mt-5">
    <div class="card-header">{{ trans('message.title.edit_admin') }}</div>
    <div class="card-body">
    @if (session('error'))            <!--thong bao cho nguoi dung khi thực hiện câu lệnh-->
        <div class="alert alert-success">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{route('admin.update', ['id'=>$admin->id])}}">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="{{$admin->id}}">
    {{ csrf_field() }}  
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-12">
                <label for="exampleInputName">{{ trans('message.column.name') }}</label>
                <input class="form-control" type="text" name="name" value="{{ $admin->name }}" placeholder="Enter name" required>
                @if ($errors->has('name'))
                    <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">{{ trans('message.column.email') }}</label>
            <input class="form-control" type="email" name="email" value="{{ $admin->email }}" placeholder="Enter email" required>
            @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">{{ trans('message.column.phone') }}</label>
            <input class="form-control" type="text" name="phone" value="{{ $admin->phone}}" placeholder="Enter phone" required>
            @if ($errors->has('phone'))
                <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
       
       	
        <button type="submit" class="btn btn-primary btn-block">{{ trans('message.action.save') }}</button>
    </form>
    </div>
</div>
@endsection