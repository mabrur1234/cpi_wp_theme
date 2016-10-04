<?php
/**
 * Template Name: Homepage Template
 *
 */
get_header();
?>
			<div class="container"><!--slider container-->

				<div class="testimonial_area container">
				      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
				        <!-- Bottom Carousel Indicators -->
				        <ol class="carousel-indicators">
				          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
				          <li data-target="#quote-carousel" data-slide-to="1"></li>
				          <li data-target="#quote-carousel" data-slide-to="2"></li>
				        </ol>
				        <!-- Carousel Slides / Quotes -->
				        <div class="carousel-inner caro-inner-custom">
				          <!-- Quote 1 -->
				          <div class="item active">
				            <blockquote>
				              <div class="row">
				                <div class="col-sm-2 text-center">
				                  <img widht="100" height="100" class="img-circle" src="<?php bloginfo('template_url'); ?>/images/testistimonial_man11.jpg" style="width: 100px;height:100px;">
				                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
				                </div>
				                <div class="col-sm-10">
				                  <p id="qcontent">"“Utterly brilliant service – fast turnaround and excellent quality. Will use for all my clipping needs from now on.”"</p>
				                  <div class="author">Jamie Skilling, Photographer - England </div>
				                </div>
				              </div>
				            </blockquote>
				          </div>
				          <!-- Quote 2 -->
				          <div class="item">
				            <blockquote>
				              <div class="row">
				                <div class="col-sm-2 text-center">
				                  <img  widht="100" height="100" class="img-circle"  src="<?php bloginfo('template_url'); ?>/images/testistimonial_man11.jpg" style="width: 100px;height:100px;">
				                </div>
				                <div class="col-sm-10">
				                  <p id="qcontent">"“Utterly brilliant service – fast turnaround and excellent quality. Will use for all my clipping needs from now on.”"</p>
				                  <div class="author">Jamie Skilling, Photographer - England </div>
				                </div>
				              </div>
				            </blockquote>
				          </div>
				        </div>
				        <!-- Carousel Buttons Next/Prev -->
				        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
				        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
				      </div>                          
				</div>
			</div><!--slider container-->
    		<div class="container"><!--get a quote container-->
	    		<div class="top_queto_area">
	    			<p>get queto now</p>
	    			<!-- <input type="textarea" name="" placeholder="Let us know what to do with your images"> -->
			    		<div class="form-group">
							<textarea class="form-control"  id="quote-inpt" placeholder="Let us know what to do with your images"></textarea>
			    			<button type="submit" class="btn btn-lg btn-primary btn-block cont_btn">Continue>></button>
		    			</div>
	    			<span>Still making your mind up? Read on..</span>
	    		</div>
    		</div><!--get a quote container-->
				
				
	    	</div>
	    </div>



	  <div class="row-fluid"> 
    	<div class="how_it_work_area">
    		<div class="container">
    			<h1>HERE'S HOW IT WORKS</h1><br>
    			<div class="how-work-box-area">
	    			
					<div class="row" style="margin-left:0px">
				        <div class="col-md-4">
					        <div class="col-md-12 how-work-box">
					          <img height="75" width="75"  alt="Generic placeholder image" src="<?php bloginfo('template_url'); ?>/images/howitworkpic11.png" class="">
					          <h2>request quote</h2>
					          <p>get a quote in your inbox within one hour.</p>
					        </div>
				        </div><!-- /.col-lg-4 -->
				        <div class="col-md-4">
					        <div class="col-md-12 how-work-box">
					          <img height="75" width="81"  alt="Generic placeholder image" src="<?php bloginfo('template_url'); ?>/images/howitworkpic22.png" class="">
					          <h2>request quote</h2>
					          <p>get a quote in your inbox within one hour.</p>
				          	</div>
				         </div>
					    <div class="col-md-4">
							<div class="col-md-12 how-work-box">
						          <img height="73" width="71" alt="Generic placeholder image" src="<?php bloginfo('template_url'); ?>/images/howworkpic11.png" class="">
						          <h2>request quote</h2>
						          <p>get a quote in your inbox within one hour.</p>
						    </div><!-- /.col-lg-4 -->
					      </div>
				      </div>
    			
    			<a href="#">Learn more about how it works</a>
    			<div class="cpi-offer-area">

    				<div class="container">	
						<div class="row" style="margin-left:0px">
					        <div class="col-lg-4 cpi-offer-box">
					          <img height="61" width="112"  alt="Generic placeholder image" src="<?php bloginfo('template_url'); ?>/images/112.png" class="">
					          <h3>Professional Photoshop DTP</h3>
					          <p>We probably operate the best offshore Graphics design studio in Asia. To make sure we keep delivering top quality we only employ the best DTP professionals and spend much time and resources on further education and training.</p>
					        </div><!-- /.col-lg-4 -->
					        <div class="col-lg-4 cpi-offer-box secure-onlinepay">
					          <img height="26" width="215"  alt="Generic placeholder image" src="<?php bloginfo('template_url'); ?>/images/payments.png" class="">
					          <h3>Secure Online Payment</h3>
					          <p>Security is a big consideration in everything we do. In relation to secure payment we accept all major credit cards powered by Stripe payment and as an alternative we also offer to process your purchase through PayPal.</p>
					        </div><!-- /.col-lg-4 -->
					        <div class="col-lg-4 cpi-offer-box">
					          <img height="42" width="152" alt="Generic placeholder image" src="<?php bloginfo('template_url'); ?>/images/dropbox.png" class="">
					          <h3>Fast and Safe Image Transfer</h3>
					          <p>Dropbox sync is a fantastic service we’re able to offer you. When you opt in for Dropbox, you just copy-past files to/from one specific folder to auto synchronize with our system. As an alternative you can also use FTP or web file manager.</p>
					        </div><!-- /.col-lg-4 -->
					      </div>
				      </div>

    			</div>

    		</div>
    	</div>	
    </div>
	<div class="row-fluid">
    	<div class="cpi-samples-area">
    		<div class="container">
    			<h1>clipping path india sample on clipping path,photoshop masking ,retouching,rester to vector ,image manipulation</h1>
    			
    			<a href="" class="see_ex_btn">See more example</a>
    		</div>
    	</div>
	</div>

