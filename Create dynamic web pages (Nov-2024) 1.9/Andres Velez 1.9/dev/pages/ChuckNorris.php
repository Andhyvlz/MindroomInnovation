<?php
    $biography = array("Chuck Norris is familiar to fans worldwide as the star of action films such as The Hitman (1991), The Delta Force (1986) and Delta Force 2: The Colombian Connection (1990). He also starred in Missing in Action (1984) and its sequels, Firewalker (1986) and Sidekicks (1992). He was an executive producer of Walker, Texas Ranger (1993) as well as the star.",
    "Chuck Norris was born in Ryan, Oklahoma, to Wilma (Scarberry) and Ray Norris, who was a truck driver, mechanic, and bus driver. The eldest of three children, he helped his mother raise his two younger brothers in Torrance, CA, where his family moved when he was 12. Norris attended North Torrance High School from its inception in September, 1955 until his graduation in June, 1958. He is one of several storied alumni from the school. Other NHS alumni include Bob Hite (1943-1981), who was the lead singer of 'Canned Heat,' Chris Demaria, who was a professional baseball player in the Kansas City Royals and Milwaukee Brewers organizations, Chris Mortensen, an analyst with ESPN, Hip-Hop DJ 'Key-Kool' (Kikuo Nishi), and Wee-Man (Jason Acuna) of 'JackAss fame.'",
    "Norris joined the Air Force after graduating from high school. During a stint in Korea, he began to study the Asian martial art of Tang Soo Do. After returning home, he worked for Northrop Aviation and moonlighted as a karate instructor. Two years later he was teaching full-time and running a number of martial-arts schools. His students included Steve McQueen, Priscilla Presley and the Osmonds.",
    "Norris's fight career lasted from 1964-1974. Norris started off by losing his first three tournaments but, by 1966, he was almost unbeatable. Among the numerous titles he won were The National Karate Championships (1966), All-Star Championships (1966), World Middleweight Karate Championship (1967), All-American Karate Championship (1967), Internationals (1968), World Professional Middleweight Karate Championship (defeating Louis Delgado on 24 November 1968), All-American Championship (1968), National Tournament of Champions (1968), American Tang Soo Championship, and the North American Karate Championship. Norris compiled a fight record of 65-5 with wins over champions Joe Lewis, Skipper Mullins, Arnold Urquidez, Ronald L. Marchini, Victor Moore, Louis Delgado, and Steve Sanders. Of the five men to beat Norris, three were Allen Steen, Joe Lewis, and Norris's last career defeat to Louis Delgado in 1968. Norris retired as undefeated Professional Full-Contact Middleweight Champion in 1974.",
    "Norris, who was urged to get into acting by his friend Steve McQueen, skillfully incorporates his martial-arts knowledge into his series and feature film projects, stressing action and technique over violence. He is the author of the books 'The Secret of Inner Strength' and 'The Secret Power Within - Zen Solutions to Real Problems'. He works for many charities, including the Funds for Kids, Veterans Administration National Salute to Hospitalized Veterans, the United Way, Make-a-Wish Foundation and KickStart, a nonprofit organization he created to help battle drugs and violence in schools. He also starred in the television movie Blood In, Blood Out (1993), broadcast on CBS.",
    "He lives on a ranch when not filming.");
    $filmography = array(
        array("../resources/WalkerTexasRanger.png", 
            "https://www.imdb.com/title/tt0106168/?ref_=nm_flmg_knf_c_1",
            "Walker, Texas Ranger",
            "Cordell Walker and his partner, James Trivette, are Texas Rangers. They make it their business to battle crime in Dallas and all around the state of Texas."),
        array("../resources/TheExpendables2.png", 
            "https://www.imdb.com/title/tt1764651/?ref_=nm_flmg_knf_t_2",
            "The Expendables 2",
            "Mr. Church reunites the Expendables for what should be an easy paycheck, but when one of their men is murdered on the job, their quest for revenge puts them deep in enemy territory and up against an unexpected threat."),
        array("../resources/TheWayOfTheDragon.png", 
            "https://www.imdb.com/title/tt0068935/?ref_=nm_flmg_knf_t_3",
            "The Way of the Dragon",
            "A country bumpkin martial artist visits his relatives in Rome, Italy, where he must defend them and their restaurant against harassment from brutal gangsters."),
        array("../resources/InvasionUsa.png", 
            "https://www.imdb.com/title/tt0089348/?ref_=nm_flmg_knf_t_4",
            "Invasion U.S.A.",
            "A one-man army comes to the rescue when the United States are invaded by communists."));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck Norris</title>
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
        <img class="left" src="../resources/ChuckNorris.png" alt="Chuck Norris">
        <div class="right">
            <h1 class="title">
                Chuck Norris
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