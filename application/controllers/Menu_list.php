<?php

class Menu_list extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $config = array(
        'appId' => '1544967735795515',
        'secret' => '9872de7c005099a0cee17330ada3270c');
 
        $facebook = new Facebook($config);
        $user = $facebook->getUser();

        
        
        
       
	$this->smarty->assign("message", $user);
        $this->view('menu_list.html');
    }
}