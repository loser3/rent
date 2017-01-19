<?php
class Sample extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

	$this->smarty->assign("Name", "肉屋");
	$this->smarty->assign("Fruits", array("豚", "牛", "馬"));
	
//	$rss = simplexml_load_file('http://on-ze.com/feed');
	$rss = simplexml_load_file('http://news020.blog13.fc2.com/?xml');

	foreach($rss->item as $item){
		$title[]       = $item->title;
		//$date        = date("Y年 n月 j日", strtotime($item->pubDate));
		//$link        = $item->link;
		// $description = mb_strimwidth (strip_tags($item->description), 0 , 110, "…Read More", "utf-8");

 	}
		$this->smarty->assign("title", $title);
        $this->view('body.html');
    }

    public function my_action(){
    
	$this->smarty->assign("Name", "果物屋");
	$this->smarty->assign("Fruits", array("みかん", "りんご", "バナナ"));    
        $this->view('my_action2.tpl');
    }
}