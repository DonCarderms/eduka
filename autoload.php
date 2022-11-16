<?php

spl_autoload_register(function($nome_arquivo)
{
    if(file_exists("Controllers/" . $nome_arquivo . ".php")){
        include_once 'Controllers/' . $nome_arquivo . '.php';
    }else if(file_exists("Models/" . $nome_arquivo . ".php")){
        include_once 'Models/' . $nome_arquivo . '.php';
    }else if(file_exists("core/" . $nome_arquivo . ".php")){
        include_once 'Core/' . $nome_arquivo . '.php';
    }
});