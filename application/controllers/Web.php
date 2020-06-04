<?php 

class Web  extends CI_Controller 
{
    public function __construct(){
        parent::__construct();

    }

    public function index()
    {

        $this->load->view('web/template');
    }
    
}
