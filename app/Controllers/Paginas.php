<?php

class Paginas extends Controller {

    public function index(){
        $dados = [
            'tituloPagina' => 'Página Inicial'
        ];

        $this->view('pages/home', $dados);
    }

    public function sobre(){
        $dados = [
            'tituloPagina' => SITE_MARMORARIA
        ];

        $this->view('pages/sobre', $dados);
    }
    
}