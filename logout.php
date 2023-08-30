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
<?php

session_start();
$_SESSION = array();
session_destroy();
header("location: login2.php");

?>
