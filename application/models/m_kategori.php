<?php 

	/**
	 * 
	 */
	class m_kategori extends CI_Model
	{
		
		public function tampilKategori()
		{
			return $hsl=$this->db->get("tb_kategori")->result_array();
		}
	}

 ?>