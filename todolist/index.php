<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container p=5 mt-5 shadow-md rounded">
        <div id="alertPlaceholder"></div>
        <h1 class="mb-4">To-Do List</h1>

        <form id="todoForm">
            <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Task Name">
            </div>
            <div class="form-group">
                <textarea id="description" class="form-control" placeholder="Task Description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
        <table class="table mt-4">

            <tbody id="todoList"></tbody>
        </table>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="handle/index.js">
            $(document).on('click', '.alert .close', function() {
                $(this).closest('.alert').alert('close');
            });
        </script>
</body>

</html>