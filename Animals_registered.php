<?php
require_once ('connection.php');

class Species
{
    public function listAnimals()
    {
        global $conn;

        $sqlQuery = "SELECT species_Name as 'name', location as 'location', time as 'time', numFound as 'num'
        FROM found_Species";

        $stmt = $conn->prepare($sqlQuery);
        $stmt->execute();

        $numberRows = $stmt->rowCount();

        $dataTable = array();

        while ($sqlRow = $stmt->fetch()) {
            $dataRow = array();
            $dataRow[] = $sqlRow['name'];
            $dataRow[] = $sqlRow['location'];
            $dataRow[] = $sqlRow['time'];
            $dataRow[] = $sqlRow['num'];
            $dataTable[] = $dataRow;
        }

        $output = array(
            "recordsTotal" => $numberRows,
            "recordsFiltered" => $numberRows,
            "data" => $dataTable
        );

        echo json_encode($output);
    }
}

$Species = new Species();
$Species-> listAnimals();


?>