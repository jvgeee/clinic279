<section class="article-list">

		<?php
			$args = array(						   
					   'post_type' => 'post',
					   'posts_per_page' => 2,
					   'paged' => ( get_query_var('page') ? get_query_var('page') : 1),
					);

			query_posts($args);
			while (have_posts()) : the_post();
		 /* Do whatever you want to do for every page... */
		?>
			<article class="list-post">
				<p class="post-date"><?php the_date(); ?></p>
				<h3><a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_content(); ?></p>
			</article>
		<?php endwhile; 

			wp_pagenavi();
			wp_reset_query();  // Restore global post data
		?>
	
		</section>