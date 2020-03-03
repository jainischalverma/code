<?php
	get_header();
	if(have_posts()):
		while(have_posts()):
			the_post();
?>
<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header<?php if ( has_post_thumbnail() ) { ?> style="background-image: url(<?php the_post_thumbnail_url(); ?>);"<?php } ?>>
		<div class="inner">
			<h1><?php the_title(); ?></h1> <?php //edit_post_link(); ?>
			<div><?php the_content(); ?></div>
		</div>
	</header>
	<div id="team">
		<section class="inner">
			<h2>Meet our team</h2>
			<ul>
				<li>
					<img src="<?php echo(get_stylesheet_directory_uri()) ?>/img/temp/greg.jpg" width="310" height="310" alt=""/>
					<div class="name">Greg Osuri</div>
					<div class="job_title">Chief Executive Officer</div>
					<div class="social">
						<a href="#" class="linkedin">LinkedIn</a>
					</div>
				</li>
				<li>
					<img src="<?php echo(get_stylesheet_directory_uri()) ?>/img/temp/greg.jpg" width="310" height="310" alt=""/>
					<div class="name">Adam Bozanich</div>
					<div class="job_title">Chief Technology Officer</div>
					<div class="social">
						<a href="#" class="linkedin">LinkedIn</a>
					</div>
				</li>
				<li>
					<img src="<?php echo(get_stylesheet_directory_uri()) ?>/img/temp/greg.jpg" width="310" height="310" alt=""/>
					<div class="name">Boz Menzalji</div>
					<div class="job_title">General Manager</div>
					<div class="social">
						<a href="#" class="linkedin">LinkedIn</a>
					</div>
				</li>
			</ul>
		</section>
	</div>
</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>