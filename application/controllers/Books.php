<?php

class Books extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }
     public function retriveData($id)
    {
        $this->db->select('*');
        $this->db->where(array('id'=>$id));
        $book['data'] =$this->db->get('books')->row();
        $this->load->view('json',$book);
    }

}