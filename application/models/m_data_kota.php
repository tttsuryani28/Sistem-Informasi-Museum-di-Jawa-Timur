<?php
	class m_data_kota extends CI_Model
	{
		public function tampil_kota()
		{
			return $hsl=$this->db->get("tb_kota")->result_array();
		}
		public function tampil_kota_by_id($id){
			return $hsl=$this->db->get_where("tb_kota",["id_kota" => $id])->row_array();
		}

		public function hapus_kota($id)
	    {
	        $this->db->delete('tb_kota', ['id_kota' => $id]);
	    }

		public function update_kota(){
			$data = [
			"kode" => $this->input->post('kode', true),
		    "kota" => $this->input->post('kota', true)

	    ];
		    $this->db->where('id_kota', $this->input->post('id'));
		    $this->db->update('tb_kota', $data);
		}

		public function simpan_kota(){
			$data = [
			"kode" => $this->input->post('kode', true),
		    "kota" => $this->input->post('kota', true)
	    ];
			$this->db->insert('tb_kota', $data);
		}

	}
?>