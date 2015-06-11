<?php  
	class User extends CI_Model
	{
		function login($username,$password)
		{
			$where=array(
				'username'=>$username,
				'password'=>sha1($password)
			);
			$this->db->select()->from('tbl_cyberits_m_user')->where($where);
			$query=$this->db->get();
			return $query->first_row('array');
		}

		function get_tag_list()
		{
			$this->db->select('tag_ID,tag')->from('tbl_cyberits_t_tag');
			$query=$this->db->get();
			return $query->result_array();
		}

		function get_category_list()
		{
			$this->db->select('category_ID,category')->from('tbl_cyberits_m_category');
			$query=$this->db->get();
			return $query->result_array();
		}

		function insert_article($data)
		{
			$this->db->insert('tbl_cyberits_t_article',$data);
			return $this->db->insert_id();
		}
	}
?>