<?php
	class m_data_museum extends CI_Model
	{
		public function tampil_museum()
		{
			return $hsl=$this->db->get("tb_museum")->result_array();
		}
		public function tampil_museum_by_id($id){
			return $hsl=$this->db->get_where("tb_museum",["id_museum" => $id])->row_array();
		}

		public function hapus_museum($id)
	    {
	        $this->db->delete('tb_museum', ['id_museum' => $id]);
	    }

		public function update_museum(){
			$data = [
			    "nama" => $this->input->post('nama', true),
			    "kota" => $this->input->post('kota', true),
			    "alamat" => $this->input->post('alamat', true),
			    "telepon" => $this->input->post('telepon', true)
	    ];
	    $this->db->where('id_museum', $this->input->post('id'));
	    $this->db->update('tb_museum', $data);
		}

		public function simpan_museum(){
			$data = [	
			    "nama" => $this->input->post('nama', true),
			    "kota" => $this->input->post('kota', true),
			    "alamat" => $this->input->post('alamat', true),
			    "telepon" => $this->input->post('telepon', true)
	    ];
			$this->db->insert('tb_museum', $data);
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