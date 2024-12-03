<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $r = 0;
        $range = 50;
        do {
            if ($r%3==0 && $r%5==0) {
                echo 'fizzbuzz';
            } else if ($r%3==0) {
                echo 'fizz';
            } else if ($r%5==0) {
                echo 'buzz';
            } else {
                echo $r;
            }
            echo '<br>';
            $r++;
        } while ($r<=$range);
    ?>
</body>
</html>