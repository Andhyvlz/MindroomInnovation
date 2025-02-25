<?php
    $biography = array("Born in Hong Kong, Sammo Hung's acting career began while he was training in acrobatics, martial arts and dance as a child at the China Drama Academy, and he received acclaim for his performance with a troupe called 'he Seven Little Fortunes.' He made his feature film debut as an actor at the age of 12, and has worked in numerous martial arts films as an actor, director, producer and/or choreographer, collaborating with Bruce Lee and Jackie Chan, two superstars of the genre.",
    "He is now internationally renowned as a pioneer and trend-setter in Hong Kong action films. Hung's big break as a film actor came with a role as a sparring partner in the Bruce Lee film Enter the Dragon (1973). He established his reputation as a skilled physical comedian in several kung-fu comedies, beginning with 'Enter the Fat Dragon' (Enter the Fat Dragon (1978)). He also produced and starred in numerous successful films throughout the 1970s and 1980s for Hong Kong's leading film studio, Golden Harvest.",
    "Hung collaborated in the 1980s with long-time friend Jackie Chan in a highly successful series of action comedies that cemented Hung's reputation as a consummate actor/director and launched Chan's career as an international star. For a while, Hung also starred in an American TV series, Martial Law (1998).",
    "He directed Once Upon a Time in China and America (1997), his first film shot in the US. He and his wife, Mina, now divide their time between homes in Hong Kong and Los Angeles.");
    $filmography = array(
        array("../resources/IpMan.png", 
            "https://www.imdb.com/title/tt1220719/?ref_=nm_flmg_knf_t_1",
            "Ip Man",
            "During the Japanese invasion of China, a wealthy martial artist is forced to leave his home when his city is occupied. With little means of providing for themselves, Ip Man and the remaining members of the city must find a way to survive."),
        array("../resources/TheProdigalSon.png", 
            "https://www.imdb.com/title/tt0085211/?ref_=nm_flmg_knf_t_2",
            "The Prodigal Son",
            "A young man discovers that his reputation as a fearsome martial artist is manufactured by his rich father, after meeting a real martial arts master, who's also a master thespian, and is determined to apprentice under him to learn kung fu."),
        array("../resources/IpMan2.png", 
            "https://www.imdb.com/title/tt1386932/?ref_=nm_flmg_knf_c_3",
            "Ip Man 2",
            "Centering on Ip Man's migration to Hong Kong in 1949 as he attempts to propagate his discipline of Wing Chun martial arts."),
        array("../resources/ProjectA.png", 
            "https://www.imdb.com/title/tt0085127/?ref_=nm_flmg_knf_t_4",
            "Project A",
            "Fighting against pirates at the turn of the 20th century, the Hong Kong navy are failing miserably. It's up to Sergeant Lung (Jackie Chan) to take matters into his own hands."));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sammo Hung</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <div class="header">
        <div class="nav">
            <ul class="ulMenu">
                <li class="liOptions">
                    <a href="../index.php">Home</a>
                    <a href="../pages/BruceLee.php">Bruce Lee</a>
                    <a href="../pages/JackieChan.php">Jackie Chan</a>
                    <a href="../pages/SammoHung.php">Sammo Hung</a>
                    <a href="../pages/Jean-ClaudeVanDamme.php">Jean-Claude Van Damme</a>
                    <a href="../pages/BrandonLee.php">Brandon Lee</a>
                    <a href="../pages/ChuckNorris.php">Chuck Norris</a>
                </li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="body">
        <img class="left" src="../resources/SammoHung.png" alt="Sammo Hung">
        <div class="right">
            <h1 class="title">
                Sammo Hung
            </h1>
            <?php 
                foreach ($biography as $value) {
                    echo "<p>".$value."</p>";
                }
            ?>
        </div>
        <hr>
        <?php
            foreach ($filmography as $key => $value) {
                echo '<div class="gallery">
                        <a target="_blank" href="'.$value[1].'">
                            <h3>'.$value[2].'</h3>
                            <img src="'.$value[0].'" alt="'.$value[2].'" width="600" height="400">
                            <div class="desc">'.$value[3].'</div>
                        </a>
                    </div>';
            }
        ?>
    </div>
    <script src="../assets/script.js"></script>
</body>
</html>