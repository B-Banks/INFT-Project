<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <input required id="firstname" type="text" name="firstname" placeholder="Firstname...">
            <br>
            <label for="lastname">Lastname?</label>
            <input required id="lastname" type="text" name="lastname" placeholder="Lastname...">
            <br>
            <label for="favoritepet">Favorite Pet?</label>
            <select required id="favoritepet" name="favoritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>
            <br>
            <button type="submit">Submit</button>

    </main>
    <?php
   
    ?>

</body>
</html>