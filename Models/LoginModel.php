<?php
  session_start();
class LoginModel extends ConnectionController
{
    public object $conn;

    public function logarAluno($email, $senha){
       
        $this->conn = $this->connectDb();

        $sql = "SELECT * FROM `usuario` WHERE `email` = '$email' AND `senha` = md5('$senha') AND `situacao_id` = 1 AND `nivelAcesso_id` = 3";
        
        $sql_query = $this->conn->prepare($sql);
        $sql_query->execute();
        $sql_dados = $sql_query->fetchAll();

        $_SESSION['dados'] = $sql_dados['0'];
               
        $rowCount = count($sql_dados);

        if($rowCount == 0){
            $msg = '<p style="text-align:center;color:red;background-color:#fcde00;margin: 0px 0px 10px 15px;padding: 10px 0px;"> dados incorretos! </P>';
            $_SESSION['msg'] = $msg;
        }
      
        return $rowCount;

        die();
    }

    public function cadastrarAluno($nome, $dataNascimento, $cpf, $email, $senha){
       
        $this->conn = $this->connectDb();

        $sql = "";
        
        $sql_query = $this->conn->prepare($sql);
        $sql_query->execute();
        $sql_dados = $sql_query->fetchAll();

              
        $rowCount = count($sql_dados);

        if($rowCount == 0){
            $msg = '<p style="text-align:center;color:red;background-color:#fcde00;margin: 0px 0px 10px 15px;padding: 10px 0px;"> Aluno não cadastrado </P>';
            $_SESSION['msg'] = $msg;
        }else{
            $msg = '<p style="text-align:center;color:red;background-color:#fcde00;margin: 0px 0px 10px 15px;padding: 10px 0px;"> Aluno cadastrado com Sucesso </P>';
            $_SESSION['msg'] = $msg;
        }
      
        return $rowCount;

        die();
    }
    

    
}