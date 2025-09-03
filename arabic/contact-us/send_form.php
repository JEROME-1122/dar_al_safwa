<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phno = $_POST['Phone_number'];
    $email = $_POST['Email_address'];
    $sub = $_POST['Subject'];
    $enquiry = $_POST['message'];

    $to = 'daralsafwa@alhosnigroup.com';
    //$to = 'ginu@alhosnigroup.com';
    //$to = 'tgtamil434@gmail.com';
    $subject = 'New Enquiry from Contact Form';

    $message = "
Name: $name

Phone Number: $phno

Email: $email

Subject: $sub

Message:
$enquiry
";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $to\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: index.php?status=success");
        exit;
    } else {
        header("Location: index.php?status=error");
        exit;
    }
}
?>
