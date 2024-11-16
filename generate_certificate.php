
<?php

session_start(); // Start the session

// Database connection parameters
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'folder'; // Database name

// Check if email and course are passed in the URL
if (isset($_GET['email']) && isset($_GET['course'])) {
    $email = $_GET['email'];
    $course_name = $_GET['course'];

    // Establish database connection
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the email exists in the database
    $stmt = $conn->prepare("SELECT NAME FROM mytable WHERE EMAIL = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // If the email exists, fetch the name
        $stmt->bind_result($name);
        $stmt->fetch();

        // Call the function to generate and download the certificate
        generate_certificate($name, $course_name);
    } else {
        // If no user is found with the provided email, prompt for signup
        echo "<p>No user found with the provided email. Please <a href='login_signup.html'>sign up</a> to proceed.</p>";
    }

    // Close the statement and database connection
    $stmt->close();
    mysqli_close($conn);
} else {
    echo "Invalid request. Please provide an email and course.";
}

// Function to generate and download the certificate
function generate_certificate($name, $course_name) {
    require('fpdf/fpdf.php'); // Include FPDF library

    // Create a new PDF instance
    $pdf = new FPDF();
    $pdf->AddPage();

    // Set PDF title
    $pdf->SetTitle('Certificate of Completion');

    // Set font
    $pdf->SetFont('Arial', 'B', 16);
    
    // Add title to the certificate
    $pdf->Cell(0, 10, 'Certificate of Completion', 0, 1, 'C');
    $pdf->Ln(10);

    // Add the course and user name
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, "This is to certify that", 0, 1, 'C');
    $pdf->Ln(5);
    
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, $name, 0, 1, 'C');
    $pdf->Ln(10);
    
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, "Has successfully completed the course", 0, 1, 'C');
    $pdf->Ln(5);

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, $course_name, 0, 1, 'C');
    $pdf->Ln(15);

    // Add the signature line and date
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Date: ' . date('F j, Y'), 0, 1, 'L');
    $pdf->Cell(0, 10, 'Signature: __________________________', 0, 1, 'L');

    // Output the PDF to the browser for download
    $pdf->Output('certificate.pdf', 'D');
}
?>
