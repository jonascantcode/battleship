<?php

include 'dbconn.php';

// Get the name and guesses from the AJAX request
$name = $_POST['name'];
$guesses = $_POST['guesses'];

// Insert the game data into the database
$sql = "INSERT INTO high_score (name, score) VALUES ('$name', '$guesses')";

if ($connect->query($sql) === TRUE) {
    echo "Game saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->connect_error;
}
$connect->close();
?>