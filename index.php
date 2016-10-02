<?php
session_start();

if (empty($_SESSION['success'])){
    header( "Location: v/verification.php" );
} else { 
    header( "Location: Script/index.php" );
}

?>