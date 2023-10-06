<?php
require 'components/head/head.php';
require 'components/head/infoline.php';
echo "<link rel='stylesheet' href='./css/indexStyle.css'>";
echo "<link rel='stylesheet' href='./css/style.css'>";


?>

<div class="lineIn">

    <p class = "greetings">Сколько лунных календарей Вы найдете, если наберете поисковый запрос в интернете? Десятки страниц. Тысячи сайтов. Мы живем в век информационных технологий. Миллионы бит различной информации поступают к нам со скоростью света. И во всем этом информационном потоке очень важно найти опору. Найти способ превратить информацию в Знания. И использовать эти Знания в своей жизни для реального и действенного улучшения ее качества. Что же касается нас?..</p>
    <h2>Мы превращаем знания в инструменты для жизни!</h2>
    <div class="rolesDescription">
<?php foreach ($newsList as $newsItem):?>
        <div class = "btnIndex">
        <button id="<?= $newsItem['idparticipants'] ?>" class="button btnIndexRoles"><?=$newsItem['nameBtn']?></button>
        <span class = "rolesDescriptionSpan">Узнать подробнее о <?=$newsItem['nameLink']?></span>
        <p class = "dropdowns close"><span class="closeP">&times;</span><?= $newsItem['descriptionNameParticipants']?></p>
        </div>
<?php endforeach;?>
    </div>
    <div class="mainIndex">
        <div class="mainIndex1">
            <h3>Познакомимся?</h3>
            <p id = "videoTitle">Скоро я расскажу о том, что такое лунный календарь. И как он может помочь нам в нашей реально-повседневной жизни. А чтобы ожидание стало интересным, Вы можете приоткрыть завесу тайны Солнечной системы с научно-популярным каналом КОСМО. Приятного просмотра! </p>
            <div class = "mainIndex1a">
            <img id="butClose" class="button close" src="./img/command/closemini.png" alt="Close" title="Закрыть подсказку">
            <video id = "videoMain" src="videoRef/video.mp4" controls="controls"></video>
            </div>
        </div>
        <div class="mainIndex2">
            <div class = "mainIndex2a">
            <img src="./img/emoticons/important.png" alt="important">
            <h3>Минимум "заморочек", максимум пользы... или как работать с сервисом, чтобы получить наилучший результат:  </h3>
            </div>
            <ul class= "listRefItem listRef">
                
<?php foreach ($listRefLim as $listItem):?>
                <li class= "listRefItem"><a class= "listRefItem RefItem" id = "<?=$listItem['idReference']?>" href="#"><?=$listItem['nameReference']?></a> <p><?=$listItem['descriptionReference']?></p> </li>
<?php endforeach;?>
                <a class = "openRef button" href="referenceAll.php"><img src="./img/command/openAll.png" alt="Open reference" title="Открыть все записи"></a>
            </ul>
          
        </div>
    </div>

</div>
<?php require 'components/footer/footer.php';?>
<script src="./js/index.js"></script>
