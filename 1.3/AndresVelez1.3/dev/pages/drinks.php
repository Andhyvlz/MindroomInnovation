<?php
    session_start();
    $meal = array();
    $meal['beffBurger'] = $_POST['beffBurger'];
    $meal['chickenBurger'] = $_POST['chickenBurger'];
    $meal['vegetarianBurger'] = $_POST['vegetarianBurger'];
    $_SESSION['burgers'] = $meal;
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
    <h1 style="text-indent: 7em; font-family: Ravie; color: khaki;">
        Drinks
    </h1>
    <form action="../pages/sides.php" method="post">
        <div class="divGallery">
            <b class="title">
                Orange Juice
            </b> 
            <img class="image" src="../resources/images/orangeJuice.jpg" alt="Orange Juice" width="600" height="400">
            <fieldset>
                <select name="orangeJuice" id="orangeJuice" class="quantity">
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
                Pepsi Ice Cream Soda
            </b> 
            <img class="image" src="../resources/images/pepsiIceCreamSoda.jpg" alt="Pepsi Ice Cream Soda" width="600" height="400">
            <fieldset>
                <select name="pepsiIceCreamSoda" id="pepsiIceCreamSoda" class="quantity">
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
                Affogato Coffee
            </b> 
            <img class="image" src="../resources/images/affogatoCoffee.jpg" alt="Affogato Coffee" width="600" height="400">
            <fieldset>
                <select name="affogatoCoffee" id="affogatoCoffee" class="quantity">
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