<!DOCTYPE html>
<html>

<head>
    <title>To-Do List</title>
</head>

<body>
    <h1>To-Do List</h1>
    <a href="{{ route('tasks.create') }}">Create Task</a>
    @if(session('success'))
    <div>{{ session('success') }}</div>
    @endif
    <ul>
        @foreach ($tasks as $task)
        <li>
            <strong>{{ $task->title }}</strong>
            <p>{{ $task->description }}</p>
            <p>{{ $task->completed ? 'Completed' : 'Not Completed' }}</p>
            <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>

</html>