<a href="index.php">Back to game</a>

<h1>Frequently Asked Questions</h1>

<!-- Question submission form -->
<h2>Submit a Question</h2>
<form method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="question">Question:</label>
    <textarea id="question" name="question" rows="4" cols="50" required></textarea><br><br>
    <input type="submit" value="Submit">
</form>

<h1>Frequently Asked Questions</h1>

<?php
include 'dbconn.php';
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $question = $_POST['question'] ?? '';

    // Insert question into the database
    $sql = "INSERT INTO faq (name, question) VALUES ('$name', '$question')";
    if ($connect->query($sql) === TRUE) {
        echo "Question submitted successfully.";
    } else {
        echo "Error submitting question: " . $connect->error;
    }
}

// Fetch and display questions from the database
$sql = "SELECT * FROM faq";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<strong>Name: </strong>" . $row['name'] . "<br>";
        echo "<strong>Question: </strong>" . $row['question'];
        echo "</div><br>";
    }
} else {
    echo "No questions found.";
}

?>