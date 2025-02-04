<?php

namespace App\Repositories;

use App\Models\Product;
use Config\Database;
use PDO;

abstract class BaseRepositorie{

protected $conn;

public function __construct(){
    $this->conn = Database::getConnection();
}

abstract function save(object $object);
abstract function edit(object $object);
abstract function delete($id);
abstract function display();
abstract function findByID($id);

}