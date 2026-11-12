<!DOCTYPE html>
<html>
<head>
    <title>My Tasks</title>
</head>
<body>
    <h1>Task List</h1>

    <a href="{{ route('tasks.create') }}">+ Add New Task</a>
    <br><br>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @foreach ($tasks as $task)
        <hr>
        <p><strong>Title:</strong> {{ $task->title }}</p>
        <p><strong>Status:</strong> {{ $task->status }}</p>
        <p><strong>Description:</strong> {{ $task->description }}</p>
        <p><strong>Due Date:</strong> {{ $task->due_date ?? 'N/A' }}</p>
        
        <a href="{{ route('tasks.edit', $task->id) }}">Edit</a> | 
        
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this task?')">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <br><br>
    @endforeach
</body>
</html>