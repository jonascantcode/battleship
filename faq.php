<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battleship</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="index.php">Back to game</a>

    <h1>Frequently Asked Questions</h1>


    <p>Q: I can't see my highscores. What do I do??<br> A: Check if you have set up the database correctly. I have a tutorial on my GitHub in the "dokumentasjon" folder</p>
    <p>Q: How do I play the game?<br> A: On the homepage in the top right corner is a link to a video tutorial. The video explains everything you need to know.</p>
    <p>Q: I want to use your source code, is that okay?<br> A: Feel free to use anything on my GitHub as long as you provide credit where it is due. :)</p>
    <p>Q: The game is too big for my screen, how do i fix this?<br> A: Unfortunately this game is not suited for mobile device such as smartphones. However if you are using a laptop simply scale down the website and everything should fall into place.</p>


    <!-- Question submission form -->
    <h2>Submit a Question</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="question">Question:</label>
        <textarea id="question" name="question" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>

    <h1>Recently Asked Questions</h1>

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
            echo "Error submitting question: " . $connect->connect_error;
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
</body>

</html>