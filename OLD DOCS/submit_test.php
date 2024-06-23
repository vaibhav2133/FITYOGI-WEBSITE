<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "vaibhavmishra.vcs@gmail.com"; // Replace with your email address
    $subject = "Test Submission";
    $message = "You have received a new test submission:\n\n";
    
    foreach ($_POST as $key => $value) {
        $message .= "$key: $value\n";
    }

    $headers = "vaibhav.coder22@gmail.com"; // Replace with a valid email address

    if (mail($to, $subject, $message, $headers)) {
        echo "Test submitted successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>
