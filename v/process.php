<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

    $_SESSION["success"] = "";

    // ** SUBMIT FORM PROCESSING **
    if (isset($_POST['submit-btn'])) {
        
        $code = $_POST['code'];
        $email = $_POST['email'];
        
        $sql = "SELECT email, code, activated FROM invitation WHERE email='".$email."'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $sql_email = $row["email"];
                $sql_code = $row["code"];
                $sql_activated = $row["activated"];
                
                //$output_top .= $sql_activated; 
                
                if ($sql_activated=='1'){
                    $output_top .= "You have already activated your account. Please login below.";
                } else {
                    header('Refresh: 2; url=http://eden-escapades.com/Script/index.php');
                    //header('Refresh: 1; url=http://localhost:8888/eden-escapades.com/Script/index.php');
                    $_SESSION["success"] = "yes";
                    $output_top = "Your details are correct! <br> Redirecting you to the home page.<br>";

                    $sql_update = "UPDATE invitation SET activated='1' WHERE email='".$email."'";
                    $result_update = $conn->query($sql_update);
                }
            }
        }else {
            $output_top = "No such email or invite code found. <br>Please try again.";
        }
    }elseif(isset($_POST['request-btn'])){
        // ** REQUEST FORM PROCESSING **
        if (empty($_POST['email'])){
            $output_mid = "Please enter an email address.";
        } else {
            $requestEmail = $_POST['email'];
            $output_mid = "Thank you for your request.<br>We will be in touch via your email address: " . $requestEmail;
            $to = 'michelleabbasipour@outlook.com';
            $subject = "Invitation Code Request";
            $message = "New invitation code request from: " . $requestEmail;
            
            mail ($to, $subject, $message);
        }
    }elseif(isset($_POST['login-btn'])){
        // ** LOGIN FORM PROCESSING **
        
        $email = $_POST['email'];
        
        $sql = "SELECT email, activated FROM invitation WHERE email='".$email."' AND activated='1'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                header('Refresh: 1; url=http://eden-escapades.com/Script/index.php');
                //header('Refresh: 1; url=http://localhost:8888/eden-escapades.com/Script/index.php');
                $output_btm = "Your details are correct! <br> Redirecting you to the home page.<br>";
                $_SESSION["success"] = "yes";
             }
        } else {
                $output_btm = "Please enter an activated email address.";
        }
    }
?>