<?php
include 'dbconn.php';

$sql = "SELECT * FROM high_score ORDER BY score ASC LIMIT 10";

$result = $connect->query($sql);

if (!$result) {
    echo"Failed to connect" . $sql ($connect->connect_error);
} else {
    echo '<table><tr><th>NAME</th><th>SCORE</th></tr>';
    
    while ($rad = $result->fetch_assoc()) {
        $navn = $rad["name"];
        $score = $rad["score"];
        echo '<tr><td class="scoreTable">' . $navn . '</td><td class="scoreTable">' . $score . '</td></tr>';
    }
    echo '</table>';
}
?>