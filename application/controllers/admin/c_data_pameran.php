<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	 * 
	 */
	class c_data_pameran extends CI_Controller
	{
		public function __construct()
		{
			parent:: __construct();
			$this->load->model('m_data_pameran');
			$this->load->model('m_data_kota');
			$this->load->model('m_kotaa');
		}


		public function index()
		{
			$data['pameran'] = $this->m_data_pameran->tampil_pameran();
			$data['kota'] =$this->m_data_kota->tampil_kota();
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
			$this->load->view('admin/v_admin', $data);
			$this->load->view('admin/v_footer');
		}
		public function data_pameran()
	{
		$data = array(
		'kondisi'=> '0',
		'pameran' => $this->m_data_pameran->tampil_pameran(),
		'kota' =>$this->m_data_kota->tampil_kota());
		$this->load->view('admin/v_data_pameran.php', $data);
	}

	public function tambah_pameran()
	{
		$data['kota'] = $this ->m_kotaa->tampilKota();
		$data['relasi'] = $this->m_data_pameran->sqlQuery('
		SELECT a.id_pameran , b.kota 
		FROM tb_pameran as a INNER JOIN tb_kota as b 
		ON a.id_kota = b.id_kota
		');
	    $this->form_validation->set_rules('nama_pameran', 'nama_pameran', 'required');
	    $this->form_validation->set_rules('tanggal_pameran', 'tanggal_pameran', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
			$this->load->view('admin/v_row');
			$this->load->view('admin/v_tambah_pameran.php',$data);
			$this->load->view('admin/v_footer');
		} else {
			$nama_pameran=$this->input->post('nama_pameran');
			$tanggal_pameran=$this->input->post('tanggal_pameran');
			$this->m_data_pameran->simpan_pameran($nama_pameran,$tanggal_pameran);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/c_data_pameran/data_pameran');
		}
	}

	public function edit_pameran($id)
  {
  		$data['pameran']=$this->m_kotaa->tampilKota();
	  $data['admin'] = $this->m_data_pameran->tampil_pameran_by_id($id);
	  $this->form_validation->set_rules('id_pameran', 'id_pameran', 'required');
	  $this->form_validation->set_rules('nama_pameran', 'nama_pameran', 'required');
	  $this->form_validation->set_rules('alamat', 'nama_pameran', 'required');
	  $this->form_validation->set_rules('tanggal_pameran', 'tanggal_pameran', 'required');
	  if ($this->form_validation->run() == false) {
	      $this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
			$this->load->view('admin/v_row');
	      $this->load->view('admin/v_edit_pameran.php', $data);
	  } else {
			$id_pameran=$this->input->post('id_pameran');
			$nama_pameran=$this->input->post('nama_pameran');
			$alamat=$this->input->post('alamat');
			$tanggal_pameran=$this->input->post('tanggal_pameran');
      $this->m_data_pameran->update_pameran();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('admin/c_data_pameran/data_pameran');
	  }
  }
  public function hapus_pameran($id)
  {
    $this->m_data_pameran->hapus_pameran($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/c_data_pameran/data_pameran');
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
		$data["pameran"] = $this->m_data_pameran->tampil_pameran('tb_pameran','id_pameran');
		$data['ket'] = $this->m_data_pameran->where_kota($where,'tb_kota')->result_array();
	}
	else
	{
		$data["pameran"] = $this->m_data_pameran->where_kota($where,'tb_pameran')->result_array();
		$data['ket'] = $this->m_data_pameran->where_kota($where,'tb_kota')->result_array();
	}

	$this->load->view('admin/v_report_pameran.php', $data);

	$paper_size ='A4';
	$orientation ='potrait';
	$html = $this->output->get_output();
	$this->dompdf->set_paper($paper_size,$orientation);

	$this->dompdf->load_html($html);
	$this->dompdf->render();
	$this->dompdf->stream("print.pdf", array('Attachment' =>0 ));
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
		$data["pameran"] = $this->m_data_pameran->tampil_pameran('tb_pameran','id_pameran');
	}
	else
	{
		$data["pameran"] = $this->m_data_pameran->where_kota($where,'tb_pameran')->result_array();
	}

	$this->load->view('admin/v_data_pameran.php', $data);

  }
}
?>