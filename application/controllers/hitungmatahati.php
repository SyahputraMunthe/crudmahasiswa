<?php
defined('BASEPATH') or exit('No direct script access allowed');

class hitungmatahati extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library('matahati');
  }
  function index()
  {
    $this->matahati->index('150000', 'anak', false, false);
    echo "<br/>";
    $this->matahati->index('350000', 'laki dewasa', false, false);
    echo "<br/>";
    $this->matahati->index('300000', 'laki dewasa', false, true);
    echo "<br/>";
    $this->matahati->index('90000', 'wanita dewasa', true, false);
    echo "<br/>";
    // $this->persegi->luas('10');
  }
}