@extends('admin.master')
@section('content-admin')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item"><a href="{{ route('trainer.index') }}">{{ trans('message.title.manage_trainer') }}</a></li>
    <li class="breadcrumb-item active">{{ trans('message.title.create_trainer') }}</li>
</ol>
<div class="card card-register mx-auto mt-5">
    <div class="card-header">{{ trans('message.title.create_trainer') }}</div>
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
    <form method="POST" action="{{route('trainer.store')}}">
    {{ csrf_field() }}  
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-12">
                <label for="exampleInputName">{{ trans('message.column.name') }}</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Enter name" required>
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
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Enter email" required>
            @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">{{ trans('message.column.birthday') }}</label>
            <input class="form-control" type="date" name="birthday" value="{{ old('birthday') }}" placeholder="Enter birthday" required>
            @if ($errors->has('birthday'))
                <span class="help-block">
                        <strong>{{ $errors->first('birthday') }}</strong>
                </span>
            @endif
       

        <div class="form-group">
            <label for="exampleInputEmail1">{{ trans('message.column.address') }}</label>
            <input class="form-control" type="text" name="address" value="{{ old('address') }}" placeholder="Enter Address" required>
            @if ($errors->has('address'))
                <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">{{ trans('message.column.orientation') }}</label>
            <input class="form-control" type="text" name="orientation" value="{{ old('orientation') }}" placeholder="Enter orientation" required>
            @if ($errors->has('orientation'))
                <span class="help-block">
                        <strong>{{ $errors->first('orientation') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">{{ trans('message.column.phone') }}</label>
            <input class="form-control" type="text" name="phone" value="{{ old('phone') }}" placeholder="Enter phone" required>
            @if ($errors->has('phone'))
                <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
         <div class="form-group">
            <label for="exampleInputEmail1">{{ trans('message.column.note') }}</label>
            <input class="form-control" type="text" name="note" value="{{ old('note') }}" placeholder="Enter note" required>
            @if ($errors->has('note'))
                <span class="help-block">
                        <strong>{{ $errors->first('note') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">{{ trans('message.column.gender') }}</label>
            <div class="radio">
                <label>
                    <input type="radio" name="gender" value="1" checked>{{ trans('message.config.male') }}
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="gender" value="0">{{ trans('message.config.female') }}
                </label>
            </div>
        </div>
       	
        <button type="submit" class="btn btn-primary btn-block">{{ trans('message.action.save') }}</button>
    </form>
    </div>
</div>
@endsection