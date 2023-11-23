<?php
defined('BASEPATH') or exit('No direct script access allowed');
class blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->load->view("hello_codeigniter");
    }
}
?>