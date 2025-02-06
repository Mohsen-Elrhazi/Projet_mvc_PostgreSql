<?php
namespace App\Controllers;

use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Services\Validation;

class ProductController {
    private $productRepository;

    public function __construct() {
        $this->productRepository = new ProductRepository();
    }

    public function addProductView() {
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\header.php';  
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\sidebar.php';  
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\section.php';  
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\navbar.php';  
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\homeContent.php'; 
         
        // page qui contient form add product
         require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\pages\add_product.php';  
         
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\endHomeContent.php';  
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\endSection.php';  
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\footer.php'; 
        }

    public function addProduct() {
        $name = htmlspecialchars($_POST['name']);
        $image = htmlspecialchars($_POST['image']);
        $description = htmlspecialchars($_POST['description']);
        $price = htmlspecialchars($_POST['price']);
        $quantity = htmlspecialchars($_POST['quantity']);


        if (Validation::validateFields([$name, $image, $description, $price, $quantity ])) {
           
            $product = new Product($name, $image, $description, $price, $quantity );

            $this->productRepository->save($product);

            header("Location:/addProduct");
            $_SESSION['success'] = "le Produit a ete ajoute ";
            exit;
            
        } else {
            $_SESSION['error'] = "Veuillez remplir tous les champs correctement.";
            header("Location:/addProduct");
            exit;
        }
    }

    
}