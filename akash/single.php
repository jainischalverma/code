<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( has_post_thumbnail() ) { $fimage = get_the_post_thumbnail_url(get_the_ID(),'full');  } ?>
<div class="fimage" style="background:url(<?php echo $fimage; ?>) no-repeat center center; background-size:cover;"></div>

<?php endwhile; endif; ?>

<section id="singlecontent">
<div class="inner">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="sheet">
    <div class="meta"><i class="dashicons dashicons-admin-users"></i> <?php the_author();?> <span><?php the_date( 'F j, Y' ); ?></span> <?php the_category(); ?> </div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="exr"><?php the_excerpt(); ?></div>
    <div class="entry"><?php the_content(); ?></div>
    
    <ul class="singlesocial">
		<li class="twitter"><a href="" title="Twitter"><span>Twitter</span></a></li>
		<li class="facebook"><a href="" title="Facebook"><span>Facebook</span></a></li>
		<li class="reddit"><a href="" title="Reddit"><span>Reddit</span></a></li>
	</ul>

<div class="paginate">
<?php previous_post_link( '%link', '&larr; Previous' ); ?>
<?php next_post_link( '%link', 'Next &rarr;' ); ?>
</div>
 
</div>


<?php endwhile; endif; ?>

<div class="sidebar"><?php get_sidebar(); ?></div>

</div>
</section>


<section id="related">
<div class="inner">
<h2 class="relatedtitle">Latest Stories</h2>
<?php 
$args = array('category_name' => 'uncategorized');
$wp_query = new WP_Query($args);
if($wp_query->have_posts()) :  while($wp_query->have_posts()) :  $wp_query->the_post();
?>
<div class="relpost">
<?php if ( has_post_thumbnail() ) { $rimage = get_the_post_thumbnail_url(get_the_ID(),'full');  } ?>
<img src="<?php echo $rimage;?>" alt="">
    <div class="relinner">
          <div class="meta"><?php the_author();?> <span><?php the_date( 'F j, Y' ); ?></span> </div>
         <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="exr"><?php the_excerpt(); ?></div>
        <div class="readmore"><a href="<?php the_permalink(); ?>">Read More &rarr;</a></div>
    </div>
</div>

<?php endwhile; endif; ?>
</div>
</section>

<?php get_footer(); ?>