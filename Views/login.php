<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduka </title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main class="principal">
        <div class="">
            <div class="align_center">
                 <img src="<?= DOMINIO ?>/assets/images/logo.svg" alt="">
            </div>

            <div class="msg">
                    <?php
                        if(isset($_SESSION['msg'] )){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                    ?>
            </div>
           
            <form action="" method="POST" class="login" id="login" >
                <input type="email" name="email" placeholder="Email" required class="input-style width-100" ><br>

                <input type="password" name="senha"  placeholder="Senha" class="input-style width-100" ><br>
                <div class="align_center">
                    <button type="submit" class="button-style">Entrar</button>         
                </div>
                <div class="button-cadastrar align_center">
                    <p>ainda não é aluno </p>
                    <button onclick="showRegister()" type="button" class="button-style" id="button-cadastrar" >cadastrar-se</button>
                </div>
                
            </form>

            <form style="display:none;"  action="" method="POST" class="cadastrar" id="cadastrar" >
                <p style="color: azure;font-size: 20px;" class="align_center">Cadastro de Aluno</p>
                <input type="text" name="nome" placeholder="Nome"  class="input-style width-100"><br>

                <input type="text" name="cpf" placeholder="Digite seu cpf.. só numero!"  class="input-style width-100"><br>

                <input type="date" name="data-nascimento" placeholder="data de nascimento"  class="input-style width-100"><br>
       
                <input type="email" name="email" placeholder="Email"  class="input-style width-100" required ><br>
  
                <input type="password" name="senha" placeholder="Senha"  class="input-style width-100"><br>

                <div class="align_center">
                   <button type="submit" class="button-style">cadastrar</button> 
                </div> 
                <div class="align_center">
                    <button onclick="showLogin()" type="button" class="button-style">Fazer login</button>         
                </div>            
            </form>
        </div>
       
    </main>

    <script>
        // mostrar o formulario de cadastro
       let showRegister = () => {
            document.getElementById("login") .style.display = "none";
            document.getElementById("cadastrar") .style.display = "block";
        }
        // mostrar o formulario de login
        let showLogin = () => { 
            document.getElementById("cadastrar") .style.display = "none";
            document.getElementById("login") .style.display = "block";         
        }
    </script>
</body>
</html>