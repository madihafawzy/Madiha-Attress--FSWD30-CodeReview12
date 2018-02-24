<?php get_header(); ?>


	<div class="container">
		
		<div class="blog">
			<div class="col-lg-8 col-md-8 col-8">
				<div class="post">
					
			        <div class="thumbo">
			          <?php
			           if(has_post_thumbnail()) : ?>
			          <?php the_post_thumbnail(); ?>
			          <?php endif;?>
			        </div>
			        
					<div class="post">
						<?php

				            if (have_posts()) : while (have_posts()) : the_post();
				          ?>
				          <!-- <div> 
				            <?php the_title(); // blog post title ?>
				          </div> -->
				          <h2>
				            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?>
				            </a>
				          </h2>
				          
				          <p class="entry">
				            <?php the_content(); ?>
				          </p>

				          <?php comments_template(); ?>

				          <?php endwhile; else:  ?>
				          <p>
				            <?php echo('No Posts Found'); ?>
				          </p>
				          <?php endif; ?>
					</div>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-4 sidebar">
					<ul class="nav nav-pills nav-stacked left">
				        <li>    
				          <a href="#github">New</a> 
				        </li>  
				        <li>
				          <a href="character.html">test</a>
				        </li>  
				        <li>
				          <a href="#css">Test</a>
				        </li>
		      		</ul>
		      		<div class="sidebarBoxes">
		      			<h5></h5>
		      			<p></p>
		      		</div>
		      		<div class="sidebarBoxes">
		      			<h5></h5>
		      			<p></p>
		      		</div>
		      		<div class="sidebarBoxes">
		      			<h5></h5>
		      			<p></p>
		      		</div>
				</div>
		</div>
	</div>

<?php get_footer(); ?>
