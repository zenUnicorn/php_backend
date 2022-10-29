<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];

    //send email
    $to = $email;
    $subject = "Welcome to Environplatform";
    $message = "Hello, we will love to welcome you to the biggest and the best bitcoin cloud mining platform.";
    $headers= "FROM: iamholumeedey007@gmail.com";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;chrset=UTF-8". "\r\n";

    mail($to,$subject,$message,$headers);

    header('location: thankyou.php');

}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];

    $message = "Hi : ".$username. "\r\n" . 
            "Welcome to Environ Platform, we are thrilled to see you here!.". "\r\n" .
            "We are confident that our service will help you make earn some cryptocurrency with our cutting-edge cloud mining technology.". "\r\n" .
            "Regards". "\r\n" .
            "Environ Platform Team.";
     
    $from = "admin@environplatform.io";

    //change your email here
    $to = $email;
    $subject = "Welcome to Environplatform";
    $headers = "From: ". $from;
    
    mail($to, $subject, $message, $headers);

    header('Location: thank-you.html');

}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Username</label>
        <input type="text" name="username">
        <label for="">Email</label>
        <input type="email" name="email">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
