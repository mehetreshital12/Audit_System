<?php
$server = "localhost: 3306";
$username = "root";
$password = "";
$database = "auditplus";
    $con = mysqli_connect($server, $username, $password, $database);

    // error_reporting(0);
    if(!$con)
	  {
		  die("connection to database failed due to:" . mysqli_connect_error());
	  }


      $sql1 = "SELECT COUNT(dept) FROM responses where dept = 'Hospital' AND year(date) = 2021;";
      $data1 = mysqli_query($con, $sql1);
      $res1 = mysqli_fetch_array($data1);
      $HospitalCount = $res1[0];

      $sql2 = "SELECT COUNT(dept) FROM responses where dept = 'Manufacturing' AND year(date) = 2021;";
      $data2 = mysqli_query($con, $sql2);
      $res2 = mysqli_fetch_array($data2);
      $ManufacturingCount = $res2[0];

      $sql3 = "SELECT COUNT(dept) FROM responses where dept = 'Education' AND year(date) = 2021;";
      $data3 = mysqli_query($con, $sql3);
      $res3 = mysqli_fetch_array($data3);
      $EducationCount = $res3[0];

      $sql4 = "SELECT COUNT(dept) FROM responses where dept = 'Hospitality' AND year(date) = 2021;";
      $data4 = mysqli_query($con, $sql4);
      $res4 = mysqli_fetch_array($data4);
      $HospitalityCount = $res4[0];

      $sql5 = "SELECT COUNT(dept) FROM responses where dept = 'Restaurant' AND year(date) = 2021;";
      $data5 = mysqli_query($con, $sql5);
      $res5 = mysqli_fetch_array($data5);
      $RestaurantCount = $res5[0];
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Past Data</title>

    <!-- Tab Icon -->
    <link rel="icon" href="images/icon.png" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Ubuntu:wght@300&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/PastData.css" />

    <!-- Fontawesome icons -->
    <script
      src="https://kit.fontawesome.com/d439574862.js"
      crossorigin="anonymous"
    ></script>

    <!-- Bootstrap Scripts -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  </head>
  <body>
  <div class="container-fluid">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img src="images/ll.png" alt="AuditPlus" hight="100" width="100">
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

    <h1>Previous Year Audit Data Dashboard</h1>
    <div>
      <h3>Hospital</h3>
      <h6><?php echo $HospitalCount?></h6></div>
    <div>
      <h3>Manufacturing</h3>
      <h6><?php echo $ManufacturingCount?></h6></div>
    <div>
      <h3>Restaurant</h3>
      <h6><?php echo $RestaurantCount?></h6></div>
    <div>
      <h3>Hospitality</h3>
      <h6><?php echo $HospitalityCount?></h6></div>
    <div>
      <h3>Education</h3>
      <h6><?php echo $EducationCount?></h6></div>

    
    <canvas style="display: inline;" id="myChart"></canvas>
    <canvas style="display: inline;" id="myChart1"></canvas>

    <script>
      var hospital = '<?=$HospitalCount?>';
      var manufacturing = '<?=$ManufacturingCount?>';
      var restaurant = '<?=$RestaurantCount?>';
      var hospitality = '<?=$HospitalityCount?>';
      var education = '<?=$EducationCount?>';
      var xValues =["Hospital", "Manufacturing","Restaurant","Hospitality","Education"];
      var yValues = [hospital, manufacturing, restaurant, hospitality, education];
      var barColors = ["Navy", "Blue","dodgerblue","steelblue","skyblue"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "2021 Sectorwise Audit Data"
    }
  }
});

new Chart("myChart1", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "2021 Sectorwise Audit Data"
    }
  }
});
    </script>
    

    <footer id="Contact">
    <i class="social-icon fab fa-twitter"></i>
    <i class="social-icon fab fa-facebook-f"></i>
    <i class="social-icon fab fa-instagram"></i>
    <i class="social-icon fas fa-envelope"></i>
    <p>Email: smartsaudit2023@gmail.com</p>
    <p>Contact No.1800 5123 12</p>
    <p>All Right Reserved</p>
  </footer>
  </body>
</html>
