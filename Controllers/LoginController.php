<?php

class LoginController 
{
    public function logarAluno($email, $senha){

        $aluno = new LoginModel();
        return $aluno->logarAluno($email,$senha);     

    }

    public function cadastrarAluno($nome, $dataNascimento, $cpf, $email, $senha){
        $newAluno  = new LoginModel();
        return  $newAluno->cadastrarAluno($nome,$cpf ,$dataNascimento , $email, $senha);
    }
}