<?php  
	class Article extends CI_Model
	{
		function get_article_list($num=20, $start=0)
		{
			$this->db->select('title, DATE_FORMAT(tbl_cyberits_t_article.created,\'%d %b %y\') AS created ,username ,view ,LEFT(content, \'100\') AS content ,AVG(rating) as rating_per_article')->from('tbl_cyberits_t_article')->join('tbl_cyberits_m_user', 'tbl_cyberits_m_user.user_ID = tbl_cyberits_t_article.author_ID')->join('tbl_cyberits_t_comment','tbl_cyberits_t_comment.article_ID = tbl_cyberits_t_article.article_ID' )->order_by('tbl_cyberits_t_article.created','desc')->group_by('tbl_cyberits_t_article.article_ID')->limit($num,$start);
			$query=$this->db->get();
			return $query->result_array();
		}
	}
?>