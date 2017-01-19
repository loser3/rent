<?php

class Logon extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

	$this->smarty->assign("message", "");
        $this->view('logon.html');
    }
}