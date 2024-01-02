<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "chaitanyak2308@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebDigi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./favicon/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,500;1,400;1,500&display=swap" rel="stylesheet">
</head>

<body class="redirect">
    <div class="container-message">
        <h1>Thankyou for reaching us..We will get back to you as soon as possible.</h1>
        <p class="go-back">Go back to <a class ="home-page"href="index.html">homepage</a></p>
    </div>
</body>

';


?>