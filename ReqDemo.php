 <?php

require_once "config.php";
$username = $password = $cpassword = "";


if($_SERVER["REQUEST_METHOD"] == "POST")
{

    include 'config.php';
     $username = $_POST["username"];
     $password = $_POST["password"];
     $firstname = $_POST["firstname"];
     $lastname = $_POST["firstname"];
     $phoneno = $_POST["phoneno"];
     $cpassword = $_POST["cpassword"];
    $exists=false;

   //changes start
  if(empty(trim($_POST["username"])))
  {
      $username_err = "Username cannot be blank";
  }
  else
  {
      $sql = "SELECT id FROM register WHERE username = ?";
      $stmt = mysqli_prepare($conn, $sql);
      if($stmt)
      {
          mysqli_stmt_bind_param($stmt, "s", $param_username);

          // Set the value of param username
          $param_username = trim($_POST['username']);

          // Try to execute this statement
          if(mysqli_stmt_execute($stmt))
          {
              mysqli_stmt_store_result($stmt);
              if(mysqli_stmt_num_rows($stmt) == 1)
              {
                $username_err = "This username is already taken"; 

                echo "<script>alert('This username is already taken.');</script>";
              }
              else{
                  $username = trim($_POST['username']);
              }
          }
          else
          {
            echo "Something went wrong";
          }
               
          
      }
    }

    mysqli_stmt_close($stmt);

    if(empty(trim($_POST['password']))){
      $password_err = "Password cannot be blank";
      echo "<script>alert('Password cannot be blank');</script>";

  }
  elseif(strlen(trim($_POST['password'])) < 5){
      $password_err = "Password cannot be less than 5 characters";
      echo "<script>alert('Password cannot be less than 5 characters');</script>";

  }
  else{
      $password = trim($_POST['password']);
  }

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['cpassword'])){
  $password_err = "Passwords should match";
  echo "<script>alert('Password did not match.');</script>";


}


// If there were no errors, go ahead and insert into the database

    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["firstname"];
    $phoneno = $_POST["phoneno"];
    $cpassword = $_POST["cpassword"];

     $param_password = password_hash($password, PASSWORD_DEFAULT);


if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    
    $sql = "INSERT INTO `register` ( `username`, `password`,`firstname`, `lastname`, `phoneno` ) VALUES ('$username', '$password', '$firstname', '$lastname', '$phoneno')";
    $result = mysqli_query($conn, $sql);
    if ($result)
    {
           echo "<script>alert('User registration successfully.');window.location.href='login2.php';</script>";
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);


   if(($password == $cpassword) && $exists==false)
   {
        $sql = "INSERT INTO `register` ( `username`, `password`,`firstname`, `lastname`, `phoneno` ) VALUES ('$username', '$password', '$firstname', '$lastname', '$phoneno')";
        $result = mysqli_query($conn, $sql);
       if ($result)
       {
          echo "<script>alert('User registration successfully.');window.location.href='login1.php';</script>";
       

       }
   } 
   else
   {
        echo "<script>alert('Password did not match.');</script>";

   }

  



  }

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" >
    <title>Request Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">

    <!-- Tab Icon -->
    <link rel="icon" href="images/icon.png" />

    <!-- CSS Stylesheet -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/ReqDemo.css" />
  </head>
  <body style="background-color:rgb(1, 1, 54)">




    <div class="container" >
      <div class="title">Request Demo</div>
      <div class="content">
      <h3><br> Please fill appropriate details</h3>

        <form action="" method="post" class="credit-card">
          <div class="user-details">
            <div class="input-box">
              <span class="details">First Name</span>
              <input type="text" placeholder="Enter your name" name="firstname" pattern="[A-Za-z]{1,32}" title="must be only letters" required />
            </div>
            <div class="input-box">
              <span class="details">Last Name</span>
              <input type="text" placeholder="Enter your lastname" name="lastname" pattern="[A-Za-z]{1,32}" title="must be only letters" required />
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" placeholder="Enter your email" id="username" name="username" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="must be valid email" required  />
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" placeholder="Enter your number" required id="phoneno1" name="phoneno" pattern="[7-9]{1}[0-9]{9}" title="mobile number must be valid" required/>
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="password" placeholder="Enter your password"  id="password1" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&-+=_()]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
            </div>
            <div class="input-box">
              <span class="details">Confirm Password</span>
              <input type="password" placeholder="Confirm your password"  id="cpassword2" name="cpassword" required />
            </div>
          </div>
           <div class="card-details">
            <input type="radio" name="card" id="dot-1" />
            <input type="radio" name="card" id="dot-2" />

            <span class="card-title">Card Details</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="card">Credit Card</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="card">Debit Card</span>
              </label>
            </div>

            
          </div> 

          <div class="user-details">
            <div class="input-box">
              <span class="details">Card No</span>
              <input type="text" placeholder="Card No." name="firstname" required />
            </div>
          </div>

          
          


  <div class="button">
            <input type="submit" class="btn btn-primary" value="Submit" />
          </div>
          
        </form>
        
      </div>
    </div>
  </body>
</html>
