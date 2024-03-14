<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Update Task</h1>
        <form id="updateForm">
            <input type="hidden" id="taskId">
            <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Task Name">
            </div>
            <div class="form-group">
                <textarea id="description" class="form-control" placeholder="Task Description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Task</button>
            <a href="index.php" class="btn btn-secondary">close</a>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="handle/update.js"></script>

</body>

</html>