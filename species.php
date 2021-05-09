<?php
require_once ('connection.php');

class Species
{
    public function listSpecies()
    {
        global $conn;

        $sqlQuery = "SELECT species_Name as 'name', avg_length as 'len', avg_weight as 'weight', habitat as 'hab', population as 'pop', status as 'status'
        FROM endangered_Species ";


        $stmt = $conn->prepare($sqlQuery);
        $stmt->execute();

        $numberRows = $stmt->rowCount();

        $dataTable = array();

        while ($sqlRow = $stmt->fetch()) {
            $dataRow = array();
            $dataRow[] = $sqlRow['name'];
            $dataRow[] = $sqlRow['len'];
            $dataRow[] = $sqlRow['weight'];
            $dataRow[] = $sqlRow['hab'];
            $dataRow[] = $sqlRow['pop'];
            $dataRow[] = $sqlRow['status'];
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
$Species-> listSpecies());


?>