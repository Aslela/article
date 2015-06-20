<?php

class Article extends CI_Controller {
	
	/*
    ===================================================================================
    Created By              Vicky                  on 20/06/2015
    Controller              Article_Controller    
    ===================================================================================
    functions :
    1. index                                Mendapatkan daftar artikel list
    2. getArticleDetail(param articleID)    Menampilkan artikel detail, serta memasukan komentar baru dengan malukan validasi server side
    3. insertComment                        Memasukan komentar baru melalui AJAX, validasi JS 
    */
	
    function __construct(){
        parent::__construct();
        
        $this->load->helper(array('form', 'url'));
		$this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->library("pagination");
        $this->load->model('article_model','article_model');
    }
    
	function index($start=1)
	{
		
        $data['data_article'] = $this->article_model->getArticleList(null, null);
        
        $data['main_content'] = 'article_list_view';
        $data['data'] = null;
        $data['msg'] = null;
		$this->load->view('includes/template', $data);		
	}
    
    function getArticleDetail($id)
	{  
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[4]|max_length[30]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('comment', 'Comment', 'required');
        $this->form_validation->set_rules('star-comment', 'Rating', 'required');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        // check for validation
        if ($this->form_validation->run() == FALSE) {
            $data['data_article'] = $this->article_model->getArticleDetail($id);
            $data['data_comment'] = $this->article_model->getArticleComments(20,0,$id);
            $data['main_content'] = 'article_detail_view';
    		$this->load->view('includes/template', $data);
        }else{
            $datetime = date('Y-m-d H:i:s', time());
            
            $insert_data_comment=array(
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'comment'=>$this->input->post('comment'),
            'rating'=>$this->input->post('star-comment'),
            'articleID'=>$this->input->post('article_id'),
            'isActive'=>1,
            'created'=>$datetime,
            "createdBy" => $this->input->post('name'),
			"lastUpdated"=>$datetime,
			"lastUpdatedBy"=>$this->input->post('name')
            );
            
            $this->article_model->insertComment($insert_data_comment);	
             
            $data['data_article'] = $this->article_model->getArticleDetail($id);
            $data['data_comment'] = $this->article_model->getArticleComments(20,0,$id);
            $data['main_content'] = 'article_detail_view';
    		$this->load->view('includes/template', $data);
        }
	}
	
	function insertComment(){
        $datetime = date('Y-m-d H:i:s', time());
        $data=array(
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'comment'=>$this->input->post('comment'),
            'rating'=>$this->input->post('rate'),
            'articleID'=>$this->input->post('id'),
            'isActive'=>1,
            "createdBy" => $this->input->post('name'),
			"lastUpdated"=>$datetime,
			"lastUpdatedBy"=>$this->input->post('name')
        );
        
        $query = $this->article_model->insertComment($data);			
			
		if($query==1){
		  echo $query;
		}else{
		  echo '0';
		}
    }
	
}