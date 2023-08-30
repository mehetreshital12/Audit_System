<?php
    session_start();
    $server = "localhost: 3306";
    $username = "root";
    $password = "";
    $database = "auditplus";

    $con = mysqli_connect($server, $username, $password, $database);

    error_reporting(0);
    if(!$con)
	{
		die("connection to database failed due to:" . mysqli_connect_error());
	}

    $comments = $_POST['comments'];
    $file = $_POST['upload'];
    $auditNo = $_POST['audit'];
	$hospitalname = $_POST['hospitalname'];
	date_default_timezone_set('Asia/Kolkata');
	$date = date("Y/m/d h:i:s");
    $auditno = (int)$auditNo;
    $sectorName = "Restaurant";

     $sector1 = 103 + $sec1;
        $sector2 = $sector1 + $sec2;
        $sector3 = $sector2 + $sec3;
        $sector4 = $sector3 + $sec4;
        $sector5 = $sector4 + $sec5;
        $sector6 = $sector5 + $sec6;
        $sector7 = $sector6 + $sec7;
        $sector8 = $sector7 + $sec8;
        
$sec1score=0;
$secscore=0;
     $myfile = fopen("responses_hospital.txt", "w")
        or die("Unable to open file");
        
        fwrite($myfile, "Audit No = $auditno , Hospital = $hospitalname , Date = $date \n\n");
        $score = 0;
        $arr = array();
        
        for ($i=1  ; $i <= $val ; $i++ ) 
        { 
           
            $sql1 = "SELECT * FROM questionnaire where question_id = ($i+103);";
            $data = mysqli_query($con, $sql1);
            $res1 = mysqli_fetch_assoc($data);

            $resp = $_POST[$i]; 
            
            if($resp == 'Y')
            {
                $score += 1;
                $secscore += 1;
            }

            $quest = $res1['question_description'];

            $x =  $i ." = ".$resp."\n";
            array_push($arr, "$quest=>$resp\n");
            fwrite($myfile, "$i. $quest = $resp\n" );
            
            
            $res = mysqli_query($con, $sql1);
            if(($i+103)==$sector1)
            {
                $sec1score = ($secscore/$sec1)*100;
                $secscore=0;
               
            }
            else if(($i+103)==$sector2)
            {
                $sec2score = ($secscore/$sec2)*100;
                $secscore = 0;
                
            }
            else if(($i+103)==$sector3)
            {
                $sec3score = ($secscore/$sec3)*100;
                $secscore = 0;
                
            }
            else if(($i+103)==$sector4)
            {
                $sec4score = ($secscore/$sec4)*100;
                $secscore = 0;
                
            }
            else if(($i+103)==$sector5)
            {
                $sec5score = ($secscore/$sec5)*100;
                $secscore = 0;
               
            }
            else if(($i+103)==$sector6)
            {
                $sec6score = ($secscore/$sec6)*100;
                $secscore = 0;
                
            }
            else if(($i+103)==$sector7)
            {
                $sec7score = ($secscore/$sec7)*100;
                $secscore = 0;
               
            }
            else if(($i+103)==$sector8)
            {
                $sec8score = ($secscore/$sec8)*100;
                $secscore = 0;
                
            }
    
        }
        
        if($res){
        echo("File Created Successfully\n");
        }
        else{
            echo "File Not Created". mysqli_error($con);
        }
        echo $score;
        $overall = round(($score/$val)*100);
        fwrite($myfile, "\nScore = $overall \n");
        fwrite($myfile, "Comments = $comments");
        fclose($myfile);

    
    $myfile = file_get_contents('responses_hospital.txt');  

    $sql = "INSERT INTO responses (`auditno`, `comments`, `hospital`, `date`, `uploads`, `response_file`, `dept`) VALUES ('$auditno', '$comments','$hospitalname', '$date','$file', '$myfile', '$sectorName')";

    $result = mysqli_query($con, $sql);


    if($result){
        echo "Record inserted Successfully";

    }

    else{
        echo "Record was not inserted". mysqli_error($con);
    
    }   
      
         
    $con->close();
    
    $_SESSION['auditno'] = $auditNo;
    $_SESSION['name'] = $hospitalname;
    $_SESSION['score'] = $overall;
    $_SESSION['sec1score']=$sec1score;
    $_SESSION['sec2score']=$sec2score;
    $_SESSION['sec3score']=$sec3score;
    $_SESSION['sec4score']=$sec4score;
    $_SESSION['sec5score']=$sec5score;
    $_SESSION['sec6score']=$sec6score;
    $_SESSION['sec7score']=$sec7score;
?>

<!-- Insert Hospital.php data into database responses -->