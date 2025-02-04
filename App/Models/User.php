<?php
namespace App\Models;

class User{
    private int $id;
    private string $name;
    private string $email;
    private string $password;

    public function _construct($name,$email, $password, $id= null){
        $this->name=$name;
        $this->email=$email;
        $this->password= $password;
        $this->id= $id;
        }

    public function getID(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    // public function save(User $user):void{
    //     $stmt= $this->conn->prepare("INSERT INTO users(name, email, password) VALUES(:nme, :email, :password)");
    //     $stmt->execute([
    //         ':name' => $user->getName(),
    //         ':email' => $user->getEmail(),
    //         ':password' => $user->getPassword()
    //     ]);
    // }

    public function save():void{
        $stmt= $this->conn->prepare("INSERT INTO users(name, email, password) VALUES(:nme, :email, :password)");
        $stmt->execute([
            ':name' => $this->name,
            ':email' => $this->email,
            ':password' => $this->password
        ]);
    }
}