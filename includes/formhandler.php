<?php

//var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);

    if (empty($firstname)) {
        header("location: ../learning.php");
        exit();
    }

    if (empty($lastname)) {
        header("location: ../learning.php");
        exit();
    }

    if (empty($favoritepet)) {
        header("location: ../learning.php");
        exit();
    }
    
    echo "These are the data submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favoritepet;

    //header("location: ../learning.php");
}

else{
    header("location: ../learning.php");
}