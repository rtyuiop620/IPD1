<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'mytutor';

    // Create connection
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and bind statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO your_table_name (name, email, mobile, city) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $mobile, $city);

    // Execute statement and check for errors
    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS -->
</head>
<body>
    <form action="#" method="POST">
        <label>Name: <input type="text" name="name" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Mobile: <input type="text" name="mobile" required></label><br>
        <label>City: <input type="text" name="city" required></label><br>
        <input type="submit" name="submit" value="Send Data">
    </form>
</body>
</html>
