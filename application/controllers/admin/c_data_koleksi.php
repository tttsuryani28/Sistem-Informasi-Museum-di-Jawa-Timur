<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	 * 
	 */
	class c_data_koleksi extends CI_Controller
	{
		public function __construct()
		{
			parent:: __construct();
			$this->load->model('m_data_koleksi');
			$this->load->model('m_data_museum');
			$this->load->model('m_kategori');
		}


		public function index()
		{
			$data['data'] = $this->m_data_koleksi->tampil_koleksi();
			$data['kategori'] =$this->m_kategori->tampilKategori();
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
			$this->load->view('admin/v_admin', $data);
			$this->load->view('admin/v_footer');
		}
	public function data_koleksi()
	{
		$data = array(
		'kondisi'=> '0',
		'koleksi' => $this->m_data_koleksi->tampil_koleksi(),
		'kategori' => $this->m_kategori->tampilKategori());
		$this->load->view('admin/v_data_koleksi.php', $data);
	}

	public function tambah_koleksi()
	{
		$data['museum'] = $this->m_data_museum->tampil_museum();
		$data['kategori'] = $this->m_kategori->tampilKategori();

		// $data['relasi'] = $this->m_data_koleksi->sqlQuery('
		// 	SELECT a.id_benda , b.kategori 
		// 	FROM tb_koleksi as a INNER JOIN tb_kategori as b 
		// 	ON a.id_kategori = b.id_kategori
		// 	');

	    $this->form_validation->set_rules('nama', 'nama', 'required');
	    $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
	    $this->form_validation->set_rules('tanggal_masuk', 'tanggal_masuk', 'required');
		if ($this->form_validation->run() == false) 
		{
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
			$this->load->view('admin/v_row');
			$this->load->view('admin/v_tambah_koleksi.php',$data);
			$this->load->view('admin/v_footer');
		} 
		else 
		{
			$nama=$this->input->post('nama');
			$deskripsi=$this->input->post('deskripsi');
			$tanggal_masuk=$this->input->post('tanggal_masuk');
			$this->m_data_koleksi->simpan_koleksi($nama,$deskripsi,$tanggal_masuk);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/c_data_koleksi/data_koleksi');
		}
	}
	public function edit_koleksi($id)
  {
  		$data['kategori'] = $this ->m_kategori->tampilKategori();
	  	$data['admin'] = $this->m_data_koleksi->tampil_koleksi_by_id($id);
	  $this->form_validation->set_rules('id_benda', 'id_benda', 'required');
	  $this->form_validation->set_rules('nama', 'nama', 'required');
	  $this->form_validation->set_rules('kategori', 'kategori', 'required');
	  $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
	  if ($this->form_validation->run() == false) {
	      $this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
			$this->load->view('admin/v_row');
	      $this->load->view('admin/v_edit_koleksi.php', $data);
	  } else {
			$id_benda=$this->input->post('id_benda');
			$nama=$this->input->post('nama');
			$kategori=$this->input->post('kategori');
			$deskripsi=$this->input->post('deskripsi');
			$tanggal_masuk=$this->input->post('tanggal_masuk');
      $this->m_data_koleksi->update_koleksi();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('admin/c_data_koleksi/data_koleksi');
	  }
  }
  public function hapus_koleksi($id)
  {
    $this->m_data_koleksi->hapus_koleksi($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/c_data_koleksi/data_koleksi');
  }

	public function getkategori($id)
  	{
	$where = array('id_kategori'=> $id);
	$data = array(
		'kondisi'=>$id,
		'kategori'=> $this->m_kategori->tampilKategori('tb_kategori','id_kategori')
	);

	if ($id=='0')
	{
		$data["koleksi"] = $this->m_data_koleksi->tampil_koleksi('tb_koleksi','id_benda');
	}
	else
	{
		$data['ket'] = $this->m_data_koleksi->where_kategori($where,'tb_kategori')->result_array();
		$data['koleksi'] = $this->m_data_koleksi->where_kategori($where,'tb_koleksi')->result_array();
	}
	$this->load->view('admin/v_data_koleksi.php', $data);
  }


public function pdf($id)
{
	$this->load->library('dompdf_gen');
	$where = array('id_kategori'=> $id);
	$data = array(
		'kategori'=> $this->m_kategori->tampilKategori('tb_kategori','id_kategori')
	);

	if ($id=='0')
	{
		$data["koleksi"] = $this->m_data_koleksi->tampil_koleksi('tb_koleksi','id_benda');
		$data['ket'] = $this->m_data_koleksi->where_kategori($where,'tb_kategori')->result_array();

	}
	else
	{
		$data['koleksi'] = $this->m_data_koleksi->where_kategori($where,'tb_koleksi')->result_array();
		$data['ket'] = $this->m_data_koleksi->where_kategori($where,'tb_kategori')->result_array();
	}

	$this->load->view('admin/v_report_koleksi.php', $data);

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