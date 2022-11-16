<?php
  session_start();

if(!defined('DFFG574554FD')){
    header("Location: /");
}else{
    $url = explode("/",filter_input(INPUT_GET,'url',FILTER_DEFAULT));
    $dados = new AlunoController();
        
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eduka</title>
        <link rel="stylesheet" href="<?= DOMINIO ?>/assets/css/style.css">
        <link rel="stylesheet" href="<?= DOMINIO ?>//assets/css/font-awesome.min.css"/>

    </head>
    <body class="d-flex">
    <nav class=" d-flex align-items-center flex_column nav-principal-vertical" id="nav-bar" onmouseover="showUlText();" onmouseout="removeULText();">
                    <span class="close-menu cm-1"></span>
                    <span class="close-menu cm-2"></span>
                    <div class="w-100 menu-hamburger d-flex flex_column mt-10">
                        <i id="fa-mh" class="fa fa-2x fa-bars " aria-hidden="true"></i>
                        <span class="menu-hamburger-span"></span>
                        <span class="menu-hamburger-span"></span>
                        <span class="menu-hamburger-span"></span>
                    </div>
                    <div class="w-100 div-ul">
                        <ul class="nav-ul active">
                            <li class="nav-ul-li">
                            <a class="link nav-ul-link d-flex" href="<?= DOMINIO ?>/aluno">
                                <span class="nav-ul-link-icon mt-10">
                                    <i class="color_light fa fa-user-circle fa-2x" aria-hidden="true"></i>                      
                                </span>
                                <span class="nav-text" id="nav-text">
                                   Minha conta
                                </span> 
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-ul">
                            <li class="nav-ul-li">
                            <a class="link nav-ul-link d-flex" href="#">
                                <span class="nav-ul-link-icon mt-10">
                                     <i class="color_light fa fa-graduation-cap fa-2x" aria-hidden="true"></i>                 
                                </span>
                                <span class="nav-text" id="nav-text">
                                   Aulas
                                </span> 
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-ul">
                            <li class="nav-ul-li">
                            <a class="link nav-ul-link d-flex" href="#">
                                <span class="nav-ul-link-icon mt-10">
                                    <i class="color_light fa fa-question-circle fa-2x" aria-hidden="true"></i>                                                                     
                                </span>
                                <span class="nav-text" id="nav-text">
                                   Ajuda
                                </span> 
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-ul">
                            <li class="nav-ul-li">
                            <a class="link nav-ul-link d-flex" href="../">
                                <span class="nav-ul-link-icon">
                                    <i class="color_light fa  fa-sign-out fa-2x" aria-hidden="true"></i>                      
                                </span>
                                <span class="nav-text" id="nav-text">sair</span> 
                            </a>
                            </li>
                        </ul>
                                
                    </div>
                    <span class="link-lidbn">
                        <a class="link nav-text link-don" target="_blank" href="https://www.linkedin.com/in/doncarderms/">Desenvolvida por Doncarderms</a>
                    </span>
                    
            </nav>

            <main class="w-100 d-flex flex_column_reverse align-items-center align-content-center justify-content-space-around">
                    <div class="">
                    
                    </div>
                    
                    <div class="conteudo-aluno w-100 t-center">                
                        <?php     
                            if(isset($_SESSION['aluno'] )){
                                $aluno = $_SESSION['aluno'];                                
                            } 
                            
                            if(isset($_SESSION['dados'] )){
                                $dados = $_SESSION['dados'];                                
                            } 
                                    
                             $arr_url = explode("?",$_SERVER['REQUEST_URI']);
                            $arr_dados_prod = explode("&",$arr_url[1]);

                            ?>
                                <p href="">Nome:   <?= $aluno[0]  ?></p>
              
                                <p href="">Curso:   <?= $aluno[1]  ?></p>
     
                                <p href="">Turma:   <?= $aluno[2]  ?></p>
 
                                <p href="">Código da turma:   <?= $aluno[3]  ?></p>
                           
                                <p href="">email:   <?= $aluno[4]  ?></p>
                           
                                <p href="">Cpf:   <?= $aluno[5]  ?></p>
                           
                                <p href="">Data de nascimento:   <?= $aluno[6]  ?></p>
                           
                                <p href="">Endereço : rua    <?= $aluno[7]  ?>n °<?= $aluno[8]?></p>  
                           
                                <a class="link" href="<?= DOMINIO ?>/aluno/editar?id=<?= $dados['id'] ?>&editar=true">Editar meus dados</a>     

                            <?php
                            
                            if($arr_dados_prod[1] == "editar=true"){
                                include_once '/var/www/html/Views/editarAluno.php';                             
                            }

                 ?>    
                                   
                </div>
            
            </main>
                
    </body>
    </html>
  <?php
}
