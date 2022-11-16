<?php 
class LogoutController 
{
    public function sair(){

        unset($_SESSION);
        header("Location: /");

    }   
}