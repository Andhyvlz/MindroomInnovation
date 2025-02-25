<?php
    $menu = ['Home' => '../index.php', 
        'History' => 'history.php',
        'Contact' => 'contact.php',
        'Gallery' => 'gallery.php'];
    $active =  'History';
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
    <div class=" body">
        <h1 class="padding5">
            History of Diving
        </h1>
        <h2 class="padding5">
            The Origin and Evolution of Diving
        </h2>
        <div class="content">
            <div class="floatRight">
                <img src="../resources/animal1.jpg" alt="" width="400">
            </div>
            <p class="padding5">
                On a roof slab of a vast burial vault south of Naples is a painting of a young man diving from a narrow platform.  The discovery of the "Tomba Del Tuffatore" (The Tomb of the Diver) shows us that the excitement and grace of diving from high places into water has lured people from at least 480 BC - the date established for the construction of the tomb.  As with most sports dating back to ancient times, little information on competitive diving has survived.
            </p>
            <p class="padding5">
                The origins of modern diving can be traced to two European venues - Halle in Germany and Sweden.
            </p>
        </div>
        <div class="content">
            <div class="floatLeft">
                <img src="../resources/animal2.png" alt="" width="400">
            </div>
            <p class="padding5">
                It was a traditional speciality of the guild of salt boilers, called Halloren to practise certain swimming and diving skills.  The Halloren used to perform a series of diving feats from a bridge into the River Saale.  In 1840 in contact with the German gymnastics movement the world's first diving association was formed.  Most of its members were gymnasts starting their tumbling routines as a kind of water gymnastic.  Thus diving became very popular in Germany.
            </p>
            <p class="padding5">
                In Sweden wooden scaffolding was erected around many lakes, inviting courageous fellows to perform diving feats.  Somersaulting from great heights and swallow-like flights of a whole team are common.
            </p>
        </div>
        <div class="content">
            <div class="floatRight">
                <img src="../resources/animal3.jpg" alt="" width="400">
            </div>
            <p class="padding5">
                The beginning of competitive diving corresponded to the rise of swimming clubs and associations.  In Germany, the oldest club called "Neptun" started international diving contests from a lower board and from a tower in 1882.  In 1891 the first diving rules were adopted and the following year the first tables were published in Germany.
            </p>
            <p class="padding5">
                At the turn of the century, another branch of diving found numerous followers in the USA - the bridge and artistic leaping.  However, its development was stopped due to the high number of serious accidents.
            </p>
        </div>
        <div class="content">
            <div class="floatLeft">
                <img src="../resources/animal4.jpg" alt="" width="400">
            </div>
            <p class="padding5">
                In 1904 in Saint-Louis, with the support of the Germans, diving was added to the Olympic programme.  German divers dominated the springboard scene during the first two decades.  When high diving from a platform was introduced in 1908, the Swedish athletes dominated these contests.
            </p>
            <p class="padding5">
                For the 1908 Games in London, a diving table was composed listing the types of dive allowed, giving descriptions of them and setting a difficulty value for each and fixing the number of required and voluntary dives.  The table contained 14 dives for highboard and 20 for springboard.  Recommendations for judging were also given.
            </p>
        </div>
        <div class="content">
            <div class="floatRight">
                <img src="../resources/animal5.jpg" alt="" width="400">
            </div>
            <p class="padding5">
                Constant changes came about until the FINA meeting in 1914 in Budapest where the German proposals for springboard and the Swedish proposals for highboard diving were adopted as internationally binding rules.  German diving placed particular emphasis on the good body position during flight whereas the Swedish set a high value on the courageous aspect of the dive and the splashless arrival in the water. 
            </p>
            <p class="padding5">
                In 1902, the Amateur Diving Association of England, the first ever diving association, was formed and continued until 1936 when it came under the aegis of the ASA of Great Britain.
            </p>
        </div>
        <div class="content">
            <div class="floatLeft">
                <img src="../resources/animal6.jpg" alt="" width="400">
            </div>
            <p class="padding5">
                From 1920, US divers asserted their supremacy for several decades.  Two great coaches can be credited for most of these victories - Ernst Brandsten, and outstanding Swedish diver at the 1912 Olympic Games and Fred Cady.  Their ideas, teaching methods and contribution to improving equipment enabled them to produce a constant stream of diving champions.  Brandsten and Cady introduced a more flexible board with a moveable fulcrum allowing the divers to leap higher and perform more difficult moves.  These boards were used until the late 1940s.
            </p>
            <p class="padding5">
                Diving developed further with the creation of the FINA International Diving Committee in 1928.  In 1929 they published a new table which divided all dives into five groups for springboard and six groups for platform diving.  The same system is still used today.  They also establish the four body positions.  Until the 1920s, most dives were performed in the straight position.  In 1921, the pike and tuck positions were permitted to facilitate completing somersaults and dives from lower boards.  The free position was added later to allow new, more complicated dives.
            </p>
            <p class="padding5">
                Technical improvements in equipment, new dives with higher degrees of difficulty, scientifically founded methods of coaching and new attractive international events helped diving develop to the current high standard.  The laminated Brandsten board was quickly replaced by the aluminium board used at the 1960 Olympic Games in Rome.  Then Ray Rude developed the Duraflex Board made of a single piece of tape-red and riveted aluminium.  Finally, in 1969 the Mariflex double tapered board was introduced.  This, and the fibre-glass board which is also used, are very elastic, allowing much higher leaps and thus more dives with high degrees of difficulty.
            </p>
        </div>
        <h2 class="padding5">
            The History of Competitive Diving
        </h2>
        <div class="content">
            <div class="floatRight">
                <img src="../resources/animal7.jpg" alt="" width="400">
            </div>
            <p class="padding5">
                At the beginning of the twentieth century, diving obtained growing acceptance in the international arena. In 1904 in St Louis, a platform diving event for men was added to the Olympic programme for the first time. Dr G.E. Sheldon of the United States became the first Olympic diving champion. Springboard diving for men was introduced at the 1908 Olympic Games in London. Platform diving for women followed in 1912 at the Stockholm Olympic Games and women's springboard was added in 1920 at the Games in Antwerp.  Synchronised diving made its Olympic debut at the 2000 Games in Sydney, Australia.
            </p>
        </div>
        <h2 class="padding5">
            The History of FINA
        </h2>
        <div class="content">
            <div class="floatRight">
                <img src="../resources/animal8.jpg" alt="" width="400">
            </div>
            <p class="padding5">
                Although swimming was included in the Olympic programme from the very first Games of the modern era in 1896 in Athens, the Federation Internationale de Natation Amateur (FINA) was only founded a few years later, on 19 July 1908, on the occasion of the Olympic Games in London. Its main goal was to unify regulations for the aquatic sports of swimming, water polo and diving and to no longer allow the organising countries of the Games to impose their own rules. A Briton, George W. Hearn, at the time President of the Amateur Swimming Association, became the first person in charge with the title Honorary Secretary/Treasurer. His number one objective was to codify the Olympic aquatic sports of swimming, diving and water polo. Ever since then, FINA has endeavoured to promote international competitions with rules accepted by all.
            </p>
        </div>
    </div>
    <script src="../assets/script.js"></script>
</body>
</html>