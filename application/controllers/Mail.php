<?php

class Mail extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

	$this->smarty->assign("Name", "肉屋");
	$this->smarty->assign("Fruits", array("豚", "牛", "馬"));
	
//	$rss = simplexml_load_file('http://on-ze.com/feed');
//	$rss = simplexml_load_file('http://news020.blog13.fc2.com/?xml');
//
//	foreach($rss->item as $item){
//		$title[]       = $item->title;
//		//$date        = date("Y年 n月 j日", strtotime($item->pubDate));
//		//$link        = $item->link;
//		// $description = mb_strimwidth (strip_tags($item->description), 0 , 110, "…Read More", "utf-8");
//
// 	}
	$this->smarty->assign("message", "");    
        $this->smarty->assign("email", "ABC");
        $this->view('mail.html');
    }

    public function send(){
        
    // チェック
    $message = chkMailAddress($_POST["email"]);
	$this->smarty->assign("message", $message);    
	$this->smarty->assign("email", "test");
        $this->view('mail.html');
    }
}