<?php
	get_header();
	if(have_posts()):
		while(have_posts()):
			the_post();
?>
<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     	
	<div id="hero">
	<h1 class="toptitle"><?php the_title(); ?></h1>
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		<?php the_content(); ?>
	</div>
	<?php
		if(have_rows('why_akash')):
			while(have_rows('why_akash')):
				the_row();
	?>
	<section id="why">
		<div class="inner">

				<?php if(get_sub_field('why_heading')): ?>
				<h2><?php the_sub_field('why_heading'); ?></h2>
				<?php
					endif;
					if(get_sub_field('why_description')):
				?>
				<div><?php the_sub_field('why_description'); ?></div>
				<?php endif; ?>

			<?php if(have_rows('why_sections')): ?>
			<div class="content">
				<?php
					while(have_rows('why_sections')):
						the_row();
						$image = get_sub_field('why_image');
				?>
				<section<?php if($image) { ?> style="background-image: url(<?= $image; ?>);"<?php } ?>>
					<?php if(get_sub_field('why_item_title')): ?>
					<h3><?php the_sub_field('why_item_title'); ?></h3>
					<?php
						endif;
						if(get_sub_field('why_item_description')):
					?>
					<div><?php the_sub_field('why_item_description'); ?></div>
					<?php endif; ?>
				</section>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</section>
	<?php
			endwhile;
		endif;
		// end why1
		if(have_rows('why2')):
			while(have_rows('why2')):
				the_row();
	?>
	<div class="dark" id="why2">
		<?php
		$i=1;
		if(have_rows('why2_sections')):
			while(have_rows('why2_sections')):
				the_row();
				$why2_img = get_sub_field('why2_image');
		?>
			<section id="why2_s<?php the_row_index(); ?>">
				<div class="inner">
				<?php if($i<3) { ?>
					<div>
						<h2><?php the_sub_field('why2_heading'); ?></h2>
						<div><?php the_sub_field('why2_description'); ?></div>
					</div>
					<?php
						if($why2_img) {
							echo(wp_get_attachment_image($why2_img));
						}} else {
					?>
					<div class="thirdimg">
    					<div class="thirdimg1">
    						<h2><?php the_sub_field('why2_heading'); ?></h2>
    						<div><?php the_sub_field('why2_description'); ?></div>
    					</div>
    					<div class="thirdimg2">
    						<?php
    						if($why2_img) {
    							echo(wp_get_attachment_image($why2_img));
    						}
    					    ?>
    					</div>
					</div>
					<?php } ?>
				</div>
			</section>
		<?php $i++;
			endwhile;
		endif;
		if(have_rows('why2_cta_buttons')):?>
			<div class="cta">
				<?php
					while(have_rows('why2_cta_buttons')):
						the_row();
				?>	
				<a href="<?php the_sub_field('why2_button_link') ?>" class="btn_<?php the_sub_field('why2_button_type'); ?>"><?php the_sub_field('why2_button_text') ?></a>
				<?php endwhile; ?>	
			</div>
		<?php endif; ?>	
	</div>
	<?php
			endwhile;
		endif;
	?>	
	<section id="partners">
		<div class="inner">
			<h2>Partners</h2>
			<ul>
				<li><img src="<?php echo(get_stylesheet_directory_uri()); ?>/img/temp/Ripple-Logo.png" alt="Ripple" width="101" height="30" /></li>
				<li><img src="<?php echo(get_stylesheet_directory_uri()); ?>/img/temp/coil-logo.png" alt="Coil" width="59" height="25" /></li>
				<li><img src="<?php echo(get_stylesheet_directory_uri()); ?>/img/temp/logo-packet.png" alt="Packet" width="91" height="33" /></li>
				<li><img src="<?php echo(get_stylesheet_directory_uri()); ?>/img/temp/logo-interledger.png" alt="Interledger" width="116" height="26" /></li>
				<li><img src="<?php echo(get_stylesheet_directory_uri()); ?>/img/temp/solana-white-horizontal.svg" alt="Solana" width="171" height="34" /></li>
				<li><img src="<?php echo(get_stylesheet_directory_uri()); ?>/img/temp/cosmos-logo-black.png" alt="Cosmos" width="123" height="21" /></li>
				<li><img src="<?php echo(get_stylesheet_directory_uri()); ?>/img/temp/tendermint-logo-black-1.png" alt="Tendermint" width="145" height="30" /></li>
			</ul>
		</div>
	</section>
	<?php 
	$product = get_field('akash_supermini');
	if( $product ): ?>
	<section id="supermini">
		<div class="inner">
			<h2><?php echo $product['supermini_title']; ?></h2>
			<p><?php echo $product['supermini_desc']; ?></p>

			<a href="" class="cta">Reserve Yours Now</a>
			<div class="video"><img src="<?php echo(get_stylesheet_directory_uri()); ?>/img/temp/vide.jpg" alt="" width="888" height="500" /></div>
		</div>
	</section>	
	<?php endif; ?>
	<section id="news">
		<div class="inner">
		
			<h2>News &amp; Events</h2>
			
			<ul>
			<?php if(have_rows('akash_news')): while(have_rows('akash_news')): the_row();	?>	
			
			    <li>
					<img src="<?php the_sub_field('news_image'); ?>" alt="" width="280" height="210" />
					<small class="category">Blog</small>
					<div class="title"><?php the_sub_field('news_title'); ?></div>
					<a href="" class="more">Read more</a>
				</li>
				
			<?php endwhile; endif; ?>
			</ul>
			
		</div>
	</section>
	<?php
	$love = get_field('akash_love');
	?>
	<section id="love">
		<div class="inner">
			<h2><?php echo $love['wall_title']; ?></h2>
			<div><?php echo $love['wall_description']; ?></div>
			<div class="testimonials">
				<div class="testi-nav">
					<span class='dashicons dashicons-arrow-left-alt2' data-n='-1' style='display: none;'></span>
					<span class='dashicons dashicons-arrow-right-alt2' data-n='+1'></span>
				</div>
				<?php foreach ($love['bio_group'] as $group) {	?>

				<section class="testimonial">
				
				   <div class="biopic">
				        <img src="<?php echo $group['bio_headshot']; ?>" alt="" width="216" height="215" class="bioimage" />
				   </div>
				   
				   <div class="biotext">	
	    				 <img src="<?php echo $group['bio_logo']; ?>" alt="" /><br><br>
	    				<blockquote>
	    					<p><?php echo $group['bio_description']; ?></p>
	    				</blockquote>
	    				<cite><span><?php echo $group['bio_name']; ?></span> | <?php echo $group['bio_title']; ?></cite>
					</div>
				</section>
				<?php };	?>
			</div>
		</div>
	</section>
	<div id="tweets">
		<div class="inner">
			<div>
				<p><b>Zaki Manian</b> @zmanian · Feb 6</p>
				<p>As far as I can tell, @akashnet_ is basically what Dfinity was trying to be</p>
				<a href="">Follow</a>
			</div>
			<div>
				<p><b>LitBit86</b> @bittybitbit86 · Feb 6 </p>
				<p>Thanks for the great tech!</p>
				<a href="">Follow</a>
			</div>
		</div>
	</div>
</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>