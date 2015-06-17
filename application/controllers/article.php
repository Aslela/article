<?php

class Article extends CI_Controller {
	
    function __construct(){
        parent::__construct();
        
        $this->load->helper(array('form', 'url'));
		$this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->library("pagination");
        
    }
    
	function index($start=1)
	{
		$this->load->model('article_model','article_model');
        $data['data_article'] = $this->article_model->getArticleList(null, null);
        
        $data['main_content'] = 'article_list_view';
        $data['data'] = null;
        $data['msg'] = null;
		$this->load->view('includes/template', $data);		
	}
    
    function getArticleDetail($id)
	{  
        $this->load->model('article_model','article_model');
        $data['data_article'] = $this->article_model->getArticleDetail($id);
        $data['data_comment'] = $this->article_model->getArticleComments(20,0,$id);
        $data['main_content'] = 'article_detail_view';
		$this->load->view('includes/template', $data);	
	}
	
}