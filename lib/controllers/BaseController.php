<?php

abstract class BaseController {

    protected $f3;
    protected $view;

    public function __construct($f3)
    {
        $this->f3 = $f3;
        $this->view = View::instance();
    }

	public function getView(){
    	return $this->view;
	}
}