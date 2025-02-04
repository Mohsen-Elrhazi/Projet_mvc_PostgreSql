<?php
namespace App\Repositories;

use App\Models\User;
use Config\Database;
use PDO; 

class UserRepositorie{
    private $conn;

    public function __construct(){
        $this->conn= Database::getConnection();
    }
    
    public function save(User $user):void{
        $stmt= $this->conn->prepare("INSERT INTO users(name, email, password) VALUES(:nme, :email, :password)");
        $stmt->execute([
            ':name' => $user->getName(),
            ':email' => $user->getEmail(),
            ':password' => $user->getPassword()
        ]);
    }

    public function findByEmail($email):bool {
        $stmt= $this->conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute([
            ':email' => $email
        ]);
        return $stmt->rowCount() > 0;
    }

    public function getUserByEmail($email):array {
        $stmt= $this->conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute([
            ':email' => $email
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}