<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Prodi_model');
  }
  public function index()
  {
    $data['judul'] = "Halaman Prodi";
    $data['prodi'] = $this->Prodi_model->get();
    $this->load->view("layout/header");
    $this->load->view("prodi/vw_prodi", $data);
    $this->load->view("layout/footer");
  }
  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Prodi";
    $this->load->view("layout/header");
    $this->load->view("prodi/vw_tambah_prodi", $data);
    $this->load->view("layout/footer");
  }
  public function hapus($id)
    {
        $this->prodi_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
          fas fa-info-circle"></i>Data Prodi Tidak Dapat dihapus(sudah selesai)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-succes"role="alert"><i
            class="icon fas fa-check-circle"></i>Data Prodi Berhasil Dihapus!</div>');
        }
        redirect('Prodi');
    }
  public function upload()
  {
    $data = [
      'nama' => $this->input->POST('nama'),
      'ruangan' => $this->input->POST('ruangan'),
      'jurusan' => $this->input->POST('jurusan'),
      'akreditasi' => $this->input->POST('akreditasi'),
      'nama_kaprodi' => $this->input->POST('nama_kaprodi'),
      'tahun_berdiri' => $this->input->POST('tahun_berdiri'),
      'output_lulusan' => $this->input->POST('output_lulusan'),
    ];
    $this->Prodi_model->insert($data);
    redirect('Prodi');
  }
  public function edit($id)
  {
    $data['judul'] = "Halaman Edit Prodi";
    $data['prodi'] = $this->Prodi_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_ubah_prodi", $data);
    $this->load->view("layout/footer");
  }
  public function update()
  {
    $data = [
      'nama' => $this->input->POST('nama'),
      'ruangan' => $this->input->POST('ruangan'),
      'jurusan' => $this->input->POST('jurusan'),
      'akreditasi' => $this->input->POST('akreditasi'),
      'nama_kaprodi' => $this->input->POST('nama_kaprodi'),
      'tahun_berdiri' => $this->input->POST('tahun_berdiri'),
      'output_lulusan' => $this->input->POST('output_lulusan'),
    ];
    $id = $this->input->POST('id');
    $this->Prodi_model->update(['Id' => $id], $data);
    redirect("prodi");
  }
}
