<?php
include 'dbConnection.php';

$sql = "SELECT cakes.cakeName, cake_votes.numberOfVotes FROM cake_votes JOIN cakes ON cake_votes.cakeId=cakes.id";

if(isset($connection)){
    $result = $connection->query($sql);
    $data = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $obj = array();
            $obj["cakeName"] = $row["cakeName"];
            $obj["numberOfVotes"] = $row["numberOfVotes"];
            $data[] = $obj;

        }
    }

    header('Content-Type: application/json');
    echo json_encode($data);
    unset($data);
}
$connection->close();
?>