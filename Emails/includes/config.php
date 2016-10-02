<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    //check if the server is local or remote
    $ip=$_SERVER['REMOTE_ADDR'];

if ($ip == "::1") {
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "eden-escapades";
        
    //create the database connection
    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    //check connection
    if (!$conn) {
        die ($connSuccess = "Connection failed: " . mysqli_connect_error());
    }
    $connSuccess = "Connected successfully (local)";

    //mysqli_close($conn);
} else {
    $hostnameRemote = "ftp.eden-escapades.com";
    $usernameRemote = "edenesca_admin";
    $passwordRemote = "Password2302";
    $dbnameRemote = "edenesca_network";
        
    //create the database connection
    $conn = mysqli_connect($hostnameRemote, $usernameRemote, $passwordRemote, $dbnameRemote);

    //check connection
    if (!$conn) {
        die ($connSuccess = "Connection wrong: " . mysqli_connect_error());
    }
    $connSuccess = "Connected successfully (remote)";

   // mysqli_close($conn);
    
}

    //echo $connSuccess
?>