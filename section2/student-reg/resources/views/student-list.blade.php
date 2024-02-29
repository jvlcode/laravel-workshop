<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
<body style="background-color:violet">
    <div class="container-fluid" >
        <div class="row bg-dark p-2">
            <h3 class="text-white">Laravel Project</h3>
        </div>
        <div class="d-flex justify-content-center">
            <div class="main-content my-5">
                <h1>Student List</h1>
                <div class="d-flex justify-content-end mb-3">
                    <a href="/student-form" class="btn btn-primary">Add Student</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Department</th>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->phone}}</td>
                            <td>{{$student->address}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->department}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>