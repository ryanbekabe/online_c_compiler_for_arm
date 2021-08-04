<?php 
class Daftarscmdl extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function tampilkan($varun_user)
	{

		//return $this->db->get('tb_sc');
		//return $this->db->get_where('tb_sc', array('un_user' => $varun_user), '10', '0');
		return $this->db->get_where('tb_sc', array('un_user' => $varun_user));
	}

}
?>