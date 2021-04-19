<?php
	class m_data_pameran extends CI_Model
	{
		public function tampil_pameran()
		{
			return $hsl=$this->db->get("tb_pameran")->result_array();
		}
		public function tampil_pameran_by_id($id){
			return $hsl=$this->db->get_where("tb_pameran",["id_pameran" => $id])->row_array();
		}

		public function hapus_pameran($id)
	    {
	        $this->db->delete('tb_pameran', ['id_pameran' => $id]);
	    }

		public function update_pameran(){
			$data = [
		    "nama_pameran" => $this->input->post('nama_pameran', true),
		    "kota" => $this->input->post('kota', true),
		    "alamat" => $this->input->post('alamat', true),
		    "tanggal_pameran" => $this->input->post('tanggal_pameran', true)
	    ];
	    $this->db->where('id_pameran', $this->input->post('id'));
	    $this->db->update('tb_pameran', $data);
		}

		public function simpan_pameran(){
			$data = [
		    "nama_pameran" => $this->input->post('nama_pameran', true),
		    "kota" => $this->input->post('kota', true),
		    "alamat" => $this->input->post('alamat', true),
		    "tanggal_pameran" => $this->input->post('tanggal_pameran', true)
	    ];
			$this->db->insert('tb_pameran', $data);
		}
				public function where_kota($where,$table)
		{
			return $this->db->get_where($table, $where);
		}

		public function sqlQuery($query)
		{
			return $this->db->query($query)->result();
		}

	}
?>