
// $name = $_POST['name'];
// $visitor_email = $_POST['email'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];

// $email_from = 'http://127.0.0.1:5500/Academor/liveClasses/university/index.html';

// $email_subject = 'New Form Submission';

// $email_body = "User Name : $name.\n ".
//                "User Email : $visitor_email.\n".
//                "Subject : $subject.\n".
//                "User Message : $_message .\n";

// $to = 'harshak.2k4@gmail.com';

// $headers = "From : $email_from \r\n";

// $headers .= "Reply-To : $vistor_email \r\n";

// mail($to,$email_subject,$email_body,$headers);

// header("Location : contact.html");

This is used to send email details about enter data




<?php



$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "contactdb";

$conn = mysqli_connect($server_name, $username, $password, $database_name);

// Check the connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql_query = "INSERT INTO entry_details (Name1, Visitor_email11, Subject111, UserMessage1111)
                  VALUES ('$name', '$visitor_email', '$subject', '$message')";

    if (mysqli_query($conn, $sql_query)) {
        echo 'New Details Inserted Successfully';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
