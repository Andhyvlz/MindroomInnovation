<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <?php
        include("pages/menu.php");
    ?>
    <?php
        if (!isset($_GET['page'])) {
            include("pages/index.html");
    } else {
    switch ($_GET['page']) {
        case "history":
            include("pages/history.html");
        break;
        case "galery":
            include("pages/galery.html");
        break;
        case "contact":
            include("pages/contact.html");
        break;
        default:
            include("pages/index.html");
        };
    }
?>
    <script src="assets/script.js"></script>
</body>
</html>