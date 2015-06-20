<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>

  <?php $this->load->helper('HTML');	
        echo link_tag('css/article_detail.css');      
  ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.barrating.js" type="text/javascript"></script>

<div class="row content" id="content-1">
	<h1><?=$data_article[0]['title'];?></h1>
						
	<div class="row">
		<div class="col-md-12 col-lg-12 img-content">
			<img class="img-responsive" src="<?php echo base_url(); ?>img/<?=$data_article[0]['articleImgLink'];?>">
          
		</div>
							
		<div class="col-md-12 col-lg-12 desc">
		    <?=$data_article[0]['content'];?>				
		</div>
	</div>
</div><!--Content-->

<div class="row" id="social-share">
	<div class="col-md-6 col-lg-6">
		<a href="#">
			<span class="share-facebook">
                <img src="<?php echo base_url(); ?>img/fb.png" height="30" width="35" >
			         Share on Facebook
			</span>
		</a>
	</div>
						
	<div class="col-md-6 col-lg-6">
		<a href="#">
			<span class="share-twitter">
				<img src="<?php echo base_url(); ?>img/twitter-icon.png" height="30" width="35" >
				    Share on Twitter
			</span>
		</a>
	</div>
</div><!--Share Button-->

<div class="row" id="author">
	<div class="author-img">
		<img class="img-responsive" src="<?php echo base_url(); ?>img/<?=$data_article[0]['userImgLink'];?>" height="70">
	</div>
	<div class="author-detail">
		<h4><?=$data_article[0]['created'];?> by <b><?=$data_article[0]['username'];?></b></h4>
        <h4>view: <?=$data_article[0]['view'];?></h4>
        <h4 class="float-left">Rating : </h4>
	       <div id="star-rating-avg">
              <?php 
                   for($i=1;$i<=5;$i++){
                       if($i==floor($data_article[0]['ratingPerArticle'])){
                            echo '<input class="star" name="star-avg" type="radio" value="'.$i.'" disabled="disabled" checked="checked"/>';
                               
                       }else{
                            echo '<input class="star" name="star-avg" type="radio" value="'.$i.'" disabled="disabled"/>';
                       }
                   }
                ?>
            </div>
	</div>
</div><!--Author-->

<div class="row comment">
	
    <?php 
        $no=0;
        foreach ($data_comment as $row){
        $no++;
    ?>
    <div class=" row comment-content">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<h4><?=$row['created'];?> by <b><?=$row['name'];?></b><h4>
			</div>
			<div class="col-md-6 col-lg-6 comment-user">	
				<h4>Rate<h4>
                    <div class="rating-star">
                    <?php 
                        for($i=1;$i<=5;$i++){
                            if($i==$row['rating']){
                                echo '<input class="star" name="star'.$no.'" type="radio" value="'.$i.'" disabled="disabled" checked="checked"/>';
                               
                            }else{
                                echo '<input class="star" name="star'.$no.'" type="radio" value="'.$i.'" disabled="disabled"/>';
                            }
                        }
                    ?>
                    </div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 col-lg-9">
			   <p><?=$row['comment'];?></p>
			</div>
		</div>	
	</div><!--Comment Content-->
	 <?php 
        }
     ?>
    						
</div><!--Comment Container-->

<!--Comment Form-->
<div class="row comment-form-wrapper">		
	<h3>Post Your Comment Here : </h3>
	<?php if(validation_errors()) { ?>
    <div class="alert alert-warning">
    <?php echo validation_errors(); ?>
    </div>
    <?php } ?>
    <div class="comment-form">
		<?php echo form_open(); ?>
			<input type="hidden" name="article_id" class="form-control" id="article-id" value="<?=$data_article[0]['articleID'];?>">
            <div class="form-group">
                <label for="Name">Name</label><span class="err-msg" id="err-name-msg">name must be filled!</span>
			    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
			</div>
									  
			<div class="form-group">
				<label for="Email">Email</label><span class="err-msg" id="err-email-msg">invalid email!</span>
				<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                
			</div>
			<div class="form-group">
				<label for="Comment">Comment</label><span class="err-msg" id="err-comment-msg">comment must be filled!</span>
				<textarea class="form-control" id="comment" name="comment" placeholder="Comment here ..."></textarea>
                
			</div>
									  
			<div class="form-group">
				<label for="Rating">Rating</label><span class="err-msg" id="err-rate-msg"> must be rate!</span>
					<div>
                        <input class="star" name="star-comment" type="radio" value="1"/>
                        <input class="star" name="star-comment" type="radio" value="2"/>
                        <input class="star" name="star-comment" type="radio" value="3"/>
                        <input class="star" name="star-comment" type="radio" value="4"/>
                        <input class="star" name="star-comment" type="radio" value="5"/>
                    </div>
                    
			</div>
			
            <div class="form-submit-group">						  
			 <button type="submit" class="btn btn-default" id="submit-comment">Submit</button>
            </div>
		<?php echo form_close(); ?>
	</div><!--Comment Form -->		
</div><!--Comment Container -->		
