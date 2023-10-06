<?php
// вспомогательный класс для проверки данных при регистрации
require_once './data/DBConnection.php'; //если файл не подключен, подключить
class SignUp
{
    //метод для проверки имени, проверяю только на значение
    private static function validateFirstName($firstName){
        $regExp = '/^[А-ЯЁ][а-яё]+$/u';

        if(!preg_match($regExp, $firstName)){// если имя НЕ соответствует
            return 'Только русские буквы от 2 букв. Первая буква заглавная.';
        }
    }

   //метод для проверки фамилии, проверяю только на значение
    private static function validateLastName($lastName){
        $regExp = '/^[А-ЯЁ][а-яё]+$/u';
            if(!preg_match($regExp, $lastName)){
            return 'Только русские буквы от 2 букв. Первая буква заглавная.';
        }
    }
    //метод для проверки роли, проверяю только на пустоту
    private static function validateRole($role){
        if(empty($role)){
            return 'Укажите, в каком качестве Вы регистрируетесь';
        }
    }

    //метод для проверки емейла, значение и уникальность
    private static function validateEmail($email){
        $regExp = '/^.+@.+\..+$/';

        if(empty($email)){
            return 'Введите адес электронной почты';
        }elseif(!preg_match($regExp, $email)){
            return 'Адрес электронной почты введен в неверном формате';
        }

        // проверка емейла по БД
        $rowCount = Users::checkEmailUnique($email);

        if($rowCount){// если есть хоть одна строка в БД
            return 'Такой адрес электронной почты уже зарегистрирован';
        }
    }

    //метод для проверки пароля
    private static function validatePassword($password){
        $regExp = '/^.{6,}$/';

        if(empty($password)){
            return 'Введите пароль';
        }elseif(!preg_match($regExp, $password)){
            return 'Не менее шести произвольных символов';
        }
    }

    //метод для проверки картинки, только размер и формат
    private static function validateImage($image){
        $allowedSize = 2097152;// максимально допустимый вес картинки - 2 Мегабайта
        $allowedExtensions = ['image/jpeg', 'image/png', 'image/gif'];// массив разрешенных форматов картинок
        if($image['size'] !== 0){
        if ($image['size'] > $allowedSize){ // если картинка более 2Мб
            return 'Размер фото не должен быть более 2 Мегабайт';
        }elseif( !in_array($image['type'], $allowedExtensions) ){ // если в массиве нет полученного типа файла
            return 'Только картинки в форматах jpeg, png, gif';
        }  
    }
    }

   //публичный метод для контроллера, проверяет всю форму
    public static function validateForm(){
        $errors = []; // массив для ошибок
        $input = []; // массив для данных, чтобы не заносить заново все

        // экранируем данные и обрезаем конечные пробелы
        $input['firstName'] = htmlspecialchars(trim($_POST['firstName']));
        $input['lastName'] = htmlspecialchars(trim($_POST['lastName']));
        $input['email'] = htmlspecialchars(trim($_POST['email']));
        $input['password'] = htmlspecialchars(trim($_POST['password']));
        $input['role'] = htmlspecialchars(trim($_POST['role']));
        $input['image'] = $_FILES['image'];
        //имя
        $firstNameError = self::validateFirstName($input['firstName']);
        if($firstNameError){// если обнаружена ошибка при вводе
            $errors['firstName'] = $firstNameError;
        }
        //фамилия
        $lastNameError = self::validateLastName($input['lastName']);
        if($lastNameError){
            $errors['lastName'] = $lastNameError;
        }
        //почта
        $emailError = self::validateEmail($input['email']);
        if($emailError){
            $errors['email'] = $emailError;
        }
        //пароль
        $passwordError = self::validatePassword($input['password']);
        if($passwordError){
            $errors['password'] = $passwordError;
        }
        //роль 
        $roleError = self::validateRole($input['role']);
        if($passwordError){
            $errors['role'] = $roleError;
        }
        //картинка
        $imageError = self::validateImage($input['image']);
        if($imageError){
            $errors['image'] = $imageError;
        }

        return [$errors, $input];
    }
        //сохраняем картинку
    private static function saveImage($image){
        // создаем путь, куда будем сохранять картинку
        $imagePath = 'img/users/'.time().'_'.$image['name'];
        move_uploaded_file($image['tmp_name'], $imagePath);// перемещаем картинку
        return $imagePath;
    }
    //сохраняем данные
    public static function processForm($input){
        $input['image'] = self::saveImage($input['image']); // перемещаем картинку

        $input['password'] = password_hash($input['password'], PASSWORD_DEFAULT);// шифруем пароль

        // сохранение данных о новом пользователе в БД и получаем его ID
        $input['userId'] = Users::addNewUser($input);

        // начинаем сессию и записываем в нее данные пользователя
        session_start();
        $_SESSION['userId'] = $input['userId'];
        $_SESSION['validUser'] = $input['email'];
        $_SESSION['firstName'] = $input['firstName'];

        // перенаправляю на страницу календаря
        header('Location: calendar.php');

    }



}