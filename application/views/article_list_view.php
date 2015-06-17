        
<?php $this->load->helper('HTML');	
        echo link_tag('css/article.css');
?>

  <?php 
    $no=0;
    foreach ($data_article as $row){
    $no++;
  ?>

<script>
    $(function(){  
        $('input.star').rating(); 
    });
</script>

 <div class="row content" id="content-<?=$no?>">
    <h2><?=$row['title']?></h2>					
    <div class="row">
		<div class="col-md-4 col-lg-4">
		  <h4><?=$row['created']?> by <b><?=$row['username']?></b></h4>
		</div>
								
        <div class="col-md-4 col-lg-4 viewer">
		  <h4>View : <?=$row['view']?></h4> 
		</div>
							
	   <div class="col-md-4 col-lg-4 share-bar">
            <h4>
                <div id="star-rating">
                    <?php 
                        for($i=1;$i<=5;$i++){
                            if($i==floor($row['ratingPerArticle'])){
                                echo '<input class="star" name="star1" type="radio" value="'.$i.'" disabled="disabled" checked="checked"/>';
                               
                            }else{
                                echo '<input class="star" name="star1" type="radio" value="'.$i.'" disabled="disabled"/>';
                            }
                        }
                    ?>
                </div>
              
			</h4>
            <div class="clear"></div>
	   </div>
    </div><!--Content Title-->
    
    <div class="row">
         <div class="col-md-4 col-lg-4 share-bar">
            <h4>
                <ul>
					<li class="fb">
    					<a>
    						<img src="img/fb.png" height="20" width="25">
    						<span>365k</span>
    					</a>
					</li>
					<li class="twitter">
						<a>
							<img src="img/twitter-icon.png" height="20" width="25">
							<span>365k</span>
						</a>
					</li>
				</ul>
			</h4>
            <div class="clear"></div>
	   </div>
    </div>
						
	<div class="row">
			
        <div class="col-md-4 col-lg-4 img-content">
            <img src="<?php echo base_url(); ?>img/<?=$row['categoryImgLink']?>" height="200" width="200">
        </div>	
            			
		<div class="col-md-8 col-lg-8 desc">
			<p>
				<?=$row['content']?>...
			</p>
							
			<div class="btn-group">
				<a href="<?php echo base_url(); ?>index.php/article/getArticleDetail/<?=$row['articleID']?>"><button type="button" class="btn btn-info"> Read More..</button></a>
			</div>
                
		</div>
	</div><!--Content Short Desc-->
</div><!--Content List-->
<?php
   }
?>