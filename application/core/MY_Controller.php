<?php
require_once 'common/rent_common.php';
class My_Controller extends CI_Controller {
    protected $template;

    public function __construct()
    {
        parent::__construct();
        $this->smarty->template_dir = APPPATH . 'views/templates';
        $this->smarty->compile_dir  = APPPATH . 'views/templates_c';
        $this->template = 'layout.tpl';
    }

    public function view($template)
    {
        $this->template = $template;
    }

    public function _output($output)
    {
        if (strlen($output) > 0) {
            echo $output;
        } else {
            $this->smarty->display($this->template); 
        }
    }
}