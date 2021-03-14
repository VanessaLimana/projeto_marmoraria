<?php

class Usuarios extends Controller {

    public function cadastrar(){
        echo 'cadastrou o metodo';

        $this->view('usuarios/cadastrar');
    }
}