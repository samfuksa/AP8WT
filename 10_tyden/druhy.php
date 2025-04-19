<h1>Form</h1>


<form action="" method="post">


<input type="text" name="jmeno" placeholder="Jméno">
<input type="text" name="prijmeni" placeholder="Příjmení">
<input type="text" name="vek" placeholder="Věk">
<button id="btn">Send data</button>
</form>



<?php

echo "Ahoj, světe!<br>";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jmeno = $_POST['jmeno'];
    $prijmeni = $_POST['prijmeni'];
    $vek = $_POST['vek'];

    echo "Ahoj " . $jmeno . " " . $prijmeni . ", je ti " . $vek . " let.";

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "test";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO osoby (jmeno, prijmeni, vek) VALUES ('$jmeno', '$prijmeni', '$vek')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();


} 

