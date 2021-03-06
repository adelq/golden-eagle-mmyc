<?php
/**
 * The template for displaying front page pages.
 *
 */
?>
<?php get_header(); ?>  
<!--Start Slider -->
	 <div class="slider-wrapper">
        <div id="container">
          <div id="example">
            <div id="slides">
              <div class="slides_container slide">
				<?php
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $mystring1 = goldeneagle_get_option('goldeneagle_slideimage1');
            $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
            $check_img_ofset = 0;
            foreach ($value_img as $get_value) {
                if (preg_match("/$get_value/", $mystring1)) {
                    $check_img_ofset = 1;
                }
            }
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.                            
            ?>
              <?php if ($check_img_ofset == 0 && goldeneagle_get_option('goldeneagle_slideimage1') != '') { ?>
                <div><?php echo goldeneagle_get_option('goldeneagle_slideimage1'); ?></div>
            <?php } else { ?> 
                <div>
                <?php if (goldeneagle_get_option('goldeneagle_slideimage1') != '') { ?>
                        <a href="<?php echo goldeneagle_get_option('goldeneagle_slidelink1'); ?>"><img  src="<?php echo goldeneagle_get_option('goldeneagle_slideimage1'); ?>" alt=""/></a>
                    <?php } else { ?>
                        <a href="#"><img  src="<?php echo get_template_directory_uri(); ?>/images/126.jpg" alt=""/></a>
                    <?php } ?></div>
                <?php } ?> 
				<?php
                //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
                $mystring2 = goldeneagle_get_option('goldeneagle_slideimage2');
                $check_img_ofset = 0;
                foreach ($value_img as $get_value) {
                    if (preg_match("/$get_value/", $mystring2)) {
                        $check_img_ofset = 1;
                    }
                }
                // Note our use of ===.  Simply == would not work as expected
                // because the position of 'a' was the 0th (first) character.
                ?>
            <?php if ($check_img_ofset == 0 && goldeneagle_get_option('goldeneagle_slideimage2') != '') { ?>
                <div><?php echo goldeneagle_get_option('goldeneagle_slideimage2'); ?></div>
            <?php } else { ?> 
                <?php if (goldeneagle_get_option('goldeneagle_slideimage2') != '') { ?>
                    <div><a href="<?php echo goldeneagle_get_option('goldeneagle_slidelink2'); ?>"><img src="<?php echo goldeneagle_get_option('goldeneagle_slideimage2'); ?>" alt=""/></a></div>
                <?php } else { ?>
				 <a href="#"><img  src="<?php echo get_template_directory_uri(); ?>/images/125.jpg" alt=""/></a>
            <?php
			} 
			}
			?>
                  </div>
			 <a href="#" class="prev"></a> <a href="#" class="next"></a>
             </div>
          </div>
        </div>
      </div>
	  <!--End Slider -->
      <div class="clear"></div>
      <!--Start Content-->
      <div class="content">  
 <?php if (goldeneagle_get_option('goldeneagle_page_heading') != '') { ?>	  <h1><?php echo stripslashes(goldeneagle_get_option('goldeneagle_page_heading')); ?></h1>
    <?php } else { ?>
        <h1>"Interior Design can be one of the most beautiful assets ever built"</h1>
		<?php } ?> 
      </div>
      <!--End Content-->
    </div>
    <script>
		
