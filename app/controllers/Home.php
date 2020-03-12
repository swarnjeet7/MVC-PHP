<?php

class Home extends Controller {
    public function index($arg1 = '', $arg2 = '') {

        $this->view('home/home');
        $this->layout("index");
    }
}