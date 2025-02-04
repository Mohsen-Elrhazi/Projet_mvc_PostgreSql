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
}