<?php
namespace App\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\Validation;

class AuthController {
    private $userRepository;

    public function __construct() {
        $this->userRepository = new userRepository();
    }
    
    public function registerView() {
        require_once dirname(__DIR__,1).'\Views\Auth\register.php';  
    }

    public function register() {
        $firstName = htmlspecialchars($_POST['firstName']);
        $lastName = htmlspecialchars($_POST['lastName']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);


        if (Validation::validateFields([$firstName, $lastName, $email, $password])) {
            if ($this->userRepository->findByEmail($email)) {
                $_SESSION['error'] = "Cet email est déjà utilisé.";
                header("Location:/register");
                exit;
            }else{

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $user = new User($firstName, $lastName, $email, $hashedPassword );

            $this->userRepository->save($user);

            header("Location:/login");
            $_SESSION['success'] = "Vous êtes inscrit avec succès!";
            exit;
            }
        } else {
            $_SESSION['error'] = "Veuillez remplir tous les champs correctement.";
            header("Location:/register");
            exit;
        }
    }

    public function loginView() {
        require_once dirname(__DIR__,1).'\Views\Auth\login.php';  
    }

    public function login(){
        $email=htmlspecialchars($_POST['email']);
        $password=htmlspecialchars($_POST['password']);

        if(Validation::validateFields([$email, $password])){
          $user= $this->userRepository->getUserByEmail($email);
        //    var_dump($user);
        // die("login success");
        
          if($user){
            // var_dump(password_verify($password, $user['password']));
            // echo  $user['password'];
            // var_dump($password);
            if(password_verify($password, $user['password'])){
                $_SESSION['id'] = $user['id'];
                 $_SESSION['email'] = $user['email'];
                
                 header("location:/dashboard");
                exit;
        // die("login success");

                 
            }else{
                $_SESSION['error']= 'Mot de pass incorrect';
        //    echo "Mot de pass incorrect";

            header("Location:/login");
            }
          }else{
           $_SESSION['error']='Aucun utilisateur trouvé avec cet email'; 
        //    echo "Aucun utilisateur trouvé avec cet email";

           header("Location:/login");
          }
        }else{
           $_SESSION['error']='Veuiller remplir tous les champs'; 
        //    echo "Veuiller remplir tous les champs";
           header("Location:/login");
        }
    }
}