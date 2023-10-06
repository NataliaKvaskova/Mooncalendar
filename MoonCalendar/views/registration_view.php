<?php
require 'components/head/head.php';
require 'components/head/infoline.php';
echo "<link rel='stylesheet' href='./css/indexStyle.css'>";
echo "<link rel='stylesheet' href='./css/style.css'>";
echo "<link rel='stylesheet' href='./css/registration.css'>";
?>

<div class="container">
<p>Пожалуйста, зарегистрируйтесь, чтобы продолжить. Поля, отмеченные звездочкой нужно обязательно заполнить.</p>
    <div >
        <div >
            <form  method="POST" enctype="multipart/form-data" >
                <div class="rowGroup">
                    <div class="rowFlex row form-group">
                        <label class="text-black">Имя:</label>
                        <input type="text" name="firstName" class="form-control"
                               placeholder="Только русские буквы от 2 букв. Первая буква заглавная."
                               value="<?=$input['firstName'] ?? ''?>">
                    </div>
                    <span class="error"><?=$errors['firstName'] ?? ''?></span>
                    <div class="rowFlex col-md-6">
                        <label class="text-black">Фамилия:</label>
                        <input type="text" name="lastName" class="form-control"
                               placeholder="Только русские буквы от 2 букв. Первая буква заглавная."
                               value="<?=$input['lastName'] ?? ''?>">
                    </div>
                    <span class="error"><?=$errors['lastName'] ?? ''?></span>
                    <div class="rowFlex">
                        <label class="text-black"><img src="img/command/hi.png" alt="Обязательное поле" >Адрес электронной почты</label>
                        <input type="text" name="email" class="form-control"
                               placeholder="example@user.ru"
                               value="<?=$input['email'] ?? ''?>">
                        
                    </div>
                    <span class="error"><?=$errors['email'] ?? ''?></span>
                    <div class="rowFlex">
                        <label class="text-black"><img src="img/command/hi.png" alt="Обязательное поле" >Пароль</label>
                        <input type="password" id="reg-password-1" name="password" class="form-control"
                                placeholder="Не менее шести произвольных символов"
                                value="<?=$input['password'] ?? ''?>">
                                <img class="button showRegPassword" src="img/command/passShow.png" alt="Показать пароль" title="Показать пароль"><br>
                        
                    </div>
                    <span class="error"><?=$errors['password'] ?? ''?></span>
                    <div class="rowFlex">
                        <label class="text-black"><img class="btnImg" src="img/command/hi.png" alt="Обязательное поле" >Подтверждение пароля</label>
                        <input type="password" id="reg-password-2" class="form-control" placeholder="Повторите пароль">
                        <img class="button showRegPassword" src="img/command/passShow.png" alt="Показать пароль" title="Показать пароль"> 
                    </div>
                        <span class="error" id="reg-password-error"></span>
                    <div class="rowFlex">
                    <label class="text-black"><img src="img/command/hi.png" alt="Обязательное поле" >Стать:</label>
                    <select name="role" class="form-control">
                        <option value="1" selected>Испытателем</option>
                        <option value="2">Включенным в процесс</option>
                        <option value="3" >Участником</option>
                        <option value="4">Напарником</option>
                    </select>
                    
                    </div>
                    <span class="error"><?=$errors['login'] ?? ''?></span>
                    <div class="rowFlex">
                        <label class="text-black">Фотография профиля</label>
                        <input type="file" name="image" class="form-control">
                       
                    </div>
                    <span class="error"><?=$errors['image'] ?? ''?></span>
                </div>
                    <div class="divBut">
                        <input id="reg" type="submit" value="Зарегистрироваться" class="butPos button">
                    </div>
            </form>
        </div>
    </div>
</div>
<script src="js/registration.js"></script>
<?php require 'components/footer/footer.php';?>