<?php
    session_start();
    $meal = array();
    $meal['eggs'] = $_POST['eggs'];
    $meal['chips'] = $_POST['chips'];
    $meal['wedges'] = $_POST['wedges'];
    $_SESSION['sides'] = $meal;
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
        Desserts
    </h1>
    <form action="../pages/summary.php" method="post">
        <div class="divGallery">
            <b class="title">
                Nutella Waffle
            </b> 
            <img class="image" src="../resources/images/nutellaWaffle.jpg" alt="Eggs" width="600" height="400">
            <fieldset>
                <select name="nutellaWaffle" id="nutellaWaffle" class="quantity">
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
                Chocolate Crepe
            </b> 
            <img class="image" src="../resources/images/chocolateCrepe.jpg" alt="Chocolate Crepe" width="600" height="400">
            <fieldset>
                <select name="chocolateCrepe" id="chocolateCrepe" class="quantity">
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
                Caramel Pancake
            </b> 
            <img class="image" src="../resources/images/caramelPancake.jpg" alt="Caramel Pancake" width="600" height="400">
            <fieldset>
                <select name="caramelPancake" id="caramelPancake" class="quantity">
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