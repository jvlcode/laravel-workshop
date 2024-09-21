<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
<body >
    <div class="container-fluid" >
        <div class="row bg-dark p-2">
            <h3 class="text-white">Laravel Project</h3>
        </div>
        <div class="row bg-info py-5">
            <div class="col-6 main-content">
                <h1>Register Student</h1>
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                <form action="/add-student" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select name="gender" class="form-control" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" name="department" class="form-control" required>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="parttime" value="1">
                    <label class="form-check-label" for="parttime">Is Part-Time Student</label>
                </div>

                <div class="form-group mt-3">
                    <label for="joining_date">Joining Date:</label>
                    <input type="date" name="joining_date" class="form-control" value="">
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-dark">Add Student</button>
                </div>

                @csrf
            </form>

            </div>
            <div class="col-6">
                <h3>Registered Students</h3>
                @if(isset($students))
                <ul class="list-group">
                    @foreach($students as $student)
                    <li class="list-group-item">{{$student->name}} - {{$student->email}} - {{$student->joining_date}}</li>
                    @endforeach
                </ul>
                @else
                <p>No students</p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>


