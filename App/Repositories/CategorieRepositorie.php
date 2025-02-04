<?php
namespace App\Repositories;

use App\Models\Categorie;
use Config\Database;
use InvalidArgumentException;
use PDO;

class CategorieRepositorie extends BaseRepositorie{
    public function save(object $object): void{
        if($object instanceof Categorie){
            $sql = "INSERT INTO categorie(name)VALUES(:name)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':name' => $object->getName() ,
            ]);
        }else{
            throw new InvalidArgumentException("Object passe n'est pas une instanse de categorie!");
        }
    }
    public function edit(object $object): void{
        if($object instanceof Categorie){
            $sql = "UPDATE categorie set name = :name";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':name' => $object->getName() ,
            ]);
        }else{
            throw new InvalidArgumentException("Object passe n'est pas une instanse de categorie!");
        }
    }
    public function delete($id): void{
        $sql = "DELETE * FROM categorie WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
    public function display(): array{
        $sql = "SELECT * FROM categorie";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data = [];
        foreach($categories as $categorie){
            $data[] = new Categorie($categorie['name'] ,$categorie['id']);
        }
        return $data;
    }
    public function findByID($id): Categorie{
        $sql = "SELECT * FROM categorie WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        $categorie = $stmt->fetch(PDO::FETCH_ASSOC);
        return new categorie(
            $categorie['name'] ,
            $categorie['id']
        );
    }
}

?>