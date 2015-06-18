<?php 
   class User extends CI_Controller
   {
        function __construct()
        {
            parent::__construct();
            
            $this->load->helper(array('form', 'url'));
    		$this->load->helper('date');
            $this->load->library('form_validation');
            $this->load->library("pagination");
        }
        
        function backend_panel_login()
        {
            $data['error']=0;
			if($_POST)
			{
				$this->load->model('user_model');
				$username=$this->input->post('username',true);
				$password=$this->input->post('password',true);// harusnya lempar dulu ke fungsi ceasar encrpytion
				$user=$this->user_model->login($username,$password);
				if(!$user)
				{
					$data['error']=1;
				}
				else
				{
					$this->session->set_userdata('userID',$user['userID']);
					$this->session->set_userdata('username',$user['username']);
					$this->session->set_userdata('user_img',$user['userImgLink']);
					$this->session->set_userdata('user_level',$user['level']);
					redirect(base_url().'index.php/user/backend_panel');
				}
			}
			$this->load->view('login_view',$data);
        }
        
        function backend_panel()
        {
            $this->load->library('authentication');
            //echo "<pre>".$this->session->userdata('user_level')."</pre>";
            //echo "<pre>".$this->authentication->isAuthorizeAdmin($this->session->userdata('user_level'))."</pre>";
            if($this->authentication->isAuthorizeAdmin($this->session->userdata('user_level')))
			{
			     //echo "<pre>valid</pre>";
				$this->load->view('admin_panel');
                
			}
            else if($this->authentication->isAuthorizeMember($this->session->userdata('user_level')))
            {
                $this->load->view('member_panel');
            }
			else
			{	//echo "<pre>not valid</pre>";
				redirect(base_url().'index.php/user/backend_panel_login');
			}
        }
        
        function logout()
    	{
    		$this->session->sess_destroy();
    		redirect(base_url().'index.php/user/backend_panel_login');
    	}
   }  
?>