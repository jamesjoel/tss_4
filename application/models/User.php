<?php
class User extends CI_Model{

	function __construct()
	{
		parent :: __construct();
		$this->load->database();
		
	}


	function insert($data)
	{
		// INSERT INTO user () VALUES ()
		$this->db->insert("user", $data);
		//$this->db->update('user', $data);
	}
}


?>