<!-- showing portion in large device code start -->
    <div class="row-fluid visible-lg">
    	<div class="cpi_services_area">
    		<div class="container">
	    		<h1 class="cpi_service_area_head">Perfect clipping path and Photoshop services… every time – any time!</h1>

			<div class="row featurette">
				 <div class="col-md-5 col-md-pull-7 sample-left-box pull-right" id="topequaldiv2">
		          <img alt="500x500" height="268" width="349" data-src="" class="featurette-image img-responsive center-block" src="<?php bloginfo('template_url'); ?>/images/photoshop.jpg" >
		        </div>
		        <div  class="col-md-7 col-md-push-5 sample-right-box" id="topequaldiv1" >
		          <h1  class="featurette-heading" >The quality editing you need</h1>
		          <p>We take pride in what we do. We have been delivering quality work for small and medium businesses as well as well-known large multinational companies since 2009. We are constantly training our 300+ DTP professionals in order to maintain our position as the leading quality graphical outsource experts.</p>
		        </div>
		    </div>


			<div class="row featurette">
				<div class="col-md-5 sample-left-box pull-right" id="midequaldiv2">
		          <img height="268" width="349" alt="500x500" data-src="" class="featurette-image img-responsive center-block" src="<?php bloginfo('template_url'); ?>/images/bigbest_price.jpg" >
		        </div>
		        <div class="col-md-7 sample-right-box" style="text-align:right !important" id="midequaldiv1">
		          <h1 class="featurette-heading" style="text-align:right !important">The quality editing you need</h1>
		          <p>We take pride in what we do. We have been delivering quality work for small and medium businesses as well as well-known large multinational companies since 2009. We are constantly training our 300+ DTP professionals in order to maintain our position as the leading quality graphical outsource experts.</p>
		        </div>
		    </div>



			    <div class="row featurette">
			        <div class="col-md-5 col-md-pull-7 sample-left-box pull-right" id="bottomequaldiv2">
			          <img height="268" width="349" alt="500x500" data-src="" class="featurette-image img-responsive center-block" src="<?php bloginfo('template_url'); ?>/images/bigbestprice.jpg" >
			        </div>
			        <div class="col-md-7 col-md-push-5 sample-right-box" id="bottomequaldiv1">
			          <h1 class="featurette-heading">Delivered on time, every time</h1>
			          <p >We get it. You want the best quality images. On time. Every time. Time after time. In order to do this, we are running a true 24 hour operation with 3 shifts. As a consequence, you can send us your pictures at end of work hours in Europe or USA and have the pictures back at the start of working day the next morning.</p>
			        </div>
			    </div>
    		</div>
    	</div>
    </div>
<!-- showing portion in large device code end -->

