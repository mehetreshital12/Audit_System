<!DOCTYPE html>
<?php
    session_start();
    
    if(isset($_POST['signin'])){
    $OTP = $_SESSION['OTP'];
    $userOTP = $_POST['enteredOtp'];
    $userOTP = (int)$userOTP;
    if($OTP != $userOTP)
    {
        header("Location: mainSectors.php");
    }
    else
    {
        echo '<script>alert("Wrong OTP")</script>';
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>

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
        <form method="post" action="OTPVerify.php" class="loginbox">
            <input name="enteredOtp" placeholder="Enter OTP" type="text" id="username"></input>
            <button class="btn btn-block" name="signin" id="submit">Verify OTP</button>
        </form>
    </section>
</body>
</html>