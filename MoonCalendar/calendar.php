<?php
require 'components/head/head.php';
require 'components/head/infoline.php';
echo "<link rel='stylesheet' href='./css/indexStyle.css'>";
echo "<link rel='stylesheet' href='./css/style.css'>";
echo "<link rel='stylesheet' href='./css/calendar.css'>";

?>
<div id="chief" class="chief">
<main>
        <div id="moonDayCont" class="moonMainCont">
            <div id="CommandPanel" class="CommandPanel">
                <button id="CommandBut1" class="CommandBut"><img src="./img/command/back.png" alt="Back" title="Предыдущий день"></button>
                <button id="CommandBut2" class="CommandBut"><img src="./img/command/forward.png" alt="Forward" title="Следующий день"></button>
                <button id="CommandBut3" class="CommandBut"><img src="./img/command/calendar1.png" alt="Calendar" title="Выбрать дату"></button>
                <button id="CommandBut4" class="CommandBut"><img src="./img/command/listDay.png" alt="list" title="Все лунные дни"></button>
                <button id="CommandBut5" class="CommandBut"><img src="./img/command/format.png" alt="edit" title="Редактировать"></button>
                <button id="CommandBut6" class="CommandBut"><img src="./img/command/addNote.png" alt="Add note" title="Добавить заметку"></button>
                <button id="CommandBut7" class="CommandBut"><img src="./img/command/diary.png" alt="Diary" title="Открыть дневник"></button>
                <button id="CommandBut8" class="CommandBut"><img src="./img/command/contact_mini.png" alt="Chat" title="Открыть чат"></button>
            </div>
            <div>
                <h3>лунный день</h3>
                <span>Начало</span>
                <input type="text">
                <span>Завершение</span>
                <input type="text">
            </div>
            <p>Символ дня:</p>
            <p>ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt </p>
        </div>
        <div id="monZodiacCont" class="moonMainCont">
            <h3>Луна в знаке: </h3>
            <div>
                <span>Начало</span>
                <input id="main" type="text">
                <span>Завершение</span>
                <input type="text">
            </div>
            <p>ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?
            </p>
        </div>
    </main>
    <aside id="Zodiac" class="LeftBlock">
        <div id="zodiacModal" class="zodiacModal">
        <div class="zodiacContent">
            <div id="modalTitle" class="modalTitle">
                <span id="close" class="closeS">&times;</span>
                <h2 id="modalH">Заголовок</h2>
            </div>
            <div id="modalInfo" class="modalInfo">
                <img id="modalImg" class="modalImg" src="./img/phasa/full_moon.jpg" alt="test">
                <p id="modalTxt" class="modaTxt">lorem 10000
                   ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?ipsum dolor sit, amet consectetur adipisicing elit. Neque cumque quaerat reprehenderit voluptate architecto fuga natus aut asperiores illo ea nostrum porro modi dolor ut laboriosam quod quas, nesciunt sint?</p>
            </div>
            <div class="modalBut">
            <button id="modalBut1" class="modalBut">Вперед</button>
            <button id="modalBut2" class="modalBut">Назад</button>
            </div>
        </div>
        </div>
        <button id="zodiac1" class="zodiacButLeft"> <img class="zodiacImg" src="./img/Zodiac_png/001.png" alt="Овен"> </button>
        <button id="zodiac2" class="zodiacButLeft"><img class="zodiacImg"  src="./img/Zodiac_png/002.png" alt="Телец"></button>
        <button id="zodiac3" class="zodiacButLeft"><img class="zodiacImg"  src="./img/Zodiac_png/003.png" alt="Близницы"></button>
        <button id="zodiac4" class="zodiacButLeft"><img class="zodiacImg"  src="./img/Zodiac_png/004.png" alt="Рак"></button>
        <button id="zodiac5" class="zodiacButLeft"><img class="zodiacImg"  src="./img/Zodiac_png/005.png" alt="Лев"></button>
        <button id="zodiac6" class="zodiacButLeft"><img class="zodiacImg"  src="./img/Zodiac_png/006.png" alt="Дева"></button>
        <button id="zodiac7" class="zodiacButLeft"><img class="zodiacImg"  src="./img/Zodiac_png/007.png" alt="Весы"></button>
        <button id="zodiac8" class="zodiacButLeft"><img class="zodiacImg"  src="./img/Zodiac_png/008.png" alt="Скорпион"></button>
        <button id="zodiac9" class="zodiacButLeft"><img class="zodiacImg"  src="./img/Zodiac_png/009.png" alt="Стрелец"></button>
        <button id="zodiac10" class="zodiacButLeft"><img class="zodiacImg"  src="./img/Zodiac_png/010.png" alt="Козерог"></button>
        <button id="zodiac11" class="zodiacButLeft"><img class="zodiacImg"  src="./img/Zodiac_png/011.png" alt="Водолей"></button>
        <button id="zodiac12" class="zodiacButLeft" ><img class="zodiacImg"  src="./img/Zodiac_png/012.png" alt="Рыба"></button>
    </aside>
    <aside id = "NotePad" class="RightBlock">
        
        <div id="phaseMoonInfo">
            <button id="phaseMoonBut"><img id="MoonPhase" src="" alt="фаза Луны"></button>
            <img id="MoonPhase1" src="./img/command/Group 1.png" alt="указатель">
        </div>
        <div id = "NotePadVideo">
            <h3>Посмотреть видеозаметку</h3>
       
        </div>
        <div id="phaseNote" class="phaseMoonInfo">
            <div id="phaseNoteTitle" class="phaseMoonInfoTitle">
            <h3>Заметки</h3>
            <button id="titleBut" class="titleBut"><img class="titleBut titleButImg"src="./img/command/note.png" alt="Note" title="Открыть все заметки"></button>
            </div>
            <ol id="phasaList" class="phasaList">
                <li class="phasaList">Заметка №1</li>
                <li class="phasaList">Заметка №2</li>
            </ol>
        </div>
    </aside>
   
</div>


<script src="js/app.js"></script>

<?php require 'components/footer/footer.php';?>