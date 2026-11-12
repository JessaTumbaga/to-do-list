<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>
    <h1>Add New Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <label>Task Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Description:</label><br>
        <textarea name="description" rows="3"></textarea><br><br>

        <label>Status:</label><br>
        <select name="status" required>
            <option value="Pending">Pending</option>
            <option value="Completed">Completed</option>
        </select><br><br>

        <label>Due Date:</label><br>
        <input type="date" name="due_date"><br><br>

        <button type="submit">Save Task</button>
        <a href="{{ route('tasks.index') }}">Cancel</a>
    </form>
</body>
</html>