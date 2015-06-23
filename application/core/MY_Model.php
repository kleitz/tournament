<?php
class MY_Model extends CI_Model {
	
	public function get_all () {
		$query = $this->db->get($this->_table_name)->result();
		return $query;
	}
}
