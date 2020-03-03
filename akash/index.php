<?php get_header(); ?>

<div class="blogheader"><div><span>Akash</span>Blog</div></div>

<section id="singlecontent" class="blogbottom">
<div class="inner">

<div class="sheetsouter">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if ( has_post_thumbnail() ) { $fimage = get_the_post_thumbnail_url(get_the_ID(),'full');  } ?>
    <a href="<?php the_permalink(); ?>"><span style="background:url(<?php echo $fimage; ?>) no-repeat center center; background-size:cover;" class="blogimage"></span></a>
    <div class="sheets">
        <div class="meta"><i class="dashicons dashicons-admin-users"></i> <?php the_author();?> <span><?php the_date( 'F j, Y' ); ?></span> <?php the_category(); ?> </div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="exr"><?php the_excerpt(); ?></div>
        <div class="entry"><?php echo content_fn(100); ?> <div class="readmore"><a href="<?php the_permalink(); ?>">Read More &rarr;</a></div> </div>
    </div>
    <?php endwhile; endif; ?>
</div>

<div class="sidebar"><?php get_sidebar(); ?></div>

</div>

</section>



<?php get_footer(); ?>