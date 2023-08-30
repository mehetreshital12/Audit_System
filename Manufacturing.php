<?php
    session_start();
    error_reporting(0);
    $_SESSION['subSector1'] = 'Raw Material Standards';
    $_SESSION['subSector2'] = 'Documentation of Processes';
    $_SESSION['subSector3'] = 'Quality of the Product and Uniformity of Performance';
    $_SESSION['subSector4'] = 'Storage, Packaging and Preservation';
    $_SESSION['subSector5'] = 'Safety of Employee';
    $_SESSION['subSector6'] = NULL;
    $_SESSION['subSector7'] = NULL;
    $_SESSION['subSector8'] = NULL;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Manufacturing</title>

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
    <link rel="stylesheet" href="css/hospital.css" />

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
</head>

<body style="background-color:rgb(1, 1, 54); color:white">
<div class="container-fluid">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img src="images/ll.png" alt="AuditPlus" hight="100" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fas fa-bars" style="color: deepskyblue; font-size: 28px"></i>
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

    <!-- Audit Details -->
<form class="sector-details" formaction = "hospital.php" method="POST" autocomplete = "off">

    <label class="auditdetails" for="auditNo">Audit No:      
        <input class="auditdetails" type="text" id="auditNo" name = "audit"></label>
    <label class="auditdetails" for="hospitalName">Industry Name:
        <input class="auditdetails" type="text" id="hospitalName" name="hospitalname" value="" required></label>
    <label class="auditdetails" for="date">Date:  <?php echo date("d/m/Y"); ?>
        </label>


<br><br>

<div class="tabs" style="background-color:white">
  <button data-toggle="tab" class="tab" onclick="tabs.show('Raw Material Standards')">Raw Material Standards</button>
  <button data-toggle="tab" class="tab" onclick="tabs.show('Documentation of Processes')">Documentation of Processes</button>
  <button data-toggle="tab" class="tab" onclick="tabs.show('Quality of the Product and Uniformity of Performance')">Quality of the Product and Uniformity of Performance</button>
  <button data-toggle="tab" class="tab" onclick="tabs.show('Storage, Packaging and Preservation')">Storage, Packaging and Preservation</button>
  <button data-toggle="tab" class="tab" onclick="tabs.show('Safety of Employee')">Safety of Employee</button>
</div>


<div id="Raw Material Standards" class="tabcontent">
        <h3 style="color:deepskyblue">Raw Material Standards</h3>
        <!-- <form> -->

    <?php

$server = "localhost: 3306";
$username = "root";
$password = "";
$database = "auditplus";

        $con = mysqli_connect($server, $username, $password, $database);

        if(!$con)
        {
            die("connection to database failed due to:" . mysqli_connect_error());
        }

        $sql = "SELECT * FROM questionnaire WHERE question_id >= 0 AND question_id <= 7";
        $data = mysqli_query($con, $sql);
        $total = mysqli_num_rows($data);
        $val = 0;
        $sec1 = 0;
        if($total>0)
        {
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data))
            {
                echo "<p>" . $result['question_description']. "</p>";

                $val += 1;
                $sec1 += 1;
                // echo "<label for=""><input type="radio" value="Y">Yes</label><label for=""><input type="radio" value="N">No</label>";
                // echo "<hr>";
                // $x = array($result['question_description']);

                echo "<label for='yes'><input type='radio' style='margin:0px 5px 30px;' name='$val'  id = 'yes' value = 'Y'>Yes</label>
                    <label for='no'><input type='radio' style='margin:0px 5px 30px' name='$val' id = 'no' value = 'N'>No</label>";
    
            }
            
        }
        
        else
        {
            echo "No queries fetched";
        }

