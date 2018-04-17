@extends('admin.master')

@section('content-admin')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">{{ trans('message.title.manage_users') }}</li>
</ol>
<div class="row header-custom">
    <div class="col-md-1">
    <a class="btn btn-primary" href = "{{ route('user.create') }}">
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
          <th class="text-center">{{ trans('message.column.student_code') }}</th>
          <th class="text-center"></th>
      </tr>
    </thead>
    <tbody>
    @if (isset($students))
      @foreach ($students as $student)
      <tr>
          <th class="text-center">{{ $student->id }}</th>
          <th>{{ $student->name }}</th>
          <th>{{ $student->email }}</th>
          <th>
            <a href = "{{ route('user.edit', ['id' => $student->id]) }}">
              <i class="fas fa-edit"></i>
            </a>
            @if (Auth::id() != $student->id)
            <a data-id="{{ $student->id}}" class="delUser">
              <i class="fas fa-trash-alt"></i>
            </a>
            @endif
          </th>
      </tr>
      @endforeach
    @endif
    </tbody>
  </table>
  @if (isset($students)) 
      {{ $students->links() }}
  @endif
</div>
@endsection
@section('script')
  <script src="{{ asset('js/admin/user.js') }}"></script>
@endsection