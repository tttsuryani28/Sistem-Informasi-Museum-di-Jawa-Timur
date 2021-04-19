<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	 * 
	 */
	class c_data_kota extends CI_Controller
	{
		public function __construct()
		{
			parent:: __construct();
			$this->load->model('m_data_kota');
		}


		public function index()
		{
			$data['data'] = $this->m_data_kota->tampil_kota();
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
			$this->load->view('admin/v_admin', $data);
			$this->load->view('admin/v_footer');
		}
		public function data_kota()
	{
		$data['data'] = $this->m_data_kota->tampil_kota();
		$this->load->view('admin/v_data_kota.php', $data);
	}

	public function tambah_kota()
	{
	    // $this->form_validation->set_rules('no', 'no', 'required');
	    $this->form_validation->set_rules('kota', 'kota', 'required');
	    // $this->form_validation->set_rules('museum', 'museum', 'required');
	    // $this->form_validation->set_rules('alamat', 'alamat', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
			$this->load->view('admin/v_row');
			$this->load->view('admin/v_tambah_kota.php');
		} else {
			$kota=$this->input->post('kota');
			// $museum=$this->input->post('museum');
			// $alamat=$this->input->post('alamat');
			$this->m_data_kota->simpan_kota($id_kota,$kode,$kota);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/c_data_kota/data_kota');
		}
	}

	public function edit_kota($id)
  {
	  $data['admin'] = $this->m_data_kota->tampil_kota_by_id($id);
	  $this->form_validation->set_rules('id_kota', 'id_kota', 'required');
	  $this->form_validation->set_rules('kode','kode', 'required');
	  $this->form_validation->set_rules('kota','kota', 'required');
	  // $this->form_validation->set_rules('museum', 'museum', 'required');
	  // $this->form_validation->set_rules('alamat', 'alamat', 'required');
	  if (	$this->form_validation->run() == false) {
	      	$this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
			$this->load->view('admin/v_row');
	      	$this->load->view('admin/v_edit_kota.php', $data);
	  } else {
	  		$id_kota=$this->input->post('id_kota');
	  		$kode=$this->input->post('kode');
			$kota=$this->input->post('kota');
			// $museum=$this->input->post('museum');
			// $alamat=$this->input->post('alamat');
      $this->m_data_kota->update_kota();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('admin/c_data_kota/data_kota');
	  }
  }
  public function hapus_kota($id)
  {
    $this->m_data_kota->hapus_kota($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/c_data_kota/data_kota');
  }

}
?>