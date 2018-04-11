
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
          <th class="text-center">#</th>
          <th class="text-center">{{ trans('message.column.name') }}</th>
          <th class="text-center">{{ trans('message.column.email') }}</th>
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