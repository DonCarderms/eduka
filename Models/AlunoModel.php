<?php
session_start();
class AlunoModel extends ConnectionController {
    
    public object $conn;

    public function edit($dadosedit){
        $this->conn = $this->connectDb();
        // echo "chegou no editar aluno model </br>";
        if(isset($_SESSION['dados'] )){
            $dados = $_SESSION['dados'];                                
        } 
        $id_denreco = $dados['endereco_id'];
        $id = $dados[0];
        $nome = $dadosedit['nome'];
        $email = $dadosedit['email'];
        $senha = md5($dadosedit['senha']);
        $rua = $dadosedit['rua'];
        $numero = $dadosedit['numero'];

        if($dadosedit['senha'] != ""){
            // var_dump($dadosedit['senha']);
            $sql = "UPDATE `usuario` SET `nome` = '$nome', `email` = '$email', `senha` = '$senha'  WHERE `id` = $id";
              $sql_query = $this->conn->prepare($sql); 
              $sql_query->execute();
            }else{
                $sql = "UPDATE `usuario` SET `nome` = '$nome', `email` = '$email' WHERE `id` = $id";   
                $sql_query = $this->conn->prepare($sql); 
                $sql_query->execute();
        }
        $sql2 = "UPDATE `endereco` SET `logradouro` = '$rua', `numero` = '$numero' WHERE `endereco`.`id` = $id_denreco";
        
        $sql_query = $this->conn->prepare($sql2);
        

        // var_dump($sql);
    
        if($sql_query->execute()){
            echo  "<p style='text-align:center;color:red;background-color:#fcde00;margin: 0px 0px 10px 0px;padding: 10px 0px;'>Edição realizada com sucesso</p>";
            echo ' <a href="'. DOMINIO . '/dashboard">voltar</a>';    
        }else{
            echo "<p style='text-align:center;color:red;background-color:#fcde00;margin: 0px 0px 10px 0px;padding: 10px 0px;'>Edição não realizada</p>";
            echo ' <a class="link" href="'. DOMINIO . '/dashboard">voltar</a>';            
        }      
        die();
        
        
    }
}