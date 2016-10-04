<?php
/**
 * The template for displaying the footer.
 */
?>



<div>Page generated in <?php timer_stop(1); ?> seconds with <?php global $wpdb; echo $wpdb->num_queries; ?> database queries<br /><div>
	<footer class="footer-area">

		<section class="foot_top_area">
    		<section class="container">
	    		<!-- <div class="col-md-4 pull-right" id=""> -->
		    		<div class="col-md-4" id="foot1">
		    			<ul>
		    				<li><a href="#">About us</a></li>
		    				<li><a href="#">Contact & FAQ</a></li>
		    				<li><a href="#">Blog</a></li>
		    				<li><a href="#">Sign in/Sign up</a></li>
		    				<li><a href="#">CSR policy</a></li>
		    				<li><a href="#">Terms & conditions</a></li>
		    				<li><a href="#">Privacy policy</a></li>
		    			</ul>
		    		</div>

		    		<div class="col-md-4" id="foot2">
		    			<ul>
		    				<li><a href="#">Clipping path service</a></li>
		    				<li><a href="#">Drop shadow & Mirror effect</a></li>
		    				<li><a href="#">Image manipulation & Neck joint</a></li>
		    				<li><a href="#">Image retouching</a></li>
		    				<li><a href="#">Vector conversion</a></li>
		    				<li><a href="#">Web optimization for E-commerce</a></li>
		    				<li><a href="#">Clipping path vs masking</a></li>
		    			</ul>
		    		</div>

		    		<div class="col-md-4" id="foot3">
		    			<div class="form-group signup_input_portion pull-right">
							<input type="email" name="uname" placeholder="Name">
							<input type="Password" name="upassword" placeholder="Password">
						</div>
						<div class="form-group signup_btn_portion pull-right">
							<span>Signup for news</span>
							<button type="button" id="subscribe_btn" class="btn btn-primary btn-md">subscribe</button>
			    			<!-- <button type="submit" id="subscribe_btn" class="btn btn-default">SUBSCRIBE</button> -->
		    			</div>
		    		</div>
		    	</section>
		    </section>


	    	<section class="foot_bottom_area">
	    		<section class="container">
	    			<div class="col-md-6 foot-copyright">
	    				<p>all rights reserved  |  powered by Outsource experts ltd.</p>
	    			</div>
	    			<div class="col-md-6 pull-right foot-social">
	    				<ul>
	    					<li><a href="">facebook</a></li>
	    					<li><a href="">twitter</a></li>
	    					<li><a href="">youtube</a></li>
	    					<li><a href="">instagram</a></li>
	    					<li><a href="">pinterest</a></li>
	    				</ul>
	    			</div>
	    		</section>
	    	</section>





    	</footer>
    </body>
</html>

<?php 
 wp_footer();
?>
<?php if(is_front_page()): ?>
	<!-- fit screen header js portion start -->
	<script type="text/javascript">

		window.onload = window.onresize = function (){
		var left = document.getElementById("fullheight");
		var height = window.innerHeight;
		left.style.height = height + "px";}


		//perfect clipping path portion equal height div portion start
		var rightHeight = document.getElementById('topequaldiv2').clientHeight;
		var leftHeight = document.getElementById('topequaldiv1').clientHeight;
		if (leftHeight > rightHeight) {
		document.getElementById('topequaldiv2').style.height=leftHeight+'px';
		} else {
		document.getElementById('topequaldiv1').style.height=rightHeight+'px';
		}

		var midheightright = document.getElementById('midequaldiv1').clientHeight;
		var midleftheight = document.getElementById('midequaldiv2').clientHeight;
		if (midleftheight > midheightright) {
		document.getElementById('midequaldiv1').style.height=midleftheight+'px';
		} else {
		document.getElementById('midequaldiv2').style.height=midheightright+'px';
		}

		var midheightright = document.getElementById('bottomequaldiv2').clientHeight;
		var midleftheight = document.getElementById('bottomequaldiv1').clientHeight;
		if (midleftheight > midheightright) {
		document.getElementById('bottomequaldiv2').style.height=midleftheight+'px';
		} else {
		document.getElementById('bottomequaldiv1').style.height=midheightright+'px';
		}


	</script>
<?php endif; ?>


