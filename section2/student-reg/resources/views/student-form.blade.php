<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
<body style="background-color:violet">
    <div class="container-fluid" >
        <div class="row bg-dark p-2">
            <h3 class="text-white">Laravel Project</h3>
        </div>
        <div class="d-flex justify-content-center">
            <div class="main-content my-5">
                <h1>Add New Student</h1>
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                @foreach ($errors->all() as $error)
                    
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                <form action="/add-student" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                    <br>
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                    <br>
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" class="form-control" required>
                    <br>
                    <label for="address">Address:</label>
                    <input type="text" name="address" class="form-control" required>
                    <br>
                    <label for="gender">Gender:</label>
                    <select name="gender" class="form-control" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    <br>
                    <label for="courses">Department:</label>
                    <input type="text" name="department" class="form-control" required>
                    <br>
                    <label for="part_time">Is Part-Time Student:</label>
                    <input type="checkbox" name="parttime" class="form-check-input" value="1">
                    <br><br>
                    <label for="joining_date">Joining Date:</label>
                    <input type="date" name="joining_date" class="form-control" value="">
                    <div class="mt-3">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-success">Add Student</button>
                            </div>
                            <div class="col-6">
                                <div class="d-flex justify-content-end">
                                    <a href="/student-list" class="btn btn-primary">View List</a>
                                </div>
                            </div>
                        </div>
                    </div>         
                    @csrf           
                </form>
            </div>
        </div>
    </div>
</body>
</html>


