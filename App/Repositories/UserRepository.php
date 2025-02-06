<?php
namespace App\Repositories;

use App\Models\User;
use Config\Database;
use PDO; 

class UserRepository{
    private $conn;

    public function __construct(){
        $this->conn= Database::getConnection();
    }
    
    public function save(User $user):void{
        $stmt= $this->conn->prepare("INSERT INTO users(firstName, lastName, email, password) VALUES(:firstName, :lastName, :email, :password)");
        $stmt->execute([
            ':firstName' => $user->getFirstName(),
            ':lastName' => $user->getLastName(),
            ':email' => $user->getEmail(),
            ':password' => password_hash($user->getPassword(), PASSWORD_BCRYPT) // Sécuriser le mot de passe
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