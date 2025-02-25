<?php
    $biography = array("Born on February 1, 1965 to Bruce Lee (Martial Arts idol) and Linda Lee Cadwell. Brother to Shannon Lee. In 1970-71, they moved to Hong Kong, where Brandon lived until age eight, becoming fluent in Cantonese. By the time he was able to walk, he was already involved in learning about martial arts from his father.",
    "Brandon attended high school in Los Angeles, where he realized that he had also inherited acting ability along with his martial arts skills. In 1983, he was expelled from school because of misbehavior, but received his diploma at Miraleste High School. He continued his education and interest in acting at Emerson College in Massachusetts, where he majored in theatre. Having chosen an acting career, he studied at the Strasberg Academy, with Eric Morris in New York and in Los Angeles, and in Lynette Katselas' class in Los Angeles.",
    "His first professional job as an actor came at age twenty, when casting director Lynn Stalmaster asked him to read for a CBS television film, Kung Fu: The Movie (1986). Lee's first role in a feature film was Legacy of Rage (1986) (aka 'Legacy of Rage' (1986)) for D.M. Films of Hong Kong, followed by a co-starring role in Showdown in Little Tokyo (1991). He was also in Rapid Fire (1992), and The Crow (1994). He turned down offers to be in Dragon: The Bruce Lee Story (1993).",
    "Brandon died (while filming) at the age of 28, of what is to be believed, a brain hemorrhage on the set of The Crow (1994). The film crew shot a scene in which it was decided to use a gun without consent from the weapons coordinator, who had been sent home early that night. They handed Michael Massee the gun loaded with full power blanks and shot the scene, unaware that a bullet had become dislodged from a previous shot and had lodged itself in the barrel. Upon shooting of the scene the blank round forced the bullet out the barrel striking Brandon Lee. The crew only noticed when Lee was slow getting up. The doctors worked desperately for five hours, but it was no use. The bullet had lodged itself in Mr Lee's lower spine. He was pronounced dead at 1:04 P.M. the next day. He was supposed to marry Eliza Hutton on April 17, 1993. His body was flown to Seattle to be buried beside his father in Lake View Cemetery.");
    $filmography = array(
        array("../resources/TheCrow.png", 
            "https://www.imdb.com/title/tt0109506/?ref_=nm_flmg_knf_c_1",
            "The Crow",
            "The night before his wedding, musician Eric Draven and his fiancée are brutally murdered by members of a violent gang. On the anniversary of their death, Eric rises from the grave and assumes the mantle of the Crow, a supernatural avenger."),
        array("../resources/RapidFire.png", 
            "https://www.imdb.com/title/tt0105219/?ref_=nm_flmg_knf_c_2",
            "Rapid Fire",
            "When student Jake Lo witnesses a killing, he finds himself caught between two feuding drug lords. Betrayed and set up by the federal agents, the only person he can trust is Ryan, a Chicago cop who reminds Jake of his deceased father."),
        array("../resources/ShowdownInLittleTokyo.png", 
            "https://www.imdb.com/title/tt0102915/?ref_=nm_flmg_knf_c_3",
            "Showdown in Little Tokyo",
            "Two L.A. cops with opposing views on what is the best way to uphold the law have to work together to bring down the Yakuza, while trying to protect a beautiful woman."),
        array("../resources/LaserMission.png", 
            "https://www.imdb.com/title/tt0099978/?ref_=nm_flmg_knf_c_4",
            "Laser Mission",
            "Action superstar Brandon Lee portrays rebellious government agent Michael Gold who is sent on a desperate mission to a Soviet-controlled African nation in order to uncover a top-secret laser weapons operation and destroy it."));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body style="background: url('resources/image.png')">
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
                    <a href="../pages/ChuckNorris.php">ChuckNorris</a>
                </li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="body">
        
        <img class="left" src="../resources/BrandonLee.png" alt="">
        <div class="right">
            <h1 class="title">
                Brandon Lee
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












