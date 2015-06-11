<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Header style --> 
    <?php $this->load->helper('HTML');	
        echo link_tag('css/bootstrap.css');
        echo link_tag('css/article.css');
        
	?>
    <script src="<?php echo base_url(); ?>js/jquery..min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.js" type="text/javascript"></script>	
    

    <title>Inventory Ikang</title>
</head>
<body>
    <div class="header-container">
		<div class="container">
			<div class="logo">
				<img alt="Brand" src="<?php echo base_url(); ?>img/ironman.jpg" height="70" width="80">
			</div>
			
			<div class="logo-text">
				<h1>Put Some Text</h1>
			</div>
			
			<div class="clear"></div>
		</div>
	</div>
    
   	<div class="container">
		<div class="row">	
            <div class="content-container col-md-9 col-md-9">
               <?php $this->load->view($main_content); ?>
            </div><!--Content Containter-->
            
            <div class="advertise col-md-3 col-lg-3">
			</div><!--adds-->
        </div>
    </div>
  
</body>
</html>