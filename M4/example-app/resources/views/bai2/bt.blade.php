<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Task Manager</h1>
        <a href="/tasks/create" class="btn btn-primary">Create New Task</a>
        <form action="/bt" method="get">
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Làm bài tập tuần</td>
                    <td>25/07/2023</td>
                    <td>26/07/2023</td>
                    <td><span class="badge bg-success">Done</span></td>
                    <td>
                        <a href="/bt/1" class="btn btn-info btn-sm">View</a>
                        <a href="/bt/1/edit" class="btn btn-primary btn-sm">Edit</a>
                        <a href="/bt/1/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <!-- Thêm các dòng dữ liệu cho các công việc khác -->
            </tbody>
        </table>
</form>
    </div>
</body>
</html>