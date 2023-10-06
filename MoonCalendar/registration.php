<?php
require_once 'data/DBConnection.php'; //если файл не подключен, подключить
// контроллер страницы регистрации клиентов

require 'data/Users.php'; // класс для работы с табл users
require 'core/SingUp.php'; // класс для проверки данных

if($_SERVER['REQUEST_METHOD'] === 'POST'){// если форма отправлена, проверяем данные
    list($errors, $input) = SignUp::validateForm();

    if($errors){ // если ошибки есть, показываем форму снова
        require 'views/registration_view.php';
    }else{ 
        SignUp::processForm($input); //если ошибок нет, сохраняем данные
    }

}else{
    require 'views/registration_view.php'; // если страница загружена впервые, отображаем форму
}