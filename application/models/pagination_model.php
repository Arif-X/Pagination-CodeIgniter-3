<?php

class pagination_model extends CI_Model {

	private $table = 'misuh';

	public function paginate($limit, $start){
		$query = $this->db->get('misuh', $limit, $start);
		return $query;
	}
}