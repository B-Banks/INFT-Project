<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">




    <p>
    a test ftfrdytrdyt
    </p>
    <input type="number" name="num01" placeholder="number one">
    <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    <input type="number" name="num02" placeholder="number two">
    <button>Calculate</button>
    </select>

    
</form>



</body>
</html>