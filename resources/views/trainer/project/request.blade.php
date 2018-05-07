@extends('trainer.master')

@section('content-admin')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}">Trainer</a>
    </li>
    <li class="breadcrumb-item active">{{ trans('message.title.request_project') }}</li>
</ol>
<div class="table-responsive">
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
          <th class="text-center col-md-1">#</th>
          <th class="text-center col-md-2">{{ trans('message.column.student') }}</th>
          <th class="text-center col-md-3">{{ trans('message.column.type') }}</th>
          <th class="text-center col-md-3">{{ trans('message.column.project_name') }}</th>
          <th class="text-center col-md-2">{{ trans('message.column.attach_file') }}</th>
          <th class="text-center col-md-1"></th>
      </tr>
    </thead>
    <tbody>
    @if (isset($projects))
      @foreach ($projects as $project)
      <tr>
          <th class="text-center col-md-1">{{ $project->id }}</th>
          <th class="text-center col-md-2">{{ $project->student->name }}</th>
          <th class="text-center col-md-3">{{ $project->type->name }}</th>
          <th class="text-center col-md-3">{{ $project->name }}</th>
          <th class="text-center col-md-2"><a href = "{{ asset(config('custom.project.defaultAttachFilePath') . '/' . $project->student->id . '/' . $project->attach_file) }}">{{ $project->attach_file }}</th>
          <th class="col-md-1">
          <i class="fas fa-eye"></i>
          </th>
      </tr>
      @endforeach
    @endif
    </tbody>
  </table>
</div>
@endsection
@section('script')
@endsection