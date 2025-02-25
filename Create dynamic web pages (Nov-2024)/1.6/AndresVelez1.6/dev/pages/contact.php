<?php
    $menu = ['Home' => '../index.php', 
        'History' => 'history.php',
        'Contact' => 'contact.php',
        'Gallery' => 'gallery.php'];
    $active =  'Contact';
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
    <div class="body">
        <h3>Contact Form</h3>
        <div class="containerContact">
            <form action="">
                <input type="text" id="inputFirstname" name="firstname" placeholder="Your firs tname">
                <input type="text" id="inputLastname" name="lastname" placeholder="Your last name">
                <select id="selectCountry" name="country">
                    <option value="" selected disabled hidden>Your country</option>
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select>
                <textarea id="textareaSubject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit" onsubmit="serverError(e)">
                <div id ="myAnimation">error</div>
            </form>
        </div>
    </div>
    <script src="../assets/script.js"></script>
</body>
</html>