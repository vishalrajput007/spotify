<?php
$email = $_POST['email'];
$pass = $_POST['password'];
$name = $_POST['name'];
$year = $_POST['year'];
$month = $_POST['month'];
$day1 = $_POST['day'];
$gender = $_POST['gender'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "spotify_signup";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br>";
$stmt = $conn->prepare("INSERT INTO signup (email, password, name, year, month, day, gender) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssisss", $email, $pass, $name, $year, $month, $day1, $gender);
if ($stmt->execute()) {
    echo "Signup successfully";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>