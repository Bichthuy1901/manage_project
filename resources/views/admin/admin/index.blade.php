@extends('admin.master')

@section('content-admin')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">{{ trans('message.title.manage_admin') }}</li>
</ol>
<div class="row header-custom">
    <div class="col-md-1">
    <a class="btn btn-primary" href = "{{ route('trainer.create') }}">
    {{ trans('message.action.new') }}
    </a>
    </div>
    <div class="col-md-5"><input type="text" name="search" id="search" placeholder="Search ..." class="form-control"></div>
</div>
<div class="table-responsive">
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
          <th class="text-center">#</th>
          <th class="text-center">{{ trans('message.column.name') }}</th>
          <th class="text-center">{{ trans('message.column.trainer_code') }}</th>
          <th class="text-center"></th>
      </tr>
    </thead>
    <tbody>
    @if (isset($trainers))
      @foreach ($trainers as $trainer)
      <tr>
          <th class="text-center">{{ $trainer->id }}</th>
          <th>{{ $trainer->name }}</th>
          <th>{{ $trainer->email }}</th>
          <th>
            <a href = "{{ route('trainer.edit', ['id' => $trainer->id]) }}">
              <i class="fas fa-edit"></i>
            </a>
            @if (Auth::id() != $trainer->id)
            <a data-id="{{ $trainer->id}}" class="delTrainer">
              <i class="fas fa-trash-alt"></i>
            </a>
            @endif
          </th>
      </tr>
      @endforeach
    @endif
    </tbody>
  </table>
  @if (isset($trainers)) 
      {{ $trainers->links() }}
  @endif
</div>
@endsection
@section('script')
  <script src="{{ asset('js/admin/trainers.js') }}"></script>
@endsection