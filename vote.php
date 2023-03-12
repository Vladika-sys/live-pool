<?php

$connection = mysqli_connect("localhost", "root", "", "cakes");
if ($connection->connect_error) {
    die("Conectiune esuata: " . $connection->connect_error);
}

$cakeId = $_POST['cakeId'];

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


mysqli_close($connection);


echo json_encode($response);
