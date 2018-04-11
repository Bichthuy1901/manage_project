@extends('admin.master')

@section('content-admin')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">{{ trans('message.title.manage_media') }}</li>
</ol>
<div class="row header-custom">
    <div class="col-md-1">
    <a class="btn btn-primary" href = "{{ route('media.create') }}">
    {{ trans('message.action.new') }}
    </a>
    </div>
</div>
<div class="table-responsive">
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
          <th class="text-center">#</th>
          <th class="text-center ">{{ trans('message.column.file') }}</th>
          <th class="text-center">{{ trans('message.column.name') }}</th>
          <th class="text-center">{{ trans('message.column.status') }}</th>
          <th class="text-center"></th>
      </tr>
    </thead>
    <tbody>
    @if (isset($media))
      @foreach ($media as $m)
      <tr>
          <th class="text-center">{{ $m->id }}</th>
          <th><img class="img-responsive media-file" src="{{ $m->path }}"></th>
          <th>{{ $m->name }}</th>
          <th class="text-center">
            @if ($m->status == config('custom.media.status.show'))
                <button class="btn btn-primary">{{ trans('message.config.show') }}</button>
            @else
            <button class="btn btn-warning">{{ trans('message.config.hide') }}</button>
            @endif
          </th>
          
          <th>
            <a href = "{{ route('media.edit', ['id' => $m->id]) }}">
              <i class="fas fa-edit"></i>
            </a>
            <a data-id="{{ $m->id}}" class="delMedia">
              <i class="fas fa-trash-alt"></i>
            </a>
          </th>
      </tr>
      @endforeach
    @endif
    </tbody>
  </table>
  @if (isset($media)) 
      {{ $media->links() }}
  @endif
</div>
@endsection
@section('script')
  <script src="{{ asset('js/admin/media.js') }}"></script>
@endsection