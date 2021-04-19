<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	 * 
	 */
	class c_data_museum extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('m_data_museum');
			$this->load->model('m_data_kota');
			$this->load->model('m_kotaa');
		}

		public function index()
		{
			$data['museum'] = $this->m_data_museum->tampil_museum();
			$data['kota'] =$this->m_data_kota->tampil_kota();
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
			$this->load->view('admin/v_admin', $data);
			$this->load->view('admin/v_footer');
		}
		public function data_museum()
	{
		$data = array(
		'kondisi'=> '0',
		'kota'=> $this->m_data_kota->tampil_kota(),
		'museum' => $this->m_data_museum->tampil_museum()
		);
		
		$this->load->view('admin/v_data_museum.php', $data);
		
	}

	public function tambah_museum()
	{
	$data['kota'] = $this->m_kotaa->tampilKota();
	$data['relasi'] = $this->m_data_museum->sqlQuery('
	SELECT a.id_museum , b.kota 
	FROM tb_museum as a INNER JOIN tb_kota as b 
	ON a.id_kota = b.id_kota
		');
    $this->form_validation->set_rules('nama', 'nama', 'required');
    $this->form_validation->set_rules('alamat', 'alamat', 'required');
    $this->form_validation->set_rules('telepon', 'telepon', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
			$this->load->view('admin/v_row');
			$this->load->view('admin/v_tambah_museum.php',$data);
			$this->load->view('admin/v_footer');
		} else {
			$nama=$this->input->post('nama');
			$kota=$this->input->post('kota');
			$alamat=$this->input->post('alamat');
			$telepon=$this->input->post('telepon');
			$this->m_data_museum->simpan_museum($nama,$kota,$alamat,$telepon);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/c_data_museum/data_museum');
		}

	}

	public function edit_museum($id)
  {
	  $data['kota']=$this->m_kotaa->tampilKota();
	  $data['admin'] = $this->m_data_museum->tampil_museum_by_id($id);
	  $this->form_validation->set_rules('id_museum', 'id_museum', 'required');
	  $this->form_validation->set_rules('nama', 'nama', 'required');
	  $this->form_validation->set_rules('alamat', 'alamat', 'required');
	  $this->form_validation->set_rules('telepon', 'telepon', 'required');

	  if ($this->form_validation->run() == false) {
	  		$this->load->view('admin/v_header');
	  		$this->load->view('admin/v_sidebar'); 
			$this->load->view('admin/v_row');
			$this->load->view('admin/v_edit_museum.php', $data);
			 
	  } else {
	  		$id_museum=$this->input->post('id_museum');
			$nama=$this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$telepon=$this->input->post('telepon');
      $this->m_data_museum->update_museum();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('admin/c_data_museum/data_museum');
	  }
  }

  public function hapus_museum($id)
  {
    $this->m_data_museum->hapus_museum($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/c_data_museum/data_museum');
  }

 public function getkota($id)
  {
	$where = array('id_kota'=> $id);

	$data = array(
		'kondisi'=>$id,
		'kota'=> $this->m_data_kota->tampil_kota('tb_kota','id_kota')
	);

	if ($id=='0')
	{
		$data["museum"] = $this->m_data_museum->tampil_museum('tb_museum','id_museum');
	}
	else
	{
		$data["museum"] = $this->m_data_museum->where_kota($where,'tb_museum')->result_array();
	}

	$this->load->view('admin/v_data_museum.php', $data);

  }

public function pdf($id)
  {
	$this->load->library('dompdf_gen');
	$where = array('id_kota'=> $id);
	$data = array(
		'kota'=> $this->m_data_kota->tampil_kota('tb_kota','id_kota')
	);

	if ($id=='0')
	{
		$data["museum"] = $this->m_data_museum->tampil_museum('tb_museum','id_museum');
		$data['ket'] = $this->m_data_museum->where_kota($where,'tb_kota')->result_array();

	}
	else
	{
		$data['museum'] = $this->m_data_museum->where_kota($where,'tb_museum')->result_array();
		$data['ket'] = $this->m_data_museum->where_kota($where,'tb_kota')->result_array();
	}

	$this->load->view('admin/v_report_museum.php', $data);

	$paper_size ='A4';
	$orientation ='potrait';
	$html = $this->output->get_output();
	$this->dompdf->set_paper($paper_size,$orientation);

	$this->dompdf->load_html($html);
	$this->dompdf->render();
	$this->dompdf->stream("print.pdf", array('Attachment' =>0 ));
  }

 
}
?>