<?php
    session_start();
    $meal = array();
    $meal['orangeJuice'] = $_POST['orangeJuice'];
    $meal['pepsiIceCreamSoda'] = $_POST['pepsiIceCreamSoda'];
    $meal['affogatoCoffee'] = $_POST['affogatoCoffee'];
    $_SESSION['drinks'] = $meal;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <h1 class="header">
        Sides
    </h1>
    <form action="../pages/desserts.php" method="post">
        <div class="divGallery">
            <b class="title">
                Eggs
            </b> 
            <img class="image" src="../resources/images/eggs.jpg" alt="Eggs" width="600" height="400">
            <fieldset>
                <select name="eggs" id="eggs" class="quantity">
                    <option value="0" selected>Quantity: 0</option>
                    <?php
                        for ($i=1; $i <= 10; $i++) { 
                            echo "<option value='$i'>Quantity: $i</option>";
                        }
                    ?>
                </select>
            </fieldset>
        </div>

        <div class="divGallery">
            <b class="title">
                Chips
            </b> 
            <img class="image" src="../resources/images/chips.jpg" alt="Chips" width="600" height="400">
            <fieldset>
                <select name="chips" id="chips" class="quantity">
                    <option value="0" selected>Quantity: 0</option>
                    <?php
                        for ($i=1; $i <= 10; $i++) { 
                            echo "<option value='$i'>Quantity: $i</option>";
                        }
                    ?>
                </select>
            </fieldset>
        </div>

        <div class="divGallery">
            <b class="title">
                Wedges
            </b> 
            <img class="image" src="../resources/images/wedges.jpg" alt="Wedges" width="600" height="400">
            <fieldset>
                <select name="wedges" id="wedges" class="quantity">
                    <option value="0" selected>Quantity: 0</option>
                    <?php
                        for ($i=1; $i <= 10; $i++) { 
                            echo "<option value='$i'>Quantity: $i</option>";
                        }
                    ?>
                </select>
            </fieldset>
        </div>
        <input type="image" src="../resources/cart.png" border="0" alt="Submit" class="cart" />
    </form>
</html>