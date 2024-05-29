<!DOCTYPE html>
<html>

<head>
    <title>Edit Task</title>
</head>

<body>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title</label>
        <input type="text" name="title" value="{{ $task->title }}" required>
        <label>Description</label>
        <textarea name="description">{{ $task->description }}</textarea>
        <label>Completed</label>
        <input type="checkbox" name="completed" value="1" {{ $task->completed ? 'checked' : '' }}>
        <button type="submit">Update</button>
    </form>
</body>

</html>