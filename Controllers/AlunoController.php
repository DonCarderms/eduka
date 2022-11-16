<?php 

class AlunoController {
  
    public function edit($dadosedit){
        $edit = new AlunoModel();
        $edit->edit($dadosedit);
    }

}

