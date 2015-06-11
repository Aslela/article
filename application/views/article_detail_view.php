<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>

  <?php $this->load->helper('HTML');	
        echo link_tag('css/article_detail.css');      
  ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.barrating.js" type="text/javascript"></script>

<div class="row content" id="content-1">
	<h1>TITLE</h1>
						
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <h4>Month, 99 2015 by <b>Mr.X</b></h4>
        </div>
									
		<div class="col-md-4 col-lg-4 viewer">
            <h4>view: 111</h4>
		</div>
							
		<div class="col-md-4 col-lg-4">
			<h4 class="float-left">Rating : </h4>
				<select id="rate-top">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
		</div>
	</div><!-- -->
						
	<div class="row">
		<div class="col-md-12 col-lg-12 img-content">
			<img class="img-responsive" src="<?php echo base_url(); ?>img/url.jpg" height="200">
		</div>
							
		<div class="col-md-12 col-lg-12 desc">
			<p>
			Bacon ipsum dolor amet deserunt ham capicola rump bacon cow ad prosciutto pork belly nostrud officia ham hock dolore. In ad excepteur sint, leberkas exercitation venison dolore aliquip rump ribeye short ribs boudin. Ex prosciutto enim alcatra tempor jowl drumstick landjaeger sunt bacon ipsum. Dolor swine landjaeger, turducken sausage beef ribs anim labore.
			</p>
								
			<p>
			Bacon ipsum dolor amet deserunt ham capicola rump bacon cow ad prosciutto pork belly nostrud officia ham hock dolore. In ad excepteur sint, leberkas exercitation venison dolore aliquip rump ribeye short ribs boudin. Ex prosciutto enim alcatra tempor jowl drumstick landjaeger sunt bacon ipsum. Dolor swine landjaeger, turducken sausage beef ribs anim labore.
			</p>
								
			<p>
			Bacon ipsum dolor amet deserunt ham capicola rump bacon cow ad prosciutto pork belly nostrud officia ham hock dolore. In ad excepteur sint, leberkas exercitation venison dolore aliquip rump ribeye short ribs boudin. Ex prosciutto enim alcatra tempor jowl drumstick landjaeger sunt bacon ipsum. Dolor swine landjaeger, turducken sausage beef ribs anim labore.
			</p>
								
			<p>
			Bacon ipsum dolor amet deserunt ham capicola rump bacon cow ad prosciutto pork belly nostrud officia ham hock dolore. In ad excepteur sint, leberkas exercitation venison dolore aliquip rump ribeye short ribs boudin. Ex prosciutto enim alcatra tempor jowl drumstick landjaeger sunt bacon ipsum. Dolor swine landjaeger, turducken sausage beef ribs anim labore.
			</p>
								
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
		<img class="img-responsive" src="<?php echo base_url(); ?>img/ironman.jpg" height="70">
	</div>
	<div class="author-detail">
		<h4>Iron Man</h4>
	</div>
</div><!--Author-->

<div class="row comment">
	<div class=" row comment-content">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<h4>Month, 99 2015 by <b>Mr.X</b><h4>
			</div>
			<div class="col-md-6 col-lg-6 comment-user">	
				<h4>Rate<h4>
					<select class="rating">
                        <option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 col-lg-9">
			     <p>
			     Bacon ipsum dolor amet deserunt ham capicola rump bacon cow ad prosciutto pork belly nostrud officia ham hock dolore. In ad excepteur sint, leberkas exercitation venison dolore aliquip rump ribeye short ribs boudin. Ex prosciutto enim alcatra tempor jowl drumstick landjaeger sunt bacon ipsum. Dolor swine landjaeger, turducken sausage beef ribs anim labore.
                 </p>
			</div>
		</div>	
	</div><!--Comment Content-->
							
	<div class=" row comment-content">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<h4>Month, 99 2015 by <b>Mr.X</b><h4>
			</div>
			<div class="col-md-6 col-lg-6 comment-user">	
				<h4>Rate<h4>
					<select class="rating">
                        <option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 col-lg-9">
			     <p>
			     Bacon ipsum dolor amet deserunt ham capicola rump bacon cow ad prosciutto pork belly nostrud officia ham hock dolore. In ad excepteur sint, leberkas exercitation venison dolore aliquip rump ribeye short ribs boudin. Ex prosciutto enim alcatra tempor jowl drumstick landjaeger sunt bacon ipsum. Dolor swine landjaeger, turducken sausage beef ribs anim labore.
                 </p>
			</div>
		</div>	
	</div><!--Comment Content-->
</div><!--Comment Container-->

<!--Comment Form-->
<div class="row comment-form-wrapper">		
	<h3>Post Your Comment Here : </h3>
	<div class="comment-form">
		<form>
			<div class="form-group">
                <label for="name-comment">Name</label>
			    <input type="text" class="form-control" id="name" placeholder="Name">
			</div>
									  
			<div class="form-group">
				<label for="input-email">Email address</label>
				<input type="email" class="form-control" id="email" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="input-comment">Comment</label>
				<textarea type="password" class="form-control" id="comment" placeholder="Comment here ..."></textarea>
			</div>
									  
			<div class="form-group">
				<label for="input-rating">Rating</label>
					<select id="rate-bottom">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
			</div>
									  
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div><!--Comment Form -->		
</div><!--Comment Container -->		

<script>
	$(function() {
		function ratingEnable() {
			$('#rate-top').barrating({
				wrapperClass: 'br-wrapper-f',
				showSelectedRating: false,
				readonly: true
			});
			
			$('#rate-top').barrating('set', 3);
			
			$('.rating').barrating({
				wrapperClass: 'br-wrapper-f',
				showSelectedRating: false,
				readonly: true
			});
			$('.rating').barrating('set', 3);
			
			$('#rate-bottom').barrating({
				wrapperClass: 'br-wrapper-f',
				showSelectedRating: false
			});
		}

		ratingEnable();
	});
</script>