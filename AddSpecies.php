<?php
require_once ('connection.php');


class Animal{
public function registerAnimal()
    {
        global $conn;
        
        $sqlQuery = "INSERT into found_Species(species_Name, location, time, numFound) 
                        VALUES
                     (:animal, :location, :time, :num)"; 
        $stmt = $conn->prepare($sqlQuery);
        $stmt->bindValue(':animal', $_POST["animal"]);
        $stmt->bindValue(':location', $_POST["location"]);
        $stmt->bindValue(':time', $_POST["time"]);
        $stmt->bindValue(':num', $_POST["num"]);
        $stmt->execute();
        header("Location: Home.php");
    }  
}


$animal = new Animal();

$animal >registerAnimal();


?>