<!-- showing portion in miedium device code start -->
    <div class="row-fluid visible-md visible-sm visible-xs">
    	<div class="cpi_services_area">
    		<div class="container">
		    		<h1 class="cpi_service_area_head">Perfect clipping path and Photoshop services… every time &ndash; any time!</h1>

				<div class=" featurette">
					 <div id="topequaldiv2" class="col-md-5 col-md-pull-7 sample-left-box">
			           <img alt="500x500" height="268" width="349" data-src="" class="featurette-image img-responsive center-block" src="<?php bloginfo('template_url'); ?>/images/photoshop.jpg" >
			        </div>
			        <div id="topequaldiv1" class="col-md-7 col-md-push-5 sample-right-box" style="height: 342px;">
			          <h1 class="featurette-heading">The quality editing you need</h1>
			          <p>We take pride in what we do. We have been delivering quality work for small and medium businesses as well as well-known large multinational companies since 2009. We are constantly training our 300+ DTP professionals in order to maintain our position as the leading quality graphical outsource experts.</p>
			        </div>
			    </div>


				<div class=" featurette">
					<div id="midequaldiv2" class="col-md-5 sample-left-box">
		          <img height="268" width="349" alt="500x500" data-src="" class="featurette-image img-responsive center-block" src="<?php bloginfo('template_url'); ?>/images/bigbest_price.jpg" >
			        </div>
			        <div id="midequaldiv1" style="text-align: right ! important; height: 342px;" class="col-md-7 sample-right-box">
			          <h1 style="text-align:right !important" class="featurette-heading">The quality editing you need</h1>
			          <p>We take pride in what we do. We have been delivering quality work for small and medium businesses as well as well-known large multinational companies since 2009. We are constantly training our 300+ DTP professionals in order to maintain our position as the leading quality graphical outsource experts.</p>
			        </div>
			    </div>



				    <div class=" featurette">
				        <div id="bottomequaldiv2" class="col-md-5 col-md-pull-7 sample-left-box">
			          <img height="268" width="349" alt="500x500" data-src="" class="featurette-image img-responsive center-block" src="<?php bloginfo('template_url'); ?>/images/bigbestprice.jpg" >
				        </div>
				        <div id="bottomequaldiv1" class="col-md-7 col-md-push-5 sample-right-box" style="height: 342px;">
				          <h1 class="featurette-heading">Delivered on time, every time</h1>
				          <p>We get it. You want the best quality images. On time. Every time. Time after time. In order to do this, we are running a true 24 hour operation with 3 shifts. As a consequence, you can send us your pictures at end of work hours in Europe or USA and have the pictures back at the start of working day the next morning.</p>
				        </div>
				    </div>
    		</div>
    	</div>
    </div>
