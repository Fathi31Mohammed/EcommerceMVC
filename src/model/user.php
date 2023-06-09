<?php

namespace Application\Model\User;

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');

use Application\Lib\Database\DatabaseConnection;

class User
{
    public string $id;
    public string $name;
    public string $prenom;
    public string $username;
    public string $email;
    public string $password;
    public int $role_id;
}

class UserRepository
{
    public DatabaseConnection $connection;

    public function getUsers(): array
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT id , name , prenom , username, email , password , role_id FROM users ORDER BY name ASC"
        );
        $statement->execute();

        $users = [];
        while (($row = $statement->fetch())) {
            $user = new User();
            $user->id = $row['id'];
            $user->name = $row['name'];
            $user->prenom = $row['prenom'];
            $user->username = $row['username'];
            $user->email = $row['email'];
            $user->role_id = $row['role_id'];
            $user->password = $row['password'];


            $users[] = $user;
        }

        return $users;
    }

    public function getUser(string $id): ?User
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT id, name , prenom , username , email , role_id , password FROM users WHERE id = ?"
        );
        $statement->execute([$id]);

        $row = $statement->fetch();
        if ($row === false) {
            return null;
        }

        $user = new User();
        $user->id = $row['id'];
		$user->name = $row['name'];
        $user->prenom = $row['prenom'];
		$user->username = $row['username'];
		$user->email = $row['email'];
        $user->password = $row['password'];
		$user->role_id = $row['role_id'];

        return $user;
    }

    public function createUser(string $name,string $prenom, string $username, string $email, string $password, string $role_id): bool
    {    if($role_id=='1'){
         
        $statement = $this->connection->getConnection()->prepare(
            'INSERT INTO users(name,prenom, username, email, password, role_id) VALUES(?, ?, ?, ?, ?, ?)'
        );
        $affectedLines = $statement->execute([$name, $prenom , $username, $email, $password, $role_id]);

        return ($affectedLines > 0);
       }
       else{
          
        $statement = $this->connection->getConnection()->prepare(
            'INSERT INTO users(name,prenom,username, email, password, role_id) VALUES(?, ?, ?, ?, ?,?)'
        );
        $affectedLines = $statement->execute([$name, $prenom , $username, $email, $password, $role_id]);

        return ($affectedLines > 0);
       }
    }

    // public function createUser(string $name,string $prenom, string $username, string $email, string $password, string $role_id): bool
    // {    
    //     $statement = $this->connection->getConnection()->prepare(
    //         'INSERT INTO users(name,prenom, username, email, password, role_id) VALUES(?, ?, ?, ?, ?, ?)'
    //     );
    //     $affectedLines = $statement->execute([$name, $prenom , $username, $email, $password, $role_id]);

    //     return ($affectedLines > 0);
    // }

    public function updateUser( string $name, string $prenom , string $username, string $email, string $password, int $role_id , string $id): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'UPDATE users SET name = ? , prenom = ?, username = ?, email = ?, password = ?, role_id = ? WHERE id = ?'
        );
        $affectedLines = $statement->execute([$name, $prenom, $username, $email, $password, $role_id, $id]);

        return ($affectedLines > 0);
    }

    public function deleteUser(string $id): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'DELETE FROM users WHERE id = ?'
        );
        $affectedLines = $statement->execute([$id]);

        return ($affectedLines > 0);
    }

    public function loginAD($name,$password){
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM users where name=? AND password=?"
        );
        $statement->execute(array($name,$password));
        $control=$statement->fetch(\PDO::FETCH_OBJ);
        return $control;
    }
}
