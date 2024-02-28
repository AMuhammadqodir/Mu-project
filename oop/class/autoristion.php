<?php
include("DB.php");

session_start();
unset($_SESSION['error']);
class Autoristion
{
    public $login;
    public $parol;
    public $logindb;
    public $paroldb;
    public $statusdb;

    public function MethodAuto()
    {
        if($this->login==$this->logindb and $this->parol==$this->paroldb)
        {            
            switch($this->statusdb)
            {
                case 1: header('Location: ../views/Adminpanel.php');break;
                case 2: header('Location: ../views/Userpanel.php');break;
                case 3: header('Location: ../views/Userspanellocation.php');break;
            }
            
        }
        else
        {
            $_SESSION['error'] = "Логин ё парол нодуруст аст.";
            header('Location: ../');
        }
    }
}

$db = new Database("localhost", "root", "", "oop");
$db->connect();
$login = $_POST['login'];
$parol = $_POST['parol'];
$result = $db->query("SELECT * FROM `user` where `login` = '".$login."' and `password` = '".$parol."';");
$row = $result->fetch_assoc();
$logindb = $row['login'];
$paroldb = $row['password'];
$statusdb = $row['status'];

$object = new Autoristion();
$object->login = $_POST['login'];
$object->logindb = $logindb;
$object->paroldb = $paroldb;
$object->statusdb = $statusdb;
$object->parol = $_POST['parol'];
$object->MethodAuto();
$db->close();



/*
$db = new Database("localhost", "root", "", "bm_shukurov");
$db->connect();

// Пример выполнения SQL-запроса
$result = $db->query("SELECT * FROM user");
if($result){
    while ($row = $result->fetch_assoc()) {
        // Для примера выводим значения полей на экран
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Email: " . $row['login'] . "<br>";
        // И так далее, в зависимости от структуры вашей таблицы
        echo "<br>";
    }
}
 else {
echo "Ошибка выполнения запроса: " . $db->connection->error;
}

// После завершения работы с базой данных не забудьте закрыть соединение
$db->close();*/