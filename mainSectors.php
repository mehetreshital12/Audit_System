<!DOCTYPE html>
<?php

require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();

//locate the IP
$geoplugin->locate();

echo 
	"<script>alert('City: ' + '$geoplugin->city'+','+'$geoplugin->region');</script>";;
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sectors</title>

    <!-- Tab Icon -->
    <link rel="icon" href="images/icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/mainSectors.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <!-- Fontawesome icons -->
    <script src="https://kit.fontawesome.com/d439574862.js" crossorigin="anonymous"></script>


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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Ubuntu:wght@300&display=swap"
            rel="stylesheet" />

</head>
<body style="background-color: rgb(1, 1, 54);">
<div class="container-fluid" style="background-color: rgb(1, 1, 54);">
      <nav class="navbar navbar-expand-lg" style="background-color: rgb(1, 1, 54);">
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
              <a class="nav-link" href="index.html"><b>Home</b></a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="ReqDemo.php"><b>New Sign</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html"><b>Contact</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html"><b>About Us</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login2.php"><b>Login</b></a>
            </li>
          </ul>
        </div>
      </nav>
<div class="responsive">
    <section id="benefits" style="background-image: url('css/ll.png');" >

    <div id="benefits-carousel" class="carousel slide" data-ride="true">
      <div class="carousel-inner">
        <div id="img-div1" class="carousel-item active"  data-bs-interval="100">
            <section class="heading-div">
                <h1>AuditPlus</h1>
                <h1>The Smart Audit System</h1>
            </section>
        </div>
        <div id="img-div2" class="carousel-item" data-bs-interval="200">
            <section class="heading-div">
                <h1>AuditPlus</h1>
                <h1>The Smart Audit System</h1>
            </section>
        </div> 
        <div id="img-div3" class="carousel-item" data-bs-interval="300">
            <section class="heading-div">
                <h1>AuditPlus</h1>
                <h1>The Smart Audit System</h1>
            </section>
        </div>
        <div id="img-div4" class="carousel-item" data-bs-interval="400">
            <section class="heading-div">
                <h1>AuditPlus</h1>
                <h1>The Smart Audit System</h1>
            </section>
          </div>
        <div id="img-div5" class="carousel-item" data-bs-interval="500">
            <section class="heading-div">
                <h1>AuditPlus</h1>
                <h1>The Smart Audit System</h1>
            </section>
          </div>
          <div id="img-div6" class="carousel-item" data-bs-interval="600">
            <section class="heading-div">
                <h1>AuditPlus</h1>
                <h1>The Smart Audit System</h1>
            </section>
          </div>
      </div>
      <a class="carousel-control-prev" href="#benefits-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#benefits-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
</div>
</div>
</section>

    <section id="sectors" style="background-color:rgb(1, 1, 54); color:white">
        <div id="sectors-carousel" class="carousel slide" data-ride="false">
            <div class="carousel-inner">
                <div class="sectors-carousel carousel-item active" data-bs-interval="100">
                <i class="sectors-icon fas fa-hospital-user fa-5x"></i>
                    <a href="Hospital1.php"><h2>
                        Hospital
                    </h2></a>
                    <p>Audit in healthcare is a process used by health professionals to assess, evaluate and improve care of patients in a systematic way. Audit measures current practice against a defined standard. It forms part of clinical governance, which aims to safeguard a high quality of clinical care for patients.</p>
                </div>
                <div class="sectors-carousel carousel-item" data-bs-interval="300">
                    <i class="sectors-icon fas fa-industry fa-5x"></i>
                    <a href="Manufacturing.php">
                        <h2>
                            Manufacturing
                        </h2>
                    </a>
                    <p>Manufacturing audit is a comprehensive inspection of a process to determine whether it is performing satisfactorily. A manufacturing audit is usually limited to a small portion of units produced, but the manufacturing processes involved are reviewed thoroughly.</p>
                </div>
                <div class="sectors-carousel carousel-item" data-bs-interval="400">
                    <i class="sectors-icon fas fa-utensils fa-5x"></i>
                    <a href="Restaurant.php">
                        <h2>
                            Restaurant
                        </h2>
                    </a>
                    <p>A restaurant audit refers to the formal evaluation of a restaurant’s facilities, procedures, and practices to ensure that they comply with organizational, regulatory, and industry standards for food safety, hygiene, housekeeping, and maintenance. </p>
                </div>
                <div class="sectors-carousel carousel-item" data-bs-interval="500">
                    <i class="sectors-icon fas fa-university fa-5x"></i>
                    <a href="Educational.php">
                        <h2>
                            Educational Institute
                        </h2>
                    </a>
                    <p>The Audit of Educational Intuitions, sometimes referred to as Audit of Books in the education industry, is a process of systematic evaluation and documentation of financial statements, taxes, expenditures, and incomes, obtained by the educational organizations such as schools, colleges and universities.</p>
                </div>
                <div class="sectors-carousel carousel-item" data-bs-interval="600">
                    <i class="sectors-icon fas fa-suitcase-rolling fa-5x"></i>
                    <a href="Hospitality.php">
                        <h2>
                            Hospitality
                        </h2>
                    </a>
                    <p>Our hospitality audit services go beyond checking that your restaurant is compliant with the Companies Act and other regulatory requirements. It offers you an insight into the way your finance function operates and identifies improvements that will help your business continue to grow and prosper.</p>
                </div>
                <!-- <div class="sectors-carousel carousel-item" data-bs-interval="200">
                    <i class="sectors-icon fas fa-pills fa-5x"></i>
                    <a href="Pharma.php">
                        <h2>
                            Pharma
                        </h2>
                    </a>
                    <p>Auditing is a critical function within a pharmaceutical company. It provides management with information about how effectively the company controls the quality of their processes and products. </p>
                </div>
                <div class="sectors-carousel carousel-item" data-bs-interval="700">
                    <i class="sectors-icon fas fa-dolly fa-5x"></i>
                    <a href="FMCG.php">
                        <h2>
                            Fast Moving <br>Consumer Goods
                        </h2>
                    </a>
                    <p>The Fast Moving Consumer Goods industry, also known as CPG , is a tremendously competitive and fast-paced industry. It is the fastest-growing sector in the UK and is a multi-million-pound industry. Almost every individual in developed and developing world countries purchase some type of FMCG products each day.</p>
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#sectors-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#sectors-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>
    
    <section id="footer" style="border: solid white">
        <div class="row">
        <div class="col-lg-6" >
            <p style="color:white">AuditPlus has a user-friendly interface that allows you to capture and manage audit findings, communicate corrective actions effectively, and ensure compliance while mitigating risks. You can conduct the audit of multiple sectors and you can escalate the findings with high-risk to further investigation. You can manage multiple audit findings and their responses simultaneously.</p>
        </div>
         <div class="col-lg-6">
            <img class="footer-img" src="images/Audit-removebg-preview.png" alt="sectors-img">
        </div>
        </div>
    </section>
<    <footer id="Contact" style="background-color:rgb(1, 1, 54);color:white;text-align:center">
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