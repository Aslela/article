<html>
<head>
	<title>Backend Admin Panel | New Article Form</title>
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
		#container
		{
			float:left;
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
	<div id="container">
		<?=form_open_multipart(base_url().'index.php/backend/article_insert') ?>
		<?=form_label('Title:','title') ?>
		<?php  
			$data_form=array(
				'id'=>'title',
				'name'=>'title'
			);

		?>
		<?=form_input($data_form)?>
		<br>
		<?=form_label('Content:','content') ?>
		<?php  
			$data_form=array(
				'id'=>'content',
				'name'=>'content'
			);
		?>
		<?=form_textarea($data_form)?>
		<br>
		<?=form_label('Category:','category') ?>
		<?php  
			$options=array(
				'0'=>'--'
			);
			
			foreach ($categories as $key => $value) {
				
				$temp=array(
					$value['category_ID'] => $value['category']
				);
				$options=array_merge($options,$temp);
				
			}			
		?>
		<?=form_dropdown('category',$options)?>
		<br>
		<?=form_label('Tag:','tag') ?>
		<?php  
			$options=array(
				'0'=>'--'
			);
			
			foreach ($tags as $key => $value) {
				
				$temp=array(
					$value['tag_ID'] => $value['tag']
				);
				$options=array_merge($options,$temp);
				
			}
		?>
		<?=form_dropdown('tags',$options)?>
		<br>
		<!-- 
		<?=form_label('Article_img:','img_link') ?>
		<?php  
			$data_form=array(
			'name'=>'img_link'
			);			
		?>
		<?=form_upload($data_form) ?>
		-->
		<br>
		<?=form_submit('','Publish') ?>
		<?=form_close() ?>
	</div>
	<div class="clear"></div>
</body>
</html>