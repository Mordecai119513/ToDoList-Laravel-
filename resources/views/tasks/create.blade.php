<!DOCTYPE html>
<html>

<head>
    <title>Create Task</title>
</head>

<body>
    <h1>Create Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label>Title</label>
        <input type="text" name="title" required>
        <label>Description</label>
        <textarea name="description"></textarea>
        <button type="submit">Create</button>
    </form>
</body>

</html>