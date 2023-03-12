<?php

require 'dbConnection.php';
$cakeId = $_POST['cakeId'];
if(isset($connection)) {

    $sql = "INSERT INTO `cake_votes` (cakeId, numberOfVotes) VALUES ('$cakeId', 1)
        ON DUPLICATE KEY UPDATE numberOfVotes = numberOfVotes + 1";

    if(mysqli_query($connection, $sql)){
        $response = array(
            'status' => 'success',
            'cakeId' => $cakeId,
            'message' => 'Votul dumeavostra a fost inregistrat cu succes.'
        );
    }else{
        $response = array(
            'status' => 'error',
            'message' => 'S-a produs o eroare la inregistrarea votului.',
        );
    }

}
echo json_encode($response);
$connection->close();



