<?php  
	class Backend extends CI_Controller
	{
		function __construct()
		{
        parent::__construct();
        
        $this->load->helper(array('form', 'url'));
		$this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->library("pagination");
        
    	}

    	function backend_panel()
		{
			$data['error']=0;
			if($_POST)
			{
				$this->load->model('user');
				$username=$this->input->post('username',true);
				$password=$this->input->post('password',true);
				$user=$this->user->login($username,$password);
				if(!$user)
				{
					$data['error']=1;
				}
				else
				{
					$this->session->set_userdata('userID',$user['user_ID']);
					$this->session->set_userdata('username',$user['username']);
					$this->session->set_userdata('user_img',$user['user_img']);
					$this->session->set_userdata('user_level',$user['level']);
					redirect(base_url().'index.php/backend/backend_admin_panel');
				}
			}
			$this->load->view('login',$data);
		}

		function backend_admin_panel()
		{
			if($this->session->userdata('username') == null)
			{
				redirect(base_url().'index.php/backend/backend_panel');
			}
			else
			{				
				$this->load->view('admin_panel');
			}
		}

		function article_insert()
		{
			$this->load->model('user');		
			if($this->session->userdata('username') == null || $this->session->userdata('user_level') < 1)
			{
				redirect(base_url().'index.php/backend/backend_panel');
			}
			if($_POST)
			{
				//$this->do_upload();
				$data=array(
					'title' => $_POST['title'],
					'content' => $_POST['content'],
					'category_ID'=>$_POST['category'],
					'author_ID'=>$this->session->userdata('userID'),
					//'img_link'=>$_POST['img_link'],
					'view'=>0,
					'created_by'=>$this->session->userdata('username'),
					'last_updated_by'=>$this->session->userdata('username')
				);
				$this->user->insert_article($data);
				redirect(base_url().'index.php/backend/backend_admin_panel');
			}
			else
			{
						
				$data['tags']=$this->user->get_tag_list();
				$data['categories']=$this->user->get_category_list();
				$this->load->view('new_article_form',$data);
			}
		}

/*		function do_upload()
		{
			$config['upload_path']='./upload';
			$config['allowed_types']='gif|jpg|png';
			$config['max_size']='100';
			$config['max_width']='1024';
			$config['max_height']='768';
			$this->load->library('upload',$config);

			if(!$this->upload->do_upload())
			{
				$error=array('error'=>$this->upload->display_errors());
				$this->load->view('new_article_form',$error);
			}
			else
			{

				$data=array('upload_data'=>$this->upload->data());
				//resize image
				$this->resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
				//res end				 
			}
		}

		function resize($path,$file)
		{
			$config['image_library']='gd2';
			$config['source_image']=$path;
			$config['creat_thumb']=TRUE;
			$config['maintain_ratio']=TRUE;
			$config['width']=150;
			$config['height']=75;
			$config['new_image']='./uploads/'.$file;

			$this->load->library('image_lib',$config);
			$this->image_lib->resize();
		}*/
	}
?>