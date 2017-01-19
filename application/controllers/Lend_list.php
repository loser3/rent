<?php

class Lend_list extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
       
	$this->smarty->assign("message", "");
        $this->view('lend_list.html');
    }
    public function regist(){
        
        // ファイル
        // ファイルアップロード
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';        
        $this->load->library('upload', $config);
        // 
        $entry_name = $this->input->post('entry_name');

        if ( ! $this->upload->do_upload("userfile"))
        {
            
            $message = "upload失敗";
            $message .= $this->upload->display_errors(' <p style="color:red;">', '</p>');
                // $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $message = "upload成功";
                $data = $this->upload->data();
                
        }        

        
        print_r($data);
        //$query =  $this->db->query('SELECT * FROM rental_list');
        
        
        if ($query === FALSE)
        {
            $message .= "データベースに接続されていません!";
        }
        else
        {
            $message .= "データベースに接続されています!";
            
            $this->db->select_max('rental_id','max_rental_id');
            $query = $this->db->get('rental_list');
            $result = $query->result('object');
                        
            $message .= $result[0]->max_rental_id;
            // 登録データの作成
            $this->load->model('Rental');
            $data = array(
                "rental_id" =>  $result[0]->max_rental_id + 1
                ,"rental_nm" => $entry_name
                ,"file_nm_01" => "a"
                ,"file_nm_02" => "b"
                ,"file_nm_03" => "c"
                ,"user_id" => 1000
                );
            $this->db->set('insert_date', 'NOW()', FALSE);
            $this->Rental->insertRentalList("rental_list" , $data);
            
        }
        // チェック
        
	$this->smarty->assign("message", $message);    
        $this->view('lend_list.html');
    }
}