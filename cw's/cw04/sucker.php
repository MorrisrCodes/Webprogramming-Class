<style>
    html {
    background-color: #39275B;
}

body {
    width: 600px;
    margin: 1em auto;
    background-color: white;
    border: 10px #D8C858 solid;
    padding: 0.5em;
}

hr {
    width: 90%;
    border: 1px solid #D8C858;
}

h1, h2 {
    font-family: sans-serif;
    text-align: center;
}

input[type="submit"] {
    font-size: 2em;
    width: 100%;
}
</style>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'] ?? "";
        $section = $_POST['section'] ?? "";
        $creditcard = $_POST['credit'] ?? "";
        $type = $_POST['type'] ?? "";
        
        if (empty($name) || empty($section) || empty($creditcard) || empty($type)) {
            echo "<h1>Sorry<h1>";
            echo "You didn;t fill out the form completely.";
            echo "<a href='buyagrade.html'>Try again?</a>";
            exit;
        }
        $entry = $name . ';' . $section . ';' . $creditcard . ';' . $type . "<br>";
        file_put_contents('suckers.txt', $entry, FILE_APPEND);

        $saved_data = file_get_contents('suckers.txt');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
</head>
<body>
    <h1>Thanks, Sucker!</h1>
    <p>Your purchase has been recorded.</p>

    <p>Name: <?= $name ?></p>
    <p>Section: <?= $section ?></p>
    <p>Credit Card: <?= $creditcard ?>(<?= $type?>)</p>
    <p>Type: <?= $type ?></p>

    <h2>All Previous Submissions:</h2>
    <pre><?= $saved_data ?></pre>
</body>
</html>