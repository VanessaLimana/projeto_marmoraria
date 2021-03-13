<?php

class Paginas extends Controller {

    public function index(){
        $this->view('paginas/home', ['titulo'=>'Página Inicial']);
    }
    public function sobre() {
        
    }

}