<?php

// Display all errors, very useful for PHP debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Parameters of the MySQL connection 
$servername = "localhost";
$username = "transg";
$password = "V00877753";
$database = "project_transg";

try {
    // Establish a connection with the MySQL server
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Start or resume session variables
session_start();



// If the user_ID session is not set, then the user has not logged in yet

/*
if (!isset($_SESSION['user_ID']))
{
    // If the page is receiving the email and password from the login form then verify the login data
    if (isset($_POST['email']) && isset($_POST['password']))
    {
        $stmt = $conn->prepare("SELECT webUser_id, password FROM webUser WHERE email=:email");
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->execute();
        
        $queryResult = $stmt->fetch();
        echo $queryResult[1];
        
        // Verify password submitted by the user with the hash stored in the database
        if(!empty($queryResult) && $_POST['password'] == $queryResult[1]))
        {
            // Create session variable
            $_SESSION['user_ID'] = $queryResult['webUser_id'];
            
            // Redirect to URL 
            header("Location: Home.php");
        } else {
            // Password mismatch
            require('login.php');
            exit();
        }
    }
    else
    {
        // Show login page
        require('login.php');
        exit();
    }
}
*/


?>