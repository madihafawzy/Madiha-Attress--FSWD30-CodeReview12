<?php get_header(); ?>


	<div class="container">
		
		<div class="blog">
			<div class="col-lg-8 col-md-8 col-8">
				<div class="post">
					
			        <div class="thumbo">
			          <?php if(has_post_thumbnail()) : ?>
			          <?php the_post_thumbnail(); ?>
			          <?php endif;?>
			        </div>
			        
					<div class="post">

						<?php
						//i can use while loop to check if i have posts
				            if (have_posts()) : while (have_posts()) : the_post();
				          ?>
				          <!-- <div> 
				            <?php the_title(); // blog post title ?>
				          </div> -->
				          <h2>
				            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?>
				            </a>
				          </h2>
				          
				          <p class="numbers">

				            <?php //If i want to reduce a number of characters that are displayed under the blog post
				            the_excerpt(); ?>
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
				<?php
			       if(is_active_sidebar('sidebar')):
			       dynamic_sidebar('sidebar');
			       endif;
				?>
		</div>
	</div> 
</div> 

<?php get_footer(); ?>