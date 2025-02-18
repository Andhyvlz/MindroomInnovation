<?php
    session_start();
    session_unset();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <h1 style="text-indent: 7em; font-family: Ravie; color: khaki;">
        Burgers
    </h1>
    <form action="pages/drinks.php" method="post">
        <div class="divGallery">
            <b class="title">
                Beef Burger
            </b> 
            <img class="image" src="resources/images/beffBurger.jpg" alt="Beff Burger" width="600" height="400">
            <fieldset>
                <select name="beffBurger" id="beffBurger" class="quantity">
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
                Chicken Burger
            </b> 
            <img class="image" src="resources/images/chickenBurger.jpg" alt="Beff Burger" width="600" height="400">
            <fieldset>
                <select name="chickenBurger" id="chickenBurger" class="quantity">
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
                Vegetarian Burger
            </b> 
            <img class="image" src="resources/images/vegetarianBurger.jpg" alt="Vegetarian Burger" width="600" height="400">
            <fieldset>
                <select name="vegetarianBurger" id="vegetarianBurger" class="quantity">
                    <option value="0" selected>Quantity: 0</option>
                    <?php
                        for ($i=1; $i <= 10; $i++) { 
                            echo "<option value='$i'>Quantity: $i</option>";
                        }
                    ?>
                </select>
            </fieldset>
        </div>
        <input type="image" src="resources/cart.png" border="0" alt="Submit" class="cart" />
    </form>
</html>