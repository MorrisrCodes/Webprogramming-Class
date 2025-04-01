<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $position = ($_POST['position']);
        $name =  ($_POST['name']);
        $male = ($_POST['male']);
        $female = ($_POST['female']);
        $nationality = ($_POST['nationality']);
        $dob = ($_POST['dob']);
        $address = ($_POST['address']);
        $phone = ($_POST['phone']);
        $email = ($_POST['email']);
        $education = ($_POST['education']);
        $experience = ($_POST['experience']);
        $statement = ($_POST['statement']);
        $refname = ($_POST['refname']);
        $refoccupation = ($_POST['refoccupation']);
        $refrelationship = ($_POST['refrelationship']);
        $refaddress = ($_POST['refaddress']);
        $refphone = ($_POST['refphone']);
        $yesveg = ($_POST['yesveg']);
        $noveg = ($_POST['noveg']);
        $fruits = ($_POST['fruits']);

        echo "<h1>User Details:</h1>";
        echo "Position: " . $position . "<br>";
        echo "Name: " . $name . "<br>";
        if ($male == True) {
            echo "Gender: Male <br>";
        } else {
            echo "Gender: Female <br>";
        }
        echo "Nationality: " . $nationality . "<br>";
        echo "Date of Birth: " . $dob . "<br>";
        echo "Address: " . $address . "<br>";
        echo "Telephone: " . $phone . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Education: " . $education . "<br>";
        echo "Experience: " . $experience . "<br>";
        echo "Statement: " . $statement . "<br>";
        echo "Reference Name: " . $refname . "<br>";
        echo "Reference Occupation: " . $refoccupation . "<br>";
        echo "Reference Relationship: " . $refrelationship . "<br>";
        echo "Reference Address: " . $refaddress . "<br>";
        echo "Reference Phone: " . $refphone . "<br>";
        if ($yesveg == True) {
            echo "Dietary Preference: Vegetarian <br>";
        } else {
            echo "Dietary Preference: Not Vegetarian <br>";
        }
        echo "Fruits: " . $fruits . "<br>";
    }
?>