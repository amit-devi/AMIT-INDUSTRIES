<?php
// ==========================================
// 1. DATABASE CONNECTION SETUP
// ==========================================
// Apne cPanel ('MySQL Databases' section) se details nikal kar yahan update karein:

$servername = "sql307.byetcluster.com"; // Example: sql123.epizy.com
$username   = "if0_42239985"; // Example: epizy_12345678
$password   = "ZQoJj1IOBM";  // Aapka cPanel password
$dbname     = "if0_42239985_contact"; // Example: epizy_12345678_contacts

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed. Please check your database details.");
}

// ==========================================
// 2. PROCESS FORM DATA
// ==========================================
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve and sanitize data to prevent XSS attacks
    $fname   = htmlspecialchars(trim($_POST["fname"] ?? ''));
    $lname   = htmlspecialchars(trim($_POST["lname"] ?? ''));
    $mobile  = htmlspecialchars(trim($_POST["mobile"] ?? ''));
    $message = htmlspecialchars(trim($_POST["message"] ?? ''));
    
    // Specifically sanitize the email address
    $mail    = filter_var(trim($_POST["mail"] ?? ''), FILTER_SANITIZE_EMAIL);

    // Basic Validation: Ensure required fields aren't empty
    if (empty($fname) || empty($lname) || empty($mobile) || empty($mail)) {
        echo "<script>
                alert('Error: Please fill in all the required fields.');
                window.history.back(); // User ko wapas form par bhej dega
              </script>";
        exit;
    }

    // ==========================================
    // 3. SECURE DATABASE INSERTION
    // ==========================================
    // Prepared statement to prevent SQL Injection
    $stmt = $conn->prepare("INSERT INTO contacts (fname, lname, mobile, mail, message) VALUES (?, ?, ?, ?, ?)");
    
    // 'sssss' means 5 string parameters
    $stmt->bind_param("sssss", $fname, $lname, $mobile, $mail, $message);

    // Execute the query
    if ($stmt->execute()) {
        // Success: Show popup and redirect to homepage (make sure your homepage is index.php)
        echo "<script>
                alert('Thank you! Your message has been sent successfully.');
                window.location.href = 'index.php';
              </script>";
    } else {
        // Failure: Show error
        echo "<script>
                alert('Oops! Something went wrong while saving your message.');
              </script>";
    }

    // Close statement
    $stmt->close();
}

// Close database connection
$conn->close();
?>