<?php
include 'dbconn.php';

$sql = "SELECT * FROM high_score ORDER BY score DESC LIMIT 10";

$resultat = $kobling->query($sql);

if (!$resultat) {
    echo "MAYDAY MAYDAY: $sql ($kobling->error).";
} else {
    echo '<table><tr><th>Navn</th><th>Score</th></tr>';
    
    while ($rad = $resultat->fetch_assoc()) {
        $navn = $rad["name"];
        $score = $rad["score"];
        echo '<tr><td>' . $navn . '</td><td>' . $score . '</td></tr>';
    }
    echo '</table>';
}
?>