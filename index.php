<?php
  session_start();

define('DFFG574554FD', true);

$url = filter_input(INPUT_GET,'url',FILTER_DEFAULT);

$arr_url = explode("/", $url);

// include_once 'autoload.php';
//Core
include_once 'core/Core.php';

//Config
include_once 'config/config.php';

//Controllers
include_once 'Controllers/LogoutController.php';
include_once 'Controllers/ConnectionController.php';
include_once 'Controllers/DashboardController.php';
include_once 'Controllers/LoginController.php';
include_once 'Controllers/Error404Controller.php';
include_once 'Controllers/AlunoController.php';

//Models
include_once 'Models/LoginModel.php';
include_once 'Models/AlunoModel.php';
include_once 'Models/DashboardModel.php';



$controller     = $arr_url[0];
$metodo         = $arr_url[1];
$parametro      = $arr_url[2];

$index = new Core();
$index->index($controller, $metodo, $parametro);

if(isset($_POST)){
    // var_dump($_POST);
    
    $email = trim(filter_input(INPUT_POST,'email',FILTER_DEFAULT));
    $senha = trim(filter_input(INPUT_POST,'senha',FILTER_DEFAULT));

    if(!empty($email) && !empty($senha)){

        $index = new LoginController();

        if($index->logarAluno($email, $senha) == 1){
            header("Location: " . DOMINIO . "/dashboard");
        }else{
            header('Location: ' . DOMINIO);
           
        }  

    }else{
    // header('Location: ' . DOMINIO);
        
    }
       
}else{
    header('Location: ' . DOMINIO);
}



