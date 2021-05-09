<?php
require_once ('connection.php');


class Animal{
public function donate()
    {
        global $conn;
        
        $sqlQuery = "INSERT into donations(donation_amount) 
                        VALUES
                     (:donation)"; 
        $stmt = $conn->prepare($sqlQuery);
        $stmt->bindValue(':donation', $_POST["donation"]);
        $stmt->execute();
        header("Location: Home.php");
    }  
}


$animal = new Animal();

$animal -> donate();


?>