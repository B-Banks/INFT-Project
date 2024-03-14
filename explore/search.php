<?php

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $usersearch = $_POST["usersearch"];
    
    try{
        require_once "includes/dbh.inc.php";

        $query = "SELECT * FROM courses WHERE subject = :usersearch;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $usersearch);
     

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;



    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("location:../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<body>
    
    <h3> RESULTS </h3>

    <?php

    if (empty($results)) {
        echo "<div>";
        echo "<p> No results </p>";
        echo "</div>";
    }
    else {
        foreach ($results as $row) {
            echo "<div>";
            echo "<h4>" . htmlspecialchars($row["course_name"]) . "</h4>";
            echo "<p>" . htmlspecialchars($row["grade_lvl"]) . "</p>";
            echo "<p>" . htmlspecialchars($row["description"]) . "</p>";
            echo "</div>";
        }
    }

    ?>

</body>
</html>