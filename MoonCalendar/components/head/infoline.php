<?php

require './data/data.php';


$pdo1 = DBConnect :: getConnection();

$query = "SELECT  `idMoonday`,`timeStartDay`, DATE_FORMAT(`data`,'%d.%m.%Y') AS `date`
            FROM mooncalendar
            WHERE data >= DATE_FORMAT(NOW(), '%Y-%m-%d')";
$statement = $pdo1->query($query);
$statement =$statement->fetch();
$time = $statement['timeStartDay'];
$date = $statement['date'];
date_default_timezone_set('Europe/Moscow');

if ($time > date('H:i:s') ){
    $moonDay = $statement['idMoonday']-1;
    $moonDayQ = $statement['idMoonday'];
    $query1 = "SELECT  `id`,`idMoonday`,`timeStartDay`, DATE_FORMAT(`data`,'%d.%m.%Y') AS `date` 
    FROM mooncalendar
    WHERE `data` = DATE_ADD(CURDATE(), INTERVAL -1 DAY)";
    $statement1 = $pdo1->query($query1);
    $statement1 =$statement1->fetch();
    $time = $statement1['timeStartDay'];
    $date = $statement1['date'];
} else {$moonDay = $statement['idMoonday'];
        $time = $statement['timeStartDay'];
        $date = $statement['date'];
      };



?>

<body>
<div class="InfoLine">
            <!-- <span id="dataSpan" class="Zodiac">Сегодня:</span> -->
            <p id="data" class="Zodiac pZodiac"></p>
            <p id="MoonDay" class="Zodiac pZodiac"><?= $moonDay . ' лунный день'?></p>
            <p id="time" class="Zodiac pZodiac"><?= 'начался  ' . $date . '  в  ' . $time ?> </p>
            <p id="MoonZodiac" class="Zodiac pZodiac">луна в Знаке</p>
        </div>
        
<script src="./js/head.js"></script>
  