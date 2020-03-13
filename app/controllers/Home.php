<?php

class Home extends Controller {
    public function index($arg1 = '', $arg2 = '') {
		$this->layout = "index";
		$this->view('home');
	}

}
