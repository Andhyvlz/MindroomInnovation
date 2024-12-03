<?php
    function siteGrab($site) {
        $curl = curl_init($site);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($curl);
        curl_close($curl);
        echo $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .l {
            width: 45vw;
            float: left;
        }
        .r {
            width: 45vw;
            float: right;
        }
    </style>
</head>
<body>
    <div class="l">
        <?php
            $lData = siteGrab("https://www.mindroom.edu.au");
        ?>
    </div>
    <div class="r">
        <?php
            siteGrab("https://slashdot.org/");
        ?>
    </div>
</body>
</html>