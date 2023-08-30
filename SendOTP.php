<!DOCTYPE html>

<?php
session_start();
$_SESSION['OTP'] = rand(100000,999999);


if(isset($_POST['sendotp'])){
    echo $_SESSION['OTP'];
	require_once 'vendor/autoload.php';
    $messagebird = new MessageBird\Client('ahk6TOKVkxSFSSo4uQwWpMgGg');
    $message = new MessageBird\Objects\Message;
    $message->originator = '+918208468378';
    $message->recipients = $_POST['phnNo'];
    $OPT = rand(100000,999999);
    $message->body = 'Dear user ' . $_SESSION['OTP'] . ' is your AuditPlus OTP for Login';
    $response = $messagebird->messages->create($message);
    print_r(json_encode($response));
    header("Location: OTPVerify.php");
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send OTP</title>

    <!-- Tab Icon -->
    <link rel="icon" href="images/icon.png">
    
    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/login1.css" />
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <section class="form">
        <img src="images/icon.png" alt="">
        <a class="navbar-brand" href="inedx.html">AuditPlus</a>
        <form method="post" action="SendOTP.php" class="loginbox">
            <input name="phnNo" placeholder="Enter Mobile No." type="tel" id="username"></input>
            <button class="btn btn-block" name="sendotp" id="submit">Send OTP</button>
        </form>
    </section>
</body>
</html>