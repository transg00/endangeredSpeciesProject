<?php
require_once ('connection.php');


class Animal{
public function registerAnimal()
    {
        global $conn;
        
        $sqlQuery = "INSERT into found_Species(species_Name, location, time, numFound) VALUES
                     (:animal, :location, :time, :number)"; 
        $stmt = $conn->prepare($sqlQuery);
        $stmt->bindValue(':animal', $_POST["animal"]);
        $stmt->bindValue(':location', $_POST["location"]);
        $stmt->bindValue(':time', $_POST["time"]);
        $stmt->bindValue(':number', $_POST["number"]);
        $stmt->execute();
        header("Location: Hone.php");
    }  
}


$animal = new Animal();

$animal >registerAnimal();


?>