<?php
/**
 * @Author: Gertjan
 * @Date:   2016-03-30 11:38:58
 * @Last Modified by:   Gertjan
 * @Last Modified time: 2016-03-30 13:13:34
 */

	class home_model extends CI_Model{

		function __construct(){

			$this->load->database();
		}

		function getProductNames(){

			$query = $this->db->query('SELECT naam FROM products');

			if($query->num_rows() > 0){
				return $query->result();
			} else {
				return NULL;
			}
		}
	}