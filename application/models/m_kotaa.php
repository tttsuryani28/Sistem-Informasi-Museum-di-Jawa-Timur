<?php 

	/**
	 * 
	 */
	class m_kotaa extends CI_Model
	{
		
		public function tampilKota()
		{
			return $hsl=$this->db->get("tb_kota")->result_array();
		}
	}

 ?>