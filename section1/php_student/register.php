<?php
$host = "localhost";
$username = "root";
$password = "test@123";
$database = "php_student_reg";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted for registering a student
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $parttime = isset($_POST['parttime']) ? 1 : 0;
    $joinedDate = $_POST['joined_date'];

    $sql = "INSERT INTO students (name, email, phone, address, 
            gender, department, parttime, joined_date) 
            VALUES ('$name', '$email', '$phone', '$address', 
            '$gender', '$department', $parttime, '$joinedDate')";

    if ($conn->query($sql) === TRUE) {
        echo "Student registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch and display registered students
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body >
    <div class="container-fluid" >
        <div class="row bg-dark p-2">
            <h3 class="text-white">PHP Project</h3>
        </div>
        <div class="row bg-info">
            <div class="col-6">
                <h2>Student Registration</h2>
                <form action="" method="post">
                    <label for="name">Student Name:</label>
                    <input type="text" name="name" required><br>
        
                    <label for="email">Student Email:</label>
                    <input type="email" name="email" required><br>
        
                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" required><br>
        
                    <label for="address">Address:</label>
                    <textarea name="address" rows="3" required></textarea><br>
        
                    <label for="gender">Gender:</label>
                    <select name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select><br>
        
                    <label for="department">Department:</label>
                    <input type="text" name="department" required><br>
        
                    <label for="parttime">Part-time Student:</label>
                    <input type="checkbox" name="parttime"><br>
        
                    <label for="joined_date">Joined Date:</label>
                    <input type="date" name="joined_date" required><br>
        
                    <button type="submit">Register Student</button>
                </form>
            </div>
            <div class="col-6">
            <h3>Registered Students</h3>
            <?php
                if ($result->num_rows > 0) {
                    echo "<ul>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>{$row['name']} - {$row['email']} ({$row['joined_date']})</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "No students registered.";
                }
                $conn->close();
            ?>
            </div>
        </div>
    </div>
</body>
</html>
