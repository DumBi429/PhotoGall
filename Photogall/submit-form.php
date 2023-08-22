<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "kudlaktl@gmail.com"; //replace with your email address
    $subject = "New message from your website";
    $headers = "From: $name <$email>";

    $body = "From: $name\nEmail: $email\nMessage: $message";

    if(mail($to,$subject,$message,$headers)){
        echo "Thank you for contacting us, we will get back to you as soon as possible.";
    }
    else{
        echo "Error sending message, please try again later.";
    }
}
?>