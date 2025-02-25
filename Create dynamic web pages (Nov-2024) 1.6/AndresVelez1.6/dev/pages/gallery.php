<?php
    $menu = ['Home' => '../index.php', 
        'History' => 'history.php',
        'Contact' => 'contact.php',
        'Gallery' => 'gallery.php'];
    $active =  'Gallery';
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
    <div class="header">
        <div class="nav">
            <ul class="ulMenu">
                <li class="liOptions">
                    <div class="divMenu">
                        <?php foreach($menu as $key => $value) { ?>
                            <a href="<?php echo $value; ?>" class="<?php echo $active == $key ? 'active' : ''; ?>" onmouseover="bigNav(this)" onmouseout="normalNav(this)">
                        <?php echo $key; ?>
                        </a>
                        <?php } ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="containerInfo body">
        <div class="container">
            <div class="divImage">
                <img src="../resources/2017_01_26_20163_1485417604._large.jpg" alt="Scuba diving in clear waters" width="300" onclick="openModal(this)">
                <img src="../resources/a3746ccf6f7013a97ba4400f700da386.jpg" alt="Underwater coral reef" width="300" onclick="openModal(this)">
                <img src="../resources/dest_malta_qala_theme_scuba_diving_gettyimages-726867365_universal_within-usage-period_82457.jpg" alt="Scuba diver exploring the ocean" width="300" onclick="openModal(this)">
                <img src="../resources/ekspedisi-laut-banda-yuri-revalino.jpg" alt="Scuba diving expedition" width="300" onclick="openModal(this)">
                <img src="../resources/fun-diving-el-nido1.webp" alt="Fun diving in El Nido" width="300" onclick="openModal(this)">
                <img src="../resources/great-barrier-reef-scuba-diving-1-scaled.webp" alt="Great Barrier Reef scuba diving" width="300" onclick="openModal(this)">
                <img src="../resources/Impact-Of-Scuba-Diving-On-A-Coral-Reef-Dos-Donts-Green-Living-Zone-2.jpg" alt="Impact of scuba diving on coral reef" width="300" onclick="openModal(this)">
                <img src="../resources/OIP.jpg" alt="Scuba diver with marine life" width="300" onclick="openModal(this)">
                <img src="../resources/R.jpg" alt="Scuba diving adventure" width="300" onclick="openModal(this)">
                <img src="../resources/Scuba-Diving-Physics-TOP-Science-147398339.webp" alt="Scuba diving physics" width="300" onclick="openModal(this)">
            </div>
        </div>
    </div>
    <div id="modal" class="hidden">
        <span class="close" onclick="closeModal()">X</span>
    </div>
    <script src="../assets/script.js"></script>
</body>
</html>