<?php
namespace App\Services;

use Config\Database;
use PDO;

class Validation{
    
    public static function validateFields(array $fields):bool{
        foreach($fields as $field){
            if(empty($field)){
                return false;
            }
        }
        return true;
    }
}