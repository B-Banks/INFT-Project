<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h3>Signup</h3>
    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <br>
        <input type="password" name="pwd" placeholder="password">
        <br>
        <input type="text" name="email" placeholder="email">
        <br>
        <button>Signup!</button>
    </form>
    <br>

    <h3>Change account</h3>
    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <br>
        <input type="password" name="pwd" placeholder="password">
        <br>
        <input type="text" name="email" placeholder="email">
        <br>
        <button>Update</button>
    </form>
    <br>

    <h3>Delete Account</h3>
    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <br>
        <input type="password" name="pwd" placeholder="password">
        <br>
        <button>Delete :(</button>
    </form>


</body>
</html>