<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Create a password and select a level</h3>
    <form action="pages/create.php" method="post">
        <input type="password" name="password" placeholder="Enter password">
        <br>
        <input type="radio" name="choice" id="option1" value="Option 1" checked>
        <label for="option1">Level 1</label>
        <input type="radio" name="choice" id="option2" value="Option 2">
        <label for="option2">Level 2</label>
        <input type="radio" name="choice" id="option3" value="Option 3">
        <label for="option3">Level 3</label>
        <br>
        <input type="submit" value="Create password">   
    </form>
    <hr>
    <h3>Enter a password to check</h3>
    <form action="pages/dashboard.php" method="post">
        <input type="password" name="password" placeholder="Enter password">
        <input type="submit" value="Check password">
    </form>
</body>
</html>