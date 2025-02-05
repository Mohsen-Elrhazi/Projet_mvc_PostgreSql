<?php
namespace App\Repositories;

use App\Models\Product;
use Config\Database;
use InvalidArgumentException;
use PDO;

class ProductRepositorie extends BaseRepositorie{
    public function save(object $object){
        if($object instanceof Product){
            $sql = "INSERT INTO Product(name ,image ,description ,price)VALUES(:name ,:image :description ,:price)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':name' => $object->getName() ,
                ':image' => $object->getImage() ,
                ':description' => $object->getDescription() ,
                ':price' => $object->getPrice()
            ]);
        }else{
            throw new InvalidArgumentException("Object passe n'est pas une instanse de product!");
        }
    }
    public function edit(object $object){
        if($object instanceof Product){
            $sql = "UPDATE Product set name = :name ,image = :image ,description = :description ,price = :price";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':name' => $object->getName() ,
                ':image' => $object->getImage() ,
                ':description' => $object->getDescription() ,
                ':price' => $object->getPrice()
            ]);
        }else{
            throw new InvalidArgumentException("Object passe n'est pas une instanse de product!");
        }
    }
    public function delete($id): void{
        $sql = "DELETE * FROM Product WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
    public function display(): array{
        $sql = "SELECT * FROM Product";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data = [];
        foreach($products as $product){
            $data[] = new Product(
                $product['name'] ,
                $product['image'] ,
                $product['description'] ,
                $product['price'] ,
                $product['id']
            );
        }
        return $data;
    }
    public function findByID($id){
        $sql = "SELECT * FROM Product WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        return new Product(
            $product['name'] ,
            $product['image'] ,
            $product['description'] ,
            $product['price'] ,
            $product['id']
        );
    }
}

?>