?>

            <!-- <label for=''><input type='radio' value='Y' id = '#1'>Yes</label>
            <label for=''><input type='radio' value='N' id = '#1'>No</label> -->
            <!-- <label for="">Timely diagnostic result</label>
            <label for=""><input type="radio" value="Y" id=>Yes</label>
            <label for=""><input type="radio" value="N">No</label> -->

        <!-- </form> -->
    </div>
    
    <div id="Documentation of Processes" class="tabcontent">
        <h3 style="color:deepskyblue">Documentation of Processes</h3>

    <?php
        $sql = "SELECT * FROM questionnaire WHERE question_id >= 7 AND question_id <= 14";
        $data = mysqli_query($con, $sql);
        $total = mysqli_num_rows($data);
        $sec2 = 0;
        if($total>0)
        {
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data))
            {
                $val += 1;
                $sec2 += 1;

                echo "<p>" . $result['question_description']. "</p>";

                // echo "<label for=""><input type="radio" value="Y">Yes</label><label for=""><input type="radio" value="N">No</label>";
                // echo "<hr>";
                // $x = array($result['question_description']);

                echo "<label for=''><input type='radio' value='Y' style='margin:0px 5px 30px; 'name='$val'  id = '#1' value = 'Y'>Yes</label>
                    <label for=''><input type='radio' value='N' style='margin:0px 5px 30px;'  name='$val'  id = '#1' value = 'Nf'>No</label>";
    
            }
            
        }

        else
        {
            echo "No queries fetched";
        }
    ?>
    </div>
    
    <div id="Quality of the Product and Uniformity of Performance" class="tabcontent">
        <h3 style="color:deepskyblue;">Quality of the Product and Uniformity of Performance</h3>
        
        <?php
        $sql = "SELECT * FROM questionnaire WHERE question_id >= 14 AND question_id <= 21";
        $data = mysqli_query($con, $sql);
        $total = mysqli_num_rows($data);
        $sec3 = 0;
        if($total>0)
        {
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data))
            {
                $val += 1;
                $sec3 += 1;

                echo "<p>" . $result['question_description']. "</p>";

                // echo "<label for=""><input type="radio" value="Y">Yes</label><label for=""><input type="radio" value="N">No</label>";
                // echo "<hr>";
                // $x = array($result['question_description']);

                echo "<label for=''><input type='radio' value='Y' style='margin:0px 5px 30px;' name='$val'  id = '#1' value='Y'>Yes</label>
                    <label for=''><input type='radio' value='N' style='margin:0px 5px 30px;'  name='$val'  id = '#1' value='N'>No</label>";
    
            }
            
        }

        else
        {
            echo "No queries fetched";
        }
    ?>

    </div>

    <div id="Storage, Packaging and Preservation" class="tabcontent">
        <h3 style="color:deepskyblue;">Storage, Packaging and Preservation</h3>

    <?php
        $sql = "SELECT * FROM questionnaire WHERE question_id >= 21 AND question_id <= 28";
        $data = mysqli_query($con, $sql);
        $total = mysqli_num_rows($data);
        $sec4 = 0;
        if($total>0)
        {
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data))
            {
                $val += 1;
                $sec4 += 1;

                echo "<p>" . $result['question_description']. "</p>";

                // echo "<label for=""><input type="radio" value="Y">Yes</label><label for=""><input type="radio" value="N">No</label>";
                // echo "<hr>";
                // $x = array($result['question_description']);

                echo "<label for=''><input type='radio' value='Y' style='margin:0px 5px 30px;' name='$val'  id = '#1' value='Y'>Yes</label>
                    <label for=''><input type='radio' value='N' style='margin:0px 5px 30px;'  name='$val'  id = '#1' value='N'>No</label>";
    
            }
            
        }

        else
        {
            echo "No queries fetched";
        }
    ?>
    </div>

    <div id="Safety of Employee" class="tabcontent">
        <h3 style="color:deepskyblue;">Safety of Employee</h3>


    <?php
        $sql = "SELECT * FROM questionnaire WHERE question_id >= 28 AND question_id <= 38";
        $data = mysqli_query($con, $sql);
        $total = mysqli_num_rows($data);
        $sec5 = 0;
        if($total>0)
        {
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data))
            {
                $val += 1;
                $sec5 += 1;

                echo "<p>" . $result['question_description']. "</p>";

                // echo "<label for=""><input type="radio" value="Y">Yes</label><label for=""><input type="radio" value="N">No</label>";
                // echo "<hr>";
                // $x = array($result['question_description']);

                echo "<label for=''><input type='radio' value='Y' style='margin:0px 5px 30px;' name='$val'  id = '#1' value='Y'>Yes</label>
                    <label for=''><input type='radio' value='N' style='margin:0px 5px 30px;'  name='$val'  id = '#1' value='N'>No</label>";
    
            }
            
        }

        else
        {
            echo "No queries fetched";
        }
    ?>

    </div>


    <label class="auditdetails" for="comments">Comments/Observation:
        <input  style="height: 50px; width: 230px" class="auditdetails" type="text" id="comments" name="comments" placeholder="Remarks">
    </label>

    <label class="auditdetails" for="media">Upload Images/Video:
        <input class="auditdetails" type="file" id="media" name="upload" value="">
    </label><br>

    <button style="margin-left:35%;" name="Generate" class="btn submitbtn btn-info" type="submit">Generate Report</button>
    
    <button style="margin-left:3%;"name="View" class="btn submitbtn btn-info" type="button" onclick="location.href='ViewReportm.php'">View Report</button>

</form>


<div id="common_stuff" class="common_stuff" ></div>    

<script type="text/javascript" src="js/Manufacturing.js"></script>

<?php

   if(isset($_POST['Generate']))
   {
       $_SESSION['ManufactureCount']++;
        include 'ManufactureInsert.php';
   }

?>

</body>

</html>