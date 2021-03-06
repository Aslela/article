<?php  
    /*
    ===================================================================================
    Created By              Satria W Sandi                  on 18.14
    Model                   Article_Model                   for tbl_cyberits_t_articles
    ===================================================================================
    functions :
    1. getArticleList       Mendapatkan daftar artikel dengan paging
    2. getArticleDetail     Mendapatkan detail untuk suatu artikel tertentu
    3. getArticleComments   Mendapatkan daftar komentar pada suatu artikel tertentu
    */
	
	 /*
    ===================================================================================
    Created By         Vicky                  on 20/06/2015
    Model              Article_Model    	
    ===================================================================================
    functions :
    1. insertComment       Memasukan komentar baru
    */
	
	
	class Article_Model extends CI_Model
	{
		function getArticleList($num=20, $start=0)
		{

			$this->db->select('tbl_cyberits_t_articles.articleID as articleID, title, DATE_FORMAT(tbl_cyberits_t_articles.created,\'%d %M %Y\') AS created ,username ,view ,LEFT(content, \'100\') AS content ,AVG(rating) as ratingPerArticle, categoryImgLink');
            $this->db->from('tbl_cyberits_t_articles');
            $this->db->join('tbl_cyberits_m_users', 'tbl_cyberits_m_users.userID = tbl_cyberits_t_articles.authorID');
            $this->db->join('tbl_cyberits_t_comments','tbl_cyberits_t_comments.articleID = tbl_cyberits_t_articles.articleID','left' );
            $this->db->join('tbl_cyberits_m_categories', 'tbl_cyberits_m_categories.categoryID = tbl_cyberits_t_articles.categoryID' );
            $this->db->where('tbl_cyberits_t_articles.isActive', true);
            $this->db->order_by('tbl_cyberits_t_articles.created','desc');
            $this->db->group_by('tbl_cyberits_t_articles.articleID');
            $this->db->limit($num,$start);
			$query=$this->db->get();
			return $query->result_array();
		}

		function getArticleDetail($articleID)
		{
			$this->db->select('tbl_cyberits_t_articles.articleID as articleID,title, DATE_FORMAT(tbl_cyberits_t_articles.created,\'%d %M %Y\') AS created ,username ,view ,content ,AVG(rating) as ratingPerArticle, articleImgLink, userImgLink');
            $this->db->from('tbl_cyberits_t_articles');
            $this->db->join('tbl_cyberits_m_users', 'tbl_cyberits_m_users.userID = tbl_cyberits_t_articles.authorID');
            $this->db->join('tbl_cyberits_t_comments','tbl_cyberits_t_comments.articleID = tbl_cyberits_t_articles.articleID','left' );
            $this->db->where(array('tbl_cyberits_t_articles.isActive'=> true,'tbl_cyberits_t_articles.articleID'=>$articleID));
            $this->db->order_by('tbl_cyberits_t_articles.created','desc');
            $this->db->group_by('tbl_cyberits_t_articles.articleID');
			$query=$this->db->get();
			return $query->result_array();
		}

		function getArticleComments($num=20, $start=0, $articleID)
		{
			$this->db->select('DATE_FORMAT(tbl_cyberits_t_comments.created,\'%d %M %Y\') AS created, name, rating, comment');
            $this->db->from('tbl_cyberits_t_comments');
            $this->db->join('tbl_cyberits_t_articles', 'tbl_cyberits_t_articles.articleID = tbl_cyberits_t_comments.articleID');
            $this->db->where(array('tbl_cyberits_t_articles.isActive'=> true,'tbl_cyberits_t_articles.articleID'=>$articleID));
            $this->db->order_by('tbl_cyberits_t_comments.created');
            $this->db->limit($num,$start);
			$query=$this->db->get();
			return $query->result_array();
		}
		
		function insertComment($data)
		{
			$this->db->insert('tbl_cyberits_t_comments',$data);
			$result=$this->db->affected_rows();
            return $result;
		}
	}
?>