<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO feed (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Your message has been sent successfully!');
        window.location.href = 'index2.html';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
