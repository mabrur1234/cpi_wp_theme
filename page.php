<?php
	get_header(); 
?>
	</div>
		</div>

	<section id="page_wrapper" >
		<div class="container">
			<div class="row-fluid">
			 <?php 
				while ( have_posts() ) : the_post();?>
				<div class="_col-md-12">
					<h3><?php  the_title(); ?></h3>
					<p><?php the_content(); ?></p>
				</div>
				<?php 	endwhile; ?>
			 </div>
		</div>
			 
	</section>
	<?php  get_footer();?>  
	  
	  

