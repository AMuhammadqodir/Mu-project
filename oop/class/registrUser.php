<?php
session_start();
Class registrUser
{
    public $nameUser;
    public $loginUser;
    public $parolUser;
    public $repparolUser;

    public function MethodRegistrUser()
    {
        if($this->loginUser=='admin')
        {
            echo 'Логин бант мебошад!';
        }
        else if($this->parolUser!=$this->repparolUser)
        {
            echo 'Парол муофиқат не';
        }
        else
        {
            $_SESSION['error'] = 'Аз бақайдгирӣ мафиқона гузаштед';
            header('Location: ../');
        }
    }
}

$objectUser = new registrUser();
$objectUser->nameUser = $_POST['nameUser'];
$objectUser->loginUser = $_POST['loginUser'];
$objectUser->parolUser = $_POST['parolUser'];
$objectUser->repparolUser = $_POST['repparolUser'];
$objectUser->MethodRegistrUser();