</script>
    <div class="feature-content">
      <div class="feature-box gallery">
      <div class="feature-box-inner first">
     <div class="gallery_entry1">
	 <div class="item_image1">
            <li>
			<?php if (goldeneagle_get_option('goldeneagle_featureimg1') != '') { ?>
			<a href="<?php echo goldeneagle_get_option('goldeneagle_link1'); ?>"><img src="<?php echo goldeneagle_get_option('goldeneagle_featureimg1'); ?>" class='portfolio'/></a>
			<?php } else { ?>
			<a href="#"><span class="overlay"></span><img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg"/ class='portfolio' /></a>
			<?php } ?> 
			</li>
            </div>
          </div>
	<?php if (goldeneagle_get_option('goldeneagle_firsthead') != '') { ?>
		 <h1><a href="<?php echo goldeneagle_get_option('goldeneagle_link1'); ?>"><?php echo stripslashes(goldeneagle_get_option('goldeneagle_firsthead')); ?></a></h1>
		 <?php } else { ?>
     <h1><a href="#"><?php _e('The best thing is that.','golden_eagle'); ?></a></h1>
	 <?php } ?>
      <?php if (goldeneagle_get_option('goldeneagle_firstdesc') != '') { ?>
                    <p><?php echo stripslashes(goldeneagle_get_option('goldeneagle_firstdesc')); ?></p>
                <?php } else { ?>
                    <p><?php _e('The ease with the help of which you can convert your Website.','golden_eagle'); ?></p>
                <?php } ?>        
      </div>
  		 <div class="feature-box-inner">
     <div class="gallery_entry1">
	 <div class="item_image1">
            <li>
			<?php if (goldeneagle_get_option('goldeneagle_featureimg2') != '') { ?>
			<a href="<?php echo goldeneagle_get_option('goldeneagle_link2'); ?>" ><img src="<?php echo goldeneagle_get_option('goldeneagle_featureimg2'); ?>" class='portfolio'/></a>
			<?php } else { ?>
			<a href="#"><span class="overlay"></span><img src="<?php echo get_template_directory_uri(); ?>/images/img2.jpg"/ class='portfolio' /></a>
			<?php } ?> 
			</li>
            </div>
          </div>
      <?php if (goldeneagle_get_option('goldeneagle_secondhead') != '') { ?>
		 <h1><a href="<?php echo goldeneagle_get_option('goldeneagle_link2'); ?>"><?php echo stripslashes(goldeneagle_get_option('goldeneagle_secondhead')); ?></a></h1>
		 <?php } else { ?>
     <h1><a href="#"><?php _e('The best thing is that.','golden_eagle'); ?></a></h1>
	 <?php } ?>
      <?php if (goldeneagle_get_option('goldeneagle_seconddesc') != '') { ?>
                    <p><?php echo stripslashes(goldeneagle_get_option('goldeneagle_seconddesc')); ?></p>
                <?php } else { ?>
                    <p><?php _e('The ease with the help of which you can convert your Website.','golden_eagle'); ?></p>
                <?php } ?> 
      </div>
      <div class="feature-box-inner">
      <div class="gallery_entry1">
	 <div class="item_image1">
            <li>
			<?php if (goldeneagle_get_option('goldeneagle_featureimg3') != '') { ?>
			<a href="<?php echo goldeneagle_get_option('goldeneagle_link3'); ?>"><img src="<?php echo goldeneagle_get_option('goldeneagle_featureimg3'); ?>" class='portfolio'/></a>
			<?php } else { ?>
			<a href="#"><span class="overlay"></span><img src="<?php echo get_template_directory_uri(); ?>/images/img3.jpg"/ class='portfolio' /></a>
			<?php } ?> 
			</li>
            </div>
          </div>
       <?php if (goldeneagle_get_option('goldeneagle_thirdhead') != '') { ?>
		 <h1><a href="<?php echo goldeneagle_get_option('goldeneagle_link3'); ?>"><?php echo stripslashes(goldeneagle_get_option('goldeneagle_thirdhead')); ?></a></h1>
		 <?php } else { ?>
     <h1><a href="#"><?php _e('The best thing is that.','golden_eagle'); ?></a></h1>
	 <?php } ?>
      <?php if (goldeneagle_get_option('goldeneagle_thirddesc') != '') { ?>
                    <p><?php echo stripslashes(goldeneagle_get_option('goldeneagle_thirddesc')); ?></p>
                <?php } else { ?>
                    <p><?php _e('The ease with the help of which you can convert your Website.','golden_eagle'); ?></p>
                <?php } ?> 
      </div>
      <div class="feature-box-inner">
     <div class="gallery_entry1">
	 <div class="item_image1">
            <li>
			<?php if (goldeneagle_get_option('goldeneagle_featureimg4') != '') { ?>
			<a href="<?php echo goldeneagle_get_option('goldeneagle_link4'); ?>"><img src="<?php echo goldeneagle_get_option('goldeneagle_featureimg4'); ?>" class='portfolio'/></a>
			<?php } else { ?>
			<a href="#"><span class="overlay"></span><img src="<?php echo get_template_directory_uri(); ?>/images/img4.jpg"/ class='portfolio' /></a>
			<?php } ?> 
			</li>
            </div>
          </div>

       <?php if (goldeneagle_get_option('goldeneagle_fourthhead') != '') { ?>
		 <h1><a href="<?php echo goldeneagle_get_option('goldeneagle_link4'); ?>"><?php echo stripslashes(goldeneagle_get_option('goldeneagle_fourthhead')); ?></a></h1>
		 <?php } else { ?>
     <h1><a href="#"><?php _e('The best thing is that.','golden_eagle'); ?></a></h1>
	 <?php } ?>
      <?php if (goldeneagle_get_option('goldeneagle_fourthdesc') != '') { ?>
                    <p><?php echo stripslashes(goldeneagle_get_option('goldeneagle_fourthdesc')); ?></p>
                <?php } else { ?>
                    <p><?php _e('The ease with the help of which you can convert your Website.','golden_eagle'); ?></p>
                <?php } ?> 
      </div>
      </div>
       <div class="clear"></div>
    <div class="feature-strip">
    <div class="feature-text">
	  <?php if (goldeneagle_get_option('goldeneagle_tagline_text') != '') { ?>
		 <h1><?php echo stripslashes(goldeneagle_get_option('goldeneagle_tagline_text')); ?></h1>
		 <?php } else { ?> 
		 <h1><?php _e('WordPress Themes with Single Click Installation.','golden_eagle'); ?></h1>
	 <?php } ?> 
    </div>
    <div class="feature-buttons">
	<?php if (goldeneagle_get_option('goldeneagle_tagline_button') != '') { ?>
	<a class="btn-1" href="<?php echo goldeneagle_get_option('goldeneagle_tagline_button_link'); ?>">
	<?php echo stripslashes(goldeneagle_get_option('goldeneagle_tagline_button')); ?>
	</a>
	<?php } else { ?> 
     <a class="btn-1" href="#">
	 <?php _e('Signup Now ','golden_eagle'); ?></a>
	 <?php } ?>
    </div>
    </div>
     <div class="clear"></div>
     <div class="feature-bottom">
     <div class="five columns alpha">
     <div class="feature-bottom-left">
	 <?php if (goldeneagle_get_option('goldeneagle_bottomleft_heading') != '') { ?>
	 <h2><?php echo stripslashes(goldeneagle_get_option('goldeneagle_bottomleft_heading')); ?></h2>
	 <?php } else { ?> 
     <h2><?php _e('Who We Are','golden_eagle'); ?>
	  </h2>
	  <?php } ?>
	  <?php if (goldeneagle_get_option('goldeneagle_bottomleft_description') != '') { ?>
	 <p><?php echo stripslashes(goldeneagle_get_option('goldeneagle_bottomleft_description')); ?></p>
	 <?php } else { ?> 
     <p>MMYC was founded in 1999 as an umbrella organization for Muslim Youth in the midwest.</p><p>MMYC is a non-profit organization established for the youth, by the youth.  Our mission is to please Allah by serving the Muslim Ummah and helping to strengthen faith.  Our goal is to create a unified environment for Muslims all across Midwest America, where youth can come together and establish life long friendships with each other and Allah (SWT).</p>
	 <?php } ?>
     </div>
     </div>
     <div class="six columns">            
    <div class="feature-blog">
	<?php if (goldeneagle_get_option('goldeneagle_bottom_blog') != '') { ?>
    <h2><?php echo stripslashes(goldeneagle_get_option('goldeneagle_bottom_blog')); ?></h2>
	<?php } else { ?> 
	<h2><?php _e('Our Blog','golden_eagle'); ?></h2>
	<?php } ?>
	<?php query_posts( 'posts_per_page=2' ); ?>
            <?php if (have_posts()) :  while ( have_posts() ) : the_post(); ?>
    <div class="feature-blog-item">
    <div class="feature-blog-item-image">
    <a href="<?php the_permalink() ?>"><?php goldeneagle_get_image(65, 60); ?> </a>   
    </div>
	<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    <?php echo goldeneagle_custom_trim_excerpt(8); ?>	
    </div>  
	<?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
    </div>
	
    </div>
     <div class="five columns omega">
     <div class="feature-bottom-right">
	 <?php if (goldeneagle_get_option('goldeneagle_testimonial') != '') { ?>
	 <h2><?php echo stripslashes(goldeneagle_get_option('goldeneagle_testimonial')); ?></h2>
	 <?php } else { ?> 
   	<h2><?php _e('Services','golden_eagle'); ?></h2>
	<?php } ?>
    <div class="embed-container">
	<?php if (goldeneagle_get_option('goldeneagle_testimonial_text') != '') { ?>	
     <p><?php echo stripslashes(goldeneagle_get_option('goldeneagle_testimonial_text')); ?></p> 
	 <?php } else { ?> 
     <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Finkthemes&width=250&height=210&colorscheme=light&show_faces=true&border_color&stream=false&header=true" scrolling="yes" frameborder="0" style="border:none; width:250px; height:210px;" allowTransparency="true"></iframe>	 
	  <?php } ?>
	</div>	  
     </div>
     </div>
     </div>
    </div>
	<?php get_footer(); ?>