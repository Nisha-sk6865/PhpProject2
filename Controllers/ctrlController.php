<?php

class Controller {

    public function __construct() {
        
    }

    public function invoke() {
        $page = filter_input(INPUT_GET, 'mdl', FILTER_SANITIZE_SPECIAL_CHARS);


        switch ($page) {
              case "1":
                include_once 'Controllers/ctrlStartpg.php';
                $ctrlStartpg= new ctrlStartpgController();
                $ctrlStartpg->invoke();
                break;
            case "2":
                include_once 'Controllers/ctrlRegistration.php';
                $ctrlRegistration= new ctrlRegistrationController();
                $ctrlRegistration->invoke();
                break;
            case "3":
                include_once 'Controllers/ctrlLogin.php';
                $ctrlLogin= new ctrlLoginController();
                $ctrlLogin->invoke();
                break;
            case "4":
                include_once 'Controllers/ctrlHome.php';
                $ctrlHome= new ctrlHomeController();
                $ctrlHome->invoke();
                break;
             case "5":
                include_once 'Controllers/ctrlContact.php';
                $ctrlContact= new ctrlContactController();
                $ctrlContact->invoke();
                break;
            case "6":
                include_once 'Controllers/ctrlThankYou.php';
                $ctrlThankYou= new ctrlThankYouController();
                $ctrlThankYou->invoke();
                break;
            default :
               include_once 'Controllers/ctrlStartpg.php';
                $ctrlStartpg= new ctrlStartpgController();
                $ctrlStartpg->invoke();
                break;
        }
    }

}

?>
