<html>
<head>
	<title>Backend Admin Panel</title>
	<style>
		body
		{
			background-color: black;
			color:white;
		}
		#user_info
		{
			width:20%;
			border:1px dashed white;
			float:left;
		}
		#user_info img
		{
			width:130px;
			height:180px;
		}
		#user_info span
		{
			color:red;
		}
		#backend_list
		{
			float:left;
		}	
		#backend_list ul li a
		{
			color:grey;
			text-decoration: none;
			margin-left: 30px;
		}
		#backend_list ul li a:hover
		{
			text-decoration: underline;
		}
		.clear
		{
			clear:both;
		}
	</style>
</head>
<body>
	<div id="user_info">
		<?php  
			$userID=$this->session->userdata('userID');
			$username=$this->session->userdata('username');
			$user_img=$this->session->userdata('user_img');
			$user_level=$this->session->userdata('user_level');
		?>
		<img src="<?php echo base_url().'img/'.$user_img;?>" alt="" /><br>
		<span>userID : <?=$userID?></span><br>
		<span>username : <?=$username?></span><br>
		<span>user level : <?=$user_level?></span>
	</div>
	<div id="backend_list">
		<ul>
			<li><a href="#">Tag List</a></li>
			<li><a href="#">Tag Insert</a></li>
			<li><a href="#">Category List</a></li>
			<li><a href="#">Category Insert</a></li>
			<li><a href="#">Article List</a></li>
			<li><a href="<?=base_url() ?>index.php/backend/article_insert">Article insert</a></li>
		</ul>
	</div>
	<div class="clear"></div>
</body>
</html>