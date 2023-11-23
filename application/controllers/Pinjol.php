<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pinjol extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pinjol_model');
  }
  public function index()
  {
    $data['judul'] = "Halaman Pinjaman";
    $data['pinjaman'] = $this->Pinjol_model->get();
    $this->load->view("layout/header");
    $this->load->view("pinjol/vw_pinjol", $data);
    $this->load->view("layout/footer");
  }
  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Pinjaman";
    $data['pinjaman'] = $this->Pinjol_model->get();
    $this->load->view("layout/header");
    $this->load->view("pinjol/vw_tambah_pinjol", $data);
    $this->load->view("layout/footer");
  }
  public function detail()
  {
    $data['judul'] = "Halaman Detail Pinjaman";
    $this->load->view("layout/header");
    $this->load->view("pinjol/vw_detail_pinjol", $data);
    $this->load->view("layout/footer");
  }
  public function hapus($id)
  {
    $this->Pinjol_model->delete($id);
    redirect('pinjaman');
  }
  function upload ()
  {
    $data = [
        'NIK' => $this->input->POST('NIK'),
        'Nama_Lengkap' => $this->input->POST('Nama_Lengkap'),
        'Alamat' => $this->input->POST('Alamat'),
        'No_Telpon' => $this->input->POST('No_Telpon'),
        'email' => $this->input->POST('email'),
        'Besar_pinjaman' => $this->input->POST('Besar_Pinjaman'),
        'Durasi' => $this->input->POST('Durasi'),
    ];
    $this->Pinjol_model->insert($data);
    redirect('Pinjol');
}
}