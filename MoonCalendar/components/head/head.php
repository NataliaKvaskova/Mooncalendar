<?php
if(!isset($_SESSION))session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лунный календарь</title>
    <link rel="shortcut icon" href="./img/phasa/FullMoon_icon.png">
    <link rel="stylesheet" href="./css/headStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Montserrat:wght@400;700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
    <header>
        <h1>Лунный календарь</h1>
        <div id="user" class="user">
        <div id="AvatarPhoto" class="AvatarPhoto">
            <?php if( isset($_SESSION['validUser']) ):?>
                <span id="userSpan" class = "userSpan">Удачного исследования, <?=$_SESSION['firstName']?>!</span>
            <?php else: ?>
                <span id="userSpan" class = "userSpan"> <a href="././enter.php">Войти</a></span>
            <?php endif;?>
            <div class="dropdownsblock">
            <button class="dropbtn"><img class="AvatarPhoto" src="./img/phasa/FullMoon_icon.png" alt="аватар"></button>
            <div id="dropdowns" class="dropdowns close">
                <a href="index.php">На главную</a>
                <a href="calendar.php">В календарь</a>
                <a href="profile.php">В профиль</a>
                <?php if( isset($_SESSION['validUser']) ):?>
                <a href="core/exit.php">Выйти</a>
                <?php else: ?>
                    <a href="././registration.php">Регистрация</a>
            <?php endif;?>
        </div>
        </div>
        </div>
    </header>
   
    