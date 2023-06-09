<?php

namespace Application\Controllers\User;

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\user.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\User\UserRepository;

class User
{
    public function execute()
    {
        $connection = new DatabaseConnection();

        $userRepository = new UserRepository();
        $userRepository->connection = $connection;
        $users = $userRepository->getUsers();

        require('C:\xampp\htdocs\Nouveaudossier\ecommerce\templates\back\users.php');
    }

    public function delete(string $id)
    {
        $connection = new DatabaseConnection();

        $userRepository = new UserRepository();
        $userRepository->connection = $connection;
        $users = $userRepository->deleteUser($id);
        $users = $userRepository->getUsers($id);
        require('C:\xampp\htdocs\Nouveaudossier\ecommerce\templates\back\users.php');
        
    }
    public function login($name,$password)
    {   $connection = new DatabaseConnection();
        $userRepository = new UserRepository();
        $userRepository->connection = $connection;
        $control = $userRepository->loginAD($name,$password);
         if($control>0){
            $_SESSION['name']=$name;
            $_SESSION['password']=$password;
            
            header('Location:index.php?action=homepage');
         }

    }
    public function acceuil()
    {
        require('C:\xampp\htdocs\Nouveaudossier\ecommerce\acceuil.php');
    }
}
