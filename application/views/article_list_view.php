  <?php 
    $no=0;
    foreach ($data_article as $row){
    $no++;
  ?>

 <div class="row content" id="content-<?=$no?>">
    <h1><?=$row['title']?></h1>					
    <div class="row">
		<div class="col-md-4 col-lg-4">
		  <h4><?=$row['created']?> by <b><?=$row['username']?></b></h4>
		</div>
								
        <div class="col-md-4 col-lg-4 viewer">
		  <h4><?=$row['view']?></h4>
		</div>
							
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
		</div><!--Content Title-->
						
		<div class="row">
							
			<div class="col-md-12 col-lg-12 desc">
				<p>
					<?=$row['content']?>...
				</p>
							
				<div class="btn-group">
					<a href="#"><button type="button" class="btn btn-info"> Read More..</button></a>
				</div>
			</div>
		</div><!--Content Short Desc-->
</div><!--Content List-->
<?php
   }
?>