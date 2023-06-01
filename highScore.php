<?php
include 'dbconn.php';

$sql = "SELECT * FROM high_score ORDER BY score DESC LIMIT 10";

$result = $connect->query($sql);

if (!$result) {
    echo"Failed to connect" . $sql ($connect->error);
} else {
    echo '<table><tr><th>Navn</th><th>Score</th></tr>';
    
    while ($rad = $result->fetch_assoc()) {
        $navn = $rad["name"];
        $score = $rad["score"];
        echo '<tr><td>' . $navn . '</td><td>' . $score . '</td></tr>';
    }
    echo '</table>';
}
?>