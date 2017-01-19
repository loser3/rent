<?php

class Mypage extends MY_Controller {
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

        $this->load->model('Rental');
        $data = $this->Rental->get_last_ten_entries();
        
        
        //$data = array(1000,1001,1002);
        
        $this->smarty->assign('custid',$data);
	$this->smarty->assign("message", $user);
        $this->view('mypage.html');
    }
}