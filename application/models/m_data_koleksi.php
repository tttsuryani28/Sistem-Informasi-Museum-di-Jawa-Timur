<?php
	class m_data_koleksi extends CI_Model
	{
		public function tampil_koleksi()
		{
			return $hsl=$this->db->get("tb_koleksi")->result_array();
		}
		public function tampil_koleksi_by_id($id){
			return $hsl=$this->db->get_where("tb_koleksi",["id_benda" => $id])->row_array();
		}

		public function hapus_koleksi($id)
	    {
	        $this->db->delete('tb_koleksi', ['id_benda' => $id]);
	    }

		public function update_koleksi(){
			$data = [
			"museum" => $this->input->post('museum', true),
		    "nama" => $this->input->post('nama', true),
		    "kategori" => $this->input->post('kategori', true),
		    "deskripsi" => $this->input->post('deskripsi', true),
		    "tanggal_masuk" => $this->input->post('tanggal_masuk', true)
	    ];
	    $this->db->where('id_benda', $this->input->post('id'));
	    $this->db->update('tb_koleksi', $data);
		}

		public function simpan_koleksi(){
			$data = [
		    "nama" => $this->input->post('nama', true),
		    "deskripsi" => $this->input->post('deskripsi', true),
		    "tanggal_masuk" => $this->input->post('tanggal_masuk', true)
	    ];
			$this->db->insert('tb_koleksi', $data);
		}

		public function where_kategori($where,$table)
		{
			return $this->db->get_where($table, $where);
		}

		public function sqlQuery($query)
		{
			return $this->db->query($query)->result();
		}

	}
?>