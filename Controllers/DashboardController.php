<?php


class DashboardController{

    public function mostrarDadosAluno(){
        $dados = new DashboardModel();
        return $dados->mostrarDadosAluno();
    }
       
}