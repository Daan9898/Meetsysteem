<?php 
if(isset($_POST['submit'])){
    $to = "dsmid8891@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $company = $_POST['company'];
    $subject = "Form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$phone_number,$company,$message,$headers);

    }
?>
