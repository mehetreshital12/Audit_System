<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

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
    <link rel="stylesheet" href="css/login.css" />
   
     <!-- Fontawesome icons -->
  <script src="https://kit.fontawesome.com/d439574862.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="container-fluid">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img src="images/sslogo.png" alt="AuditPlus" hight="100" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fas fa-bars" style="color: rgb(14, 167, 206); font-size: 28px"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item">
              <a class="nav-link" href="Home.html">Home</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="ReqDemo.php">Request Demo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login2.php">Login</a>
            </li>
          </ul>
        </div>
      </nav>

     <div class="container mt-5" id="container">
    <div class="form-container sign-up-container">
      <form action="#">
         
      <h3 class="font-weight-bold signup-title">Create Account</h3>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <input type="text" placeholder="Full Name" />
        <input type="email" placeholder="Email" />
        <input type="password" placeholder="Password" />
        <input type="tel" placeholder="Phone No" />
        
        <div class="card-type">
            <label style="display: inline; margin-right: 30px;" for="credit">
            <input style="margin-right: 5px; " class="card-type" type="radio" checked id="credit" name="payment" value="CREDIT">Credit Card</label>
        
        <label style="display: inline;"  for="debit">
            <input style="margin-right: 5px;" class="card-type" type="radio" id="debit" name="payment" value="DEBIT">Debit Card</label>
        </div>

        <input type="text" placeholder="Card Number" />
        <div class="card-type">
        <input style="width: 105px;" type="text" placeholder="CVV" maxlength="3"/>
        <input style="width: 150px;" type="text" placeholder="MM/YY" maxlength="7"/>
        </div>
        <button class="btn btn-info btn-block btn-rounded">Sign up</button>
      </form>
    </div>
    

    <div class="form-container sign-in-container">
      <form method="post" action="login.php">
        <i style="color: #33b5e5;" class="fas fa-user-circle fa-4x"></i>
        <h4 class="font-weight-bold signin-title">Sign into your account</h4>
         <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
         <span>or use your account</span> 
        <input type="text" name="phnNo" placeholder="Enter Mobile No." />
        <input type="email" name="mail" placeholder="Enter your password" />
         <input type="submit" name="signin" value="Sign In" class="btn btn-info btn-rounded btn-block signin-btn">
         <a href="#">Forgot password?</a>
      </form>
    </div>

    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1 class="font-weight-bold">Good to see you!<h1>
          <p>You already have an account? <br>Sign in!</p>
          <button class="but" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h2 class="font-weight-bold">Don't have an account?</h2>
          <p>You don't have account yet? Don't worry! You still can join us</p>
          <button class="but" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
 
  <script type="text/javascript" src="js/login.js"></script>
</body>
</html>