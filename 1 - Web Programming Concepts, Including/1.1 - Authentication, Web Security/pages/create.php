<?php
    session_start();
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $choice = $_POST['choice'];
    switch ($choice) {
        case 'Option 1':
            $_SESSION['password_level_1'] = $password;
            break;
        case 'Option 2':
            $_SESSION['password_level_2'] = $password;
            break;
        case 'Option 3':
            $_SESSION['password_level_3'] = $password;
            break;
    }
    header('location: ../');
?>