<?php
namespace App\Models;

class User{
    private  $id;
    private  $firstName;
    private  $lastName;
    private  $email;
    private  $password;

    public function __construct($firstName, $lastName,$email, $password, $id= null){
        $this->firstName= $firstName;
        $this->lastName= $lastName;
        $this->email= $email;
        $this->password= $password;
        $this->id= $id;
        }

    public function getID(){
        return $this->id;
    }

    public function getFirstName(){
        return $this->firstName;
    }
    
    public function getLastName(){
        return $this->lastName;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

}