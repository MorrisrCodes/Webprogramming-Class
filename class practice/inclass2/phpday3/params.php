<?php
// Check if the form is submitted
//This conditional statement checks if the request method used to access the page is POST. If it is, the code inside the curly braces {} will be executed. This is typically used to ensure //that the form data is processed only when the form is submitted.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the form data
    $name = ($_POST['name']);
    $address = ($_POST['address']);
    $ccard = ($_POST['ccard']);

    // Display the captured data
    echo "<h2>User Signup Details:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Credit Card: " . $ccard . "<br>";
}
?>
