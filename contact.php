<?php

if($_POST["submit"]) {
    $recipient="mlyonsdesign@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>

<head>
    <script src="https://kit.fontawesome.com/246e25cd67.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michael Lyons | UI/UX Designer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<form method="POST" action="form.php" id="contact-form">
<h2>Contact us</h2>
<p><label>First Name:</label> <input name="name" type="text" /></p>
<p><label>Email Address:</label> <input style="cursor: pointer;" name="email" type="text" /></p>
<p><label>Message:</label>  <textarea name="message"></textarea> </p>

<p><input type="submit" value="Send" /></p>
</form>

<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

</body>
</html>