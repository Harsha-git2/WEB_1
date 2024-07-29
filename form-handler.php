<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "contactdb";

$conn = new mysqli($server_name, $username, $password, $database_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if (isset($_POST['save'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $visitor_email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    $stmt = $conn->prepare("INSERT INTO entry_details (Name1, Visitor_email11, Subject111, UserMessage1111) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $visitor_email, $subject, $message);

    if ($stmt->execute()) {
        echo 'New Details Inserted Successfully';
    } else {
        echo 'Error: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
