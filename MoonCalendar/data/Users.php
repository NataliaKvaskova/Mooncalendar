<?php
require_once 'DBConnection.php'; //если файл не подключен, подключить

class Users
{
    
    public static function checkEmailUnique($email){
        $pdo = DBConnect::getConnection();

        $query = "SELECT email
                    FROM users
                    WHERE email = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$email]);

        return $statement->rowCount();// возвращаем кол-во строк при выборке
    }

    //добавление нового юзера в бд
     
    public static function addNewUser($user){
        $pdo = DBConnect::getConnection();

        $query = "INSERT INTO users(first_name, last_name, email, password, role, image)
                    VALUES(?,?,?,?,?,?);";
        $statement = $pdo->prepare($query);
        $statement->execute([ $user['firstName'], $user['lastName'],
            $user['email'], $user['password'], $user['role'], $user['image']]);

        return $pdo->lastInsertId(); // получаем ID добавленного в БД пользователя
    }

    //получение пароля по электронной почте

    public static function getPasswordByLogin($email){
        $pdo = DBConnect::getConnection();

        $query = "SELECT password
                    FROM users
                    WHERE email = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$email]);

        return $statement->fetch()['password'];// возвращаем строку с хешем пароля
    }

    //получение данных о пользовател для сессии (id, firstName, email)
    
    public static function getUserInfoSession($email){
        $pdo = DBConnect::getConnection();

        $query = "SELECT id, first_name, email
                    FROM users
                    WHERE email = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$email]);

        return $statement->fetch();
    }


    
}