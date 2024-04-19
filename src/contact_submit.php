<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];

    // Process the form data (you can add your processing logic here)

    
    // Define recipient's email address
    $to = 'tes@testserver.com';     // <-------------------- CHANGE THIS FOR YOUR CONVENIENCE
    $subject = 'Form information from customer';
    
    // Define HTML email content
    $email_message = '
    <html>
    <head>
      <title>Contact Information </title>
    </head>
    <body>
      <h1>New Visual Information Form submited</h1>
      <p>You reveived a form information from your website :</p>
      <p> Name : ' . $first_name . ' ' . $last_name . '</p>
      <p> Email : ' . $email . ' Phone: ' . $phone_number . '</p>
      <p> Message : ' . $message . '</p>
    </body>
    </html>
    ';
    
    // Define email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: ' . $email . "\r\n"; // Replace with your sender email address
    
    // Send the email
    /* if (mail($to, $subject, $message, $headers)) {
        // Redirect to a success page
         header("Location: thankyou.html");

        exit;
    } else {
        echo 'Failed to send email.';
    }
    */

    header("Location: thankyou.html");
    
} else {
    // If the request method is not POST, return a 405 error
    http_response_code(405);
    exit("Method Not Allowed");
}
?>
