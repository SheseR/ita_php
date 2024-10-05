<div>
   My tasks
</div>
<a href="{{ route('tasks.create') }}">Add new tasks</a>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Completed</th>
{{--        <th>Actions</th>--}}
    </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->name }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->compaleted }}</td>
                <td>
                    <form method="POST" action="{{ route('tasks.destroy', $task) }}" >
                        {{--  проста лінка на форму редагування                --}}
                        <a href="{{ route('tasks.edit', $task) }}">Edit</a>
                        {{--  @csrf це токен для форми. захист ларавел         --}}
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<div>
    {{--    <form method="POST" action="{{ route('tasks.destroy', $task) }}">--}}
    {{--        @csrf--}}
    {{--        @method("DELETE")--}}
    {{--        <button type="submit">Delete</button>--}}
    {{--    </form>--}}
</div>
