<?php

class Controller {
	public $layout = '';

    public function model($model) {
        require_once dirname(dirname(__FILE__)) .'app/models/' . $model . '.php';
        return new $model;
    }

    public function layout($layout, $data = array()) {
        extract($data);
		//$content_for_layout = dirname(dirname(__FILE__)).'/views/home/home.php';
        //require_once dirname(dirname(__FILE__)) . '/views/layouts/'. $layout . '.php';
    }

    public function view($view, $data = array()) {
        extract($data);
        return $content_for_layout = '/views/'. $view . '.php';
    }

    public function element($element, $data = array()) {
        extract($data);
        require_once dirname(dirname(__FILE__)) . '/views/elements/'. $element . '.php';
    }

}
