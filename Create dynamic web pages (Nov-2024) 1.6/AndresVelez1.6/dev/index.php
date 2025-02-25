<?php
    $menu = ['Home' => 'index.php', 
        'History' => 'pages/history.php',
        'Contact' => 'pages/contact.php',
        'Gallery' => 'pages/gallery.php'];
    $active =  'Home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles.css">
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
    <video controls loop autoplay class="video">
        <source src="resources/index.mp4" type="video/mp4">
        <source src="mov_bbb.ogg" type="video/ogg">
        Your browser does not support HTML video.
    </video>
    <div class="containerInfo body">
        <div class="divInfo">
            <h1>
                Diving Australia Presidents/Chairs
            </h1>
            <ul>
                <li>
                    John Sherry - 1977 - 1982
                </li>
                <li>
                    Frank Murphy AM - 1982 - 1984
                </li>
                <li>
                    Bruce Prance OAM - 1984 - 1986
                </li>
                <li>
                    Bill Richards - 1986 - 1992
                </li>
                <li>
                    Terry Harte - 1992 - 1996
                </li>
                <li>
                    Philip Pullar OAM - 1996 - 2008
                </li>
                <li>
                    Ashley Wilson AM - 2008 - 2014
                </li>
                <li>
                    Michael Murphy - 2014 - 2022
                </li>
                <li>
                    Elizabeth Jack - 2022 - 
                </li>
            </ul>
        </div>
        <div class="divInfo">
            <h1>
                Diving Australia Life Members
            </h1>
            <ul>
                <li>Jack Barnett*</li>
                <li>Ray Potter*</li>
                <li>Frank Murphy AM*</li>
                <li>Shirley Panayi</li>
                <li>Bill Richards*</li>
                <li>John Sherry*</li>
                <li>Valerie Beddoe AM</li>
                <li>Robyn Arlow OAM</li>
                <li>Dot Gamble*</li>
                <li>Clive Morton</li>
                <li>Peter Panayi*</li>
                <li>Jack Sanders*</li>
                <li>Steve Foley</li>
                <li>Madeleine Barnett</li>
                <li>Wang Tong Xiang</li>
                <li>Daryl Hocking OAM</li>
                <li>Ian Nicholls*</li>
                <li>Philip Pullar OAM*</li>
                <li>Barbara Donnet*</li>
                <li>Wendy Pullar</li>
                <li>Sue Lewis OAM</li>
                <li>Ashley Wilson AM</li>
                <li>Bruce Prance OAM*</li>
            </ul>
        </div>
        <div class="divInfo">
            <h1>
                Diving Australia Life Members
            </h1>
            <ul>
                <li>eginald 'Snowy' Baker, London 1908</li>
                <li>ily Beaurepaire, Antwerp 1920</li>
                <li>ichmond Eve, Paris 1924</li>
                <li>arry Morris, Amsterdam 1928</li>
                <li>on Masters, Berlin 1936</li>
                <li>avid Norris, London 1948</li>
                <li>on Faulds, Helsinki 1952</li>
                <li>rancis Murphy, Helsinki 1952</li>
                <li>osalyn Cooper, Melbourne 1956</li>
                <li>Barbara Donnet, Melbourne 1956</li>
                <li>Patricia Freeman, Melbourne 1956</li>
                <li>Barry Holmes, Melbourne 1956</li>
                <li>Adele Johnson, Melbourne 1956</li>
                <li>Joseph McCann, Melbourne 1956</li>
                <li>William Tully, Melbourne 1956</li>
                <li>Arthur Winter, Melbourne 1956</li>
                <li>Susan Cope, Rome 1960</li>
                <li>Ken Crotty, Rome 1960</li>
                <li>Graham Deuble, Rome 1960</li>
                <li>Robyn Arlow, Tokyo 1964</li>
                <li>Donald Wagstaff, Mexico City 1968</li>
                <li>Ken Grove, Munich 1972</li>
                <li>Ann Jones, Munich 1972</li>
                <li>Madeleine Barnett, Montreal 1976</li>
                <li>Stephen Foley, Montreal 1976</li>
                <li>Elizabeth Jack, Montreal 1976</li>
                <li>Valerie Beddoe, Moscow 1980</li>
                <li>Jennifer Donnet, Moscow 1980</li>
                <li>Julie Kent, Los Angeles 1984</li>
                <li>Graeme Banks, Seoul 1988</li>
                <li>Russell Butler, Seoul 1988</li>
                <li>Craig Rogerson, Seoul 1988</li>
                <li>April Adams, Barcelona 1992</li>
                <li>Vyninka Arlow, Barcelona 1992</li>
                <li>Simon McCormack, Barcelona 1992</li>
                <li>Michael Murphy, Barcelona 1992</li>
                <li>Rachel Wilkes, Barcelona 1992</li>
                <li>Vanessa Baker, Atlanta 1996</li>
                <li>Tony Lawson, Atlanta 1996</li>
                <li>Jodie Rogers, Atlanta 1996</li>
                <li>Loudy Tourky, Atlanta 1996</li>
                <li>Alexandra Croak, Sydney 2000</li>
                <li>Mathew Helm, Sydney 2000</li>
                <li>Rebecca Manuel, Sydney 2000</li>
                <li>Chantell Newbery (Mitchell), Sydney 2000</li>
                <li>Robert Newbery, Sydney 2000</li>
                <li>Dean Pullar, Sydney 2000</li>
                <li>Steven Barnett, Athens 2004</li>
                <li>Lynda Folauhola, Athens 2004</li>
                <li>Irina Lashko, Athens 2004</li>
                <li>Briony Bryant, Beijing 2008</li>
                <li>Matthew Mitcham, Beijing 2008</li>
                <li>Scott Roberston, Beijing 2008</li>
                <li>Sharleen Stratton, Beijing 2008</li>
                <li>Melissa Wu, Beijing 2008</li>
                <li>Brittany Broben, London 2012</li>
                <li>Rachel Bugg, London 2012</li>
                <li>James Connor, London 2012</li>
                <li>Jaele Patrick, London 2012</li>
                <li>Anabelle Smith, London 2012</li>
                <li>Ethan Warren, London 2012</li>
                <li>Domonic Bedggood, Rio 2016</li>
                <li>Kevin Chavez Banda, Rio 2016</li>
                <li>Maddison Keeney, Rio 2016</li>
                <li>Grant Nel, Rio 2016</li>
                <li>Brittany O'Brien, Rio 2016</li>
                <li>Esther Qin, Rio 2016</li>
                <li>Samuel Fricker, Tokyo 2020</li>
                <li>Nikita Hains, Tokyo 2020</li>
                <li>Shixin Li, Tokyo 2020</li>
                <li>Cassiel Rousseau, Tokyo 2020</li>
                <li>Jaxon Bowshire, Paris 2024</li>
                <li>Ellie Cole, Paris 2024</li>
                <li>Alysha Koloi, Paris 2024</li>
                <li>Kurtis Mathews, Paris 2024</li>
            </ul>
        </div>
    </div>
    <script src="assets/script.js"></script>
</body>
</html>