<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Pharma</title>

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

    <!-- Audit Details -->
<form class="sector-details" formaction = "hospital.php" method="POST" autocomplete = "off">

    <label class="auditdetails" for="auditNo">Audit No:      
        <input class="auditdetails" type="text" id="auditNo" name = "audit"></label>
    <label class="auditdetails" for="hospitalName">Company Name:
        <input class="auditdetails" type="text" id="hospitalName" name="hospitalname" value="" required></label>
    <label class="auditdetails" for="date">Date:  <?php echo date("d/m/Y"); ?>
        </label>


<br><br>

<div class="tabs">
  <button data-toggle="tab" class="tab" onclick="tabs.show('PatientSafety')">Patient Safety</button>
  <button data-toggle="tab" class="tab" onclick="tabs.show('Patient Care Processes')">Patient Care Processes</button>
  <button data-toggle="tab" class="tab" onclick="tabs.show('Quality Management')">Quality Management</button>
  <button data-toggle="tab" class="tab" onclick="tabs.show('Administrative and Operational')">Administrative and Operational</button>
  <button data-toggle="tab" class="tab" onclick="tabs.show('Biomedical Engineering Equipment')">Biomedical Engineering Equipment</button>
  <button data-toggle="tab" class="tab" onclick="tabs.show('Hospital Infrastructure')">Hospital Infrastructure</button>
  <button data-toggle="tab" class="tab" onclick="tabs.show('Information Technology')">Information Technology</button> 
</div>


<div id="PatientSafety" class="tabcontent">
        <h3>Patient Safety</h3>
        <!--<form>-->

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

        $sql = "SELECT * FROM questionnaire WHERE question_id >= 38 AND question_id <= 47";
        $data = mysqli_query($con, $sql);
        $total = mysqli_num_rows($data);
        $val = 0;
        if($total>0)
        {
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data))
            {
                echo "<p>" . $result['question_description']. "</p>";

                $val += 1;
                // echo "<label for=""><input type="radio" value="Y">Yes</label><label for=""><input type="radio" value="N">No</label>";
                 //echo "<hr>";
                 //$x = array($result['question_description']);

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
            <label for=''><input type='radio' value='N' id = '#1'>No</label> 
            <label for="">Timely diagnostic result</label>
            <label for=""><input type="radio" value="Y" id=>Yes</label>
            <label for=""><input type="radio" value="N">No</label> -->

         <!--</form> -->
    </div>
    
    <div id="Patient Care Processes" class="tabcontent">
        <h3>Patient Care Processes</h3>

    <?php
        $sql = "SELECT * FROM questionnaire WHERE question_id >= 47 AND question_id <= 58";
        $data = mysqli_query($con, $sql);
        $total = mysqli_num_rows($data);
        if($total>0)
        {
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data))
            {
                $val += 1;

                echo "<p>" . $result['question_description']. "</p>";

               //  echo "<label for=""><input type="radio" value="Y">Yes</label><label for=""><input type="radio" value="N">No</label>";
                 //echo "<hr>";
                 //$x = array($result['question_description']);

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
    
    <div id="Quality Management" class="tabcontent">
        <h3>Quality Management</h3>
        
        <?php
        $sql = "SELECT * FROM questionnaire WHERE question_id >= 58 AND question_id <= 64";
        $data = mysqli_query($con, $sql);
        $total = mysqli_num_rows($data);
        if($total>0)
        {
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data))
            {
                $val += 1;

                echo "<p>" . $result['question_description']. "</p>";

                // echo "<label for=""><input type="radio" value="Y">Yes</label><label for=""><input type="radio" value="N">No</label>";
                 //echo "<hr>";
                 //$x = array($result['question_description']);

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

    <div id="Administrative and Operational" class="tabcontent">
        <h3>Administrative and Operational</h3>

    <?php
        $sql = "SELECT * FROM questionnaire WHERE question_id >= 64 AND question_id <= 73";
        $data = mysqli_query($con, $sql);
        $total = mysqli_num_rows($data);
        if($total>0)
        {
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data))
            {
                $val += 1;

                echo "<p>" . $result['question_description']. "</p>";

               //  echo "<label for=""><input type="radio" value="Y">Yes</label><label for=""><input type="radio" value="N">No</label>";
                 //echo "<hr>";
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

    <div id="Biomedical Engineering Equipment" class="tabcontent">
        <h3>Biomedical Engineering Equipment</h3>


    <?php
        $sql = "SELECT * FROM questionnaire WHERE question_id >= 73 AND question_id <= 79";
        $data = mysqli_query($con, $sql);
        $total = mysqli_num_rows($data);
        if($total>0)
        {
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data))
            {
                $val += 1;

                echo "<p>" . $result['question_description']. "</p>";

               //  echo "<label for=""><input type="radio" value="Y">Yes</label><label for=""><input type="radio" value="N">No</label>";
                // echo "<hr>";
                 //$x = array($result['question_description']);

                echo "<label for=''><input type='radio' value='Y' style='margin:0px 5px 30px;' name='question_ .$val. '  id = '#1'>Yes</label>
                    <label for=''><input type='radio' value='N' style='margin:0px 5px 30px;'  name='question_ .$val. '  id = '#1'>No</label>";
    
            }
            
        }

        else
        {
            echo "No queries fetched";
        }
    ?>
    </div>


    <div id="Hospital Infrastructure" class="tabcontent">
        <h3>Hospital Infrastructure</h3>

    <?php
        $sql = "SELECT * FROM questionnaire WHERE question_id >= 79 AND question_id <= 90";
        $data = mysqli_query($con, $sql);
        $total = mysqli_num_rows($data);
        if($total>0)
        {
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data))
            {
                $val += 1;

                echo "<p>" . $result['question_description']. "</p>";

                // echo "<label for=""><input type="radio" value="Y">Yes</label><label for=""><input type="radio" value="N">No</label>";
                 //echo "<hr>";
                 //$x = array($result['question_description']);

                echo "<label for=''><input type='radio' value='Y' style='margin:0px 5px 30px;' name='question_ .$val. '  id = '#1'>Yes</label>
                    <label for=''><input type='radio' value='N' style='margin:0px 5px 30px;' name='question_ .$val. '  id = '#1'>No</label>";
    
            }
            
        }

        else
        {
            echo "No queries fetched";
        }
    ?>

    </div>

    <div id="Information Technology" class="tabcontent">
        <h3>Information Technology</h3>
        
    <?php
        $sql = "SELECT * FROM questionnaire WHERE question_id >= 90 AND question_id <= 103";
        $data = mysqli_query($con, $sql);
        $total = mysqli_num_rows($data);
        if($total>0)
        {
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data))
            {
                $val += 1;

                echo $result['question_description'] . "<br>";

              //   echo "<label for=""><input type="radio" value="Y">Yes</label><label for=""><input type="radio" value="N">No</label>";
                // echo "<hr>";
                 //$x = array($result['question_description']);

                echo "<label for=''><input type='radio' value='Y' style='margin:0px 5px 30px;' name='question_ .$val. '  id = '#1'>Yes</label>
                    <label for=''><input type='radio' value='N' style='margin:0px 5px 30px;'  name='question_ .$val. '  id = '#1'>No</label><br>";
    
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

    <button name="Generate" class="btn submitbtn btn-info" type="submit">Generate Report</button>

</form>


<div id="common_stuff" class="common_stuff" ></div>    

<script type="text/javascript" src="js/hospital1.js"></script>

<?php

   if(isset($_POST['Generate']))
   {
        include 'insert.php';
   }

?>



</body>

</html>