<?php
    session_start();
    $meal = array();
    $meal['nutellaWaffle'] = $_POST['nutellaWaffle'];
    $meal['chocolateCrepe'] = $_POST['chocolateCrepe'];
    $meal['caramelPancake'] = $_POST['caramelPancake'];
    $_SESSION['desserts'] = $meal;
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
    <?php
        $beffBurger = $_SESSION['burgers']['beffBurger'];
        $chickenBurger = $_SESSION['burgers']['chickenBurger'];
        $vegetarianBurger = $_SESSION['burgers']['vegetarianBurger'];
        $orangeJuice = $_SESSION['drinks']['orangeJuice'];
        $pepsiIceCreamSoda = $_SESSION['drinks']['pepsiIceCreamSoda'];
        $affogatoCoffee = $_SESSION['drinks']['affogatoCoffee'];
        $eggs = $_SESSION['sides']['eggs'];
        $chips = $_SESSION['sides']['chips'];
        $wedges = $_SESSION['sides']['wedges'];
        $nutellaWaffle = $_SESSION['desserts']['nutellaWaffle'];
        $chocolateCrepe = $_SESSION['desserts']['chocolateCrepe'];
        $caramelPancake = $_SESSION['desserts']['caramelPancake'];
        $total = $beffBurger + $chickenBurger + $vegetarianBurger + $orangeJuice + $pepsiIceCreamSoda + $affogatoCoffee + $eggs + $chips + $wedges + $nutellaWaffle + $chocolateCrepe + $caramelPancake;
    ?>
    <table  id="Tableproductos" style="background-color: #f2f2f2;">
        <caption>
            Council budget (in £) 2018
        </caption>
        <tr>
            <th>
                <h1>Name</h1>
            </th>
            <th>
                <h1>
                    Quantity
                </h1>
            </th>
        </tr>
        <tr>
            <td colspan=2>
                <h2>Burgers</h2>
            </td>
        </tr>
        <?php
           
            if ($beffBurger != 0) {
                echo "<tr>";
                echo "<td>";
                echo "Beef Burger";
                echo "</td>";
                echo "<td>";
                echo $beffBurger;
                echo "</td>";
                echo "</tr>";
            }
            if ($chickenBurger != 0) {
                echo "<tr>";
                echo "<td>";
                echo "Chicken Burger";
                echo "</td>";
                echo "<td>";
                echo $chickenBurger;
                echo "</td>";
                echo "</tr>";
            }
            if ($vegetarianBurger != 0) {
                echo "<tr>";
                echo "<td>";
                echo "Vegetarian Burger";
                echo "</td>";
                echo "<td>";
                echo $vegetarianBurger;
                echo "</td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <td colspan=2>
                <h2>Drinks</h2>
            </td>
        </tr>
        <?php
            if ($orangeJuice != 0) {
                echo "<tr>";
                echo "<td>";
                echo "Orange Juice";
                echo "</td>";
                echo "<td>";
                echo $orangeJuice;
                echo "</td>";
                echo "</tr>";
            }
            if ($pepsiIceCreamSoda != 0) {
                echo "<tr>";
                echo "<td>";
                echo "Pepsi Ice Cream Soda";
                echo "</td>";
                echo "<td>";
                echo $pepsiIceCreamSoda;
                echo "</td>";
                echo "</tr>";
            }
            if ($affogatoCoffee != 0) {
                echo "<tr>";
                echo "<td>";
                echo "Affogato Coffee";
                echo "</td>";
                echo "<td>";
                echo $affogatoCoffee;
                echo "</td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <td colspan=2>
                <h2>Sides</h2>
            </td>
        </tr>
        <?php
            if ($eggs != 0) {
                echo "<tr>";
                echo "<td>";
                echo "Eggs";
                echo "</td>";
                echo "<td>";
                echo $eggs;
                echo "</td>";
                echo "</tr>";
            }
            if ($chips != 0) {
                echo "<tr>";
                echo "<td>";
                echo "Chips";
                echo "</td>";
                echo "<td>";
                echo $chips;
                echo "</td>";
                echo "</tr>";
            }
            if ($wedges != 0) {
                echo "<tr>";
                echo "<td>";
                echo "Wedges";
                echo "</td>";
                echo "<td>";
                echo $wedges;
                echo "</td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <td colspan=2>
                <h2>Desserts</h2>
            </td>
        </tr>
        <?php
            if ($nutellaWaffle != 0) {
                echo "<tr>";
                echo "<td>";
                echo "Nutella Waffle";
                echo "</td>";
                echo "<td>";
                echo $nutellaWaffle;
                echo "</td>";
                echo "</tr>";
            }
            if ($chocolateCrepe != 0) {
                echo "<tr>";
                echo "<td>";
                echo "Chocolate Crepe";
                echo "</td>";
                echo "<td>";
                echo $chocolateCrepe;
                echo "</td>";
                echo "</tr>";
            }
            if ($caramelPancake != 0) {
                echo "<tr>";
                echo "<td>";
                echo "Caramel Pancake";
                echo "</td>";
                echo "<td>";
                echo $caramelPancake;
                echo "</td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <td>
                <h2>Total: 
                <?php
                        echo $total;
                ?>
                </h2>
            </td>
            <td>
                <form action="../index.php">
                    <input type="submit" value="Home" class="button">   
                </form>
            </td>
        </tr>
    </table>
</body>
</html>