<!-- showing portion in miedium device code end -->




    <div class="row-fluid">
    	 <div class="best-service-area">
    		<div class="container">
	    		<h1 class="best_service_header">The best Photoshop service in the making</h1>
					<div class="row" style="margin-left:0px">
				        <div class="col-md-3">
				        	<div class="col-md-12 best-service-box">
					         <h1>3000</h1><br>
		    				<p>photoshop professionals</p>
	    					</div>
				        </div>

				        <div class="col-md-3">
				        	<div class="col-md-12  best-service-box">
						         <h1>10000</h1><br>
			    				<p>customers served</p>
		    				</div>
				        </div>

				        <div class="col-md-3">
				        	<div class="col-md-12 best-service-box">
						         <h1>7500000</h1><br>
			    				<p>images processed</p>
		    				</div>
				        </div>

				        <div class="col-md-3">
				        	<div class="col-md-12 best-service-box">
					         	<h1>$125000</h1><br>
		    					<p>donated to charity</p>
	    					</div>
				        </div>

				      </div>
				 

	    		<h1>Clipping Path India</h1><br>
	    		<p>Clipping Path India is an offshore graphic design studio working around the clock to service our customers. We employ more than 300 Photoshop DTP professionals producing high quality hand drawn clipping path, shadow effect, image masking, retouching and other Photoshop services.</p><br>
	    		<p>We take pride in the fact that we are probably running the best quality DTP studio in the region but also that we have been able to maintain extremely competitive prices and really quick turnaround time.</p><br>
	    		<p>Read more about our amazing team here</p><br><br>
	    	</div>
    	</div>
    </div>
    <div class="row-fluid">
    	<div class="our-service-area">
    		<div class="container">
	    		<h1>Our services explained</h1>

	    		<div class="row">
	    			<div class="col-lg-3 our-service-box">
	    				<img height="99" width="270" class="img-responsive text-center" src="<?php bloginfo('template_url'); ?>/images/servicepic1.png"><br>
	    				<p>Clipping path is an effective way to remove background from a photograph. It is an excellent method to employ when considering quality background removal as there is no real alternative to clipping path. This is a priority service at Clipping Path India. We provide all types of clipping path service, for example clipping path to remove background from an image and multiple clipping path for colour correction. All paths we provide are 100% handmade using Pen Tool in Photoshop. We never use an automated tool such as Magic Wand which may be able to remove background very quickly but we feel that quality background removal is only possible using the Pen Tool in Photoshop. Read more about clipping path>>>></p>
	    			</div>

	    			<div class="col-lg-3 our-service-box">
	    				<img height="99" width="270" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/servicepic2.png"> <br>
	    				<p>Adding a natural drop shadow to an image is essential to achieve a sense of reality. It makes no difference if the original image already has shadow on it; by using the clipping path technique the resulting shadow will display perfectly. If you have product or model photography images that already have drop shadow in them, and you want to remove background while keeping the shadow intact, this is perfectly possible to achieve. Depending on your need we can either keep the original shadow or generate a new shadow which will look 100% natural. Read more about drop shadow>></p>
	    			</div>

	    			<div class="col-lg-3 our-service-box">
	    				<img height="99" width="270" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/servicepic3.png"> <br>
	    				<p>A mirror effect or a reflection shadow on an image can alter the final look by making it appear ‘glassy’. With the modern methods employed at Clipping Path India a mirror effect can be successfully achieved even when there is no mirror effect already in the photograph. One of the ways we achieve a high quality looking product image is by applying the mirror effect or reflection shadow. This can transform your image from flat and dull into the finish seen in a quality glossy magazine. Adding these features to an image can create a 3D effect, displaying the product on a clean, slick ‘glassy’ surface. Read more about mirror effect>></p>
	    			</div>
	    	
	    			<div class="col-lg-3 our-service-box">
	    				<img height="99" width="265" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/servicepic4.png"> <br>
	    				<p>The technique of masking is used on an image where there is something complicated like hair for which clipping path cannot be applied. Clipping Path India has specialist technicians for this work and uses the latest Photoshop techniques to get the best possible result. If you have images you need to remove the background from but have complicated areas like hair or blurred or ‘fuzzy’ edges, we can work on them too. In these cases Photoshop masking is essential in order to remove background whilst maintaining detail in the image. Pen tool is applicable to images with sharp edge only and we use the very latest tools and techniques of Photoshop masking to achieve the best possible result. No matter whether the background is dark, gradient or multicolour we can still achieve an excellent result. Read more about image masking>></p>
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-lg-3 our-service-box">
	    				<img height="99" width="270" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/servicepic5.png"><br>
	    				<p>This involves taking one part of an image and placing it in another; this is a regular task at Clipping Path India. Taking one part from an image and placing and blending that into another image is known as image manipulation. After the manipulation is done you would never realize that the image was built from two different photographs. We provide all types of image manipulation services e.g. removing a mannequin neck and replacing with another part of the shirt to make a complete shirt. Read more about image manipulation>></p>
	    			</div>

	    			<div class="col-lg-3 our-service-box">
	    				<img height="99" width="263" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/servicepic6.png"> <br>
	    				<p>Clipping Path India provides Photoshop retouching/ cloning services to remove spots and scratches from a product or a model in a photograph. Don’t toss an image aside just yet. With our Photoshop retouching service we can remove spots or blemishes from images. This means we can create a blemish-free skin surface on images of models, and remove unsightly marks and scratches from any product image. Read more about Photoshop retouching>></p>
	    			</div>

	    			<div class="col-lg-3 our-service-box">
	    				<img height="99" width="270" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/servicepic7.png"> <br>
	    				<p>If you have a logo or graphics which have low resolution or poor quality and you wish to have a high resolution vector, this service can also be provided. We provide 100% handmade raster to vector conversion service using Illustrator Pen Tool. If you have images to vectorize send them to us now; we will begin work on them immediately and return within an efficient time schedule. Read more about vector conversion>></p>
	    			</div>
	    	
	    			<div class="col-lg-3 our-service-box">
	    				<img height="99" width="270" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/servicepic8.png"> <br>
	    				<p>Straightening, cropping, resizing and saving images as web format is another service on offer at Clipping Path India, and you can place the images on your website immediately. Once your image has been successfully touched up and edited, you’ll need to resize it correctly and save it in the relevant web format before you can upload it to your website. We can handle the straightening, cropping, resizing and saving of your images, returning them to you in an easy, ready-to-use format. Read more about website image optimisation>></p>
	    			</div>
	    		</div>

    		</div>
    	</div>
    </div>
    <div class="row-fluid">
    	<div class="get-queto-bottom-area">
    		<div class="container">
    		
    			<h1>We make your pictures work for you. Quick turnaround & competitive prices.</h1>
    			<p>Let us know what you need and we will give you the best possible price.</p><br>
    			<div class="bottom_queto_area">
	    			<div class="form-group">
						<textarea class="form-control"  id="quote-inpt"></textarea>
				    	<button type="submit" class="btn btn-lg btn-primary btn-block cont_btn">Continue>></button>
			    	</div>
			    </div>
    		</div>
    	</div>
    </div>
	




<?php 
 get_footer();
?>
