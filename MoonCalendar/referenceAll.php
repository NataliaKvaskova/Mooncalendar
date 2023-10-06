<?php
require 'components/head/head.php';
require 'components/head/infoline.php';
echo "<link rel='stylesheet' href='./css/style.css'>";
echo "<link rel='stylesheet' href='./css/indexStyle.css'>";
echo "<link rel='stylesheet' href='./css/referenceStyle.css'>";
?>
<div class="ReferenceMain">
        <div class="videoRef">
            <div  class="ref">
                <div id="outputDiv"></div>
            <a id="butRef1" href="#"><img class="button butRefImg" src="img/command/search.png" alt="next" title="Поиск по фильтру"></a>
            </div>
           <div>
            <p id="videoTitle">
            <img src="img/command/bulb.jpg" alt="Sovet">
            <div id ="textVideo">  
            <div class="videoText">
            <p>Чтобы раскрыть список подсказок, используйте кнопку <img src="img/command/forward.png" alt="Sovet"></p>
            <p>Чтобы скрыть список подсказок, используйте кнопку <img src="img/command/back.png" alt="Sovet"> </p> 
            <p>Чтобы открыть поиск по фильтру (категориям), используйте кнопку <img src="img/command/search.png" alt="Sovet"></p>
            <p> Чтобы посмотреть подсказку, нажмите на интересующий Вас пункт в списке в правой боковой панели  <img src="img/command/forward1.png" alt="Sovet"></p>
            </div>
            </div>  
            </p>
           <video id="videoRefplay" class="close" src="videoRef/3.mp4" controls="controls"></video>
           </div>
        </div>
        <div class = "list">
        
        <ul id="listRef">
            <h3>Подсказки по работе с программой</h3>
        </ul>
        <div class = "butRef">
            <a id="butRef2" href="#"><img class="button butRefImg" src="img/command/back.png" alt="back" title = "Скрыть последние"></a>
            <a id="butRef3"  href="#"><img class="button butRefImg" src="img/command/forward.png" alt="next" title = "Показать еще"></a>
        </div>
        </div>
        <script src="js/reference.js"></script>           


</div>
<?php require 'components/footer/footer.php';?>
