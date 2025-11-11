<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mymodel extends CI_Model {


// calling the data
	public function get_data()
	{
		// this query is running a single function to show data by injecting the select code to the php
		$query = $this->db->query('select * from t_mhs');
		return $query->result_array();
	}

	// inserting the data
	public function insertdata($table, $data)
	{
		$res = $this->db->insert($table, $data);
		return $res;
	}

	// updating the data
	public function updatedata($table, $data, $where)
	{
		$res = $this->db->update($table, $data, $where);
		return $res;
	}

	// deleting the data
	public function deletedata($table, $where)
	{
		$res = $this->db->delete($table, $where);
		return $res;
	}
}