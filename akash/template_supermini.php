<?php /* Template Name: Supermini */ ?>
<?php get_header(); ?>

<div id="hero" class="supermini">
	<h1 class="toptitle white"><?php the_title(); ?></h1>
	<p><?php the_field('small_label'); ?></p>
	<div class="superminibtn"><a class="wp-block-button__link" href="<?php the_field('button_url'); ?>"><?php the_field('button_text'); ?></a></div>
</div>


<section id="superminihow">
    <div class="inner">
    				<h2><?php the_field('how_heading'); ?></h2>
    				<p><?php the_field('how_description'); ?></p>
    				<div class="imagesection">
    					<?php if(have_rows('how_features')): while(have_rows('how_features')): the_row(); ?>
    					    <div>
    					    <img src="<?php the_sub_field('image'); ?>" alt="">
    					    <h4><?php the_sub_field('title'); ?></h4>
    					    </div>
    					<?php endwhile; endif; ?>
    				</div>
    				
    </div>
</section>


<section id="superminifeatures" class="blackbg">
    <div class="inner">
        <h2><?php the_field('features_heading'); ?></h2>
        <h3><?php the_field('features_subheading'); ?></h3>
        
           <div class="flist">
            <?php if(have_rows('feature_list')): while(have_rows('feature_list')): the_row(); ?>
			    <div><?php the_sub_field('item'); ?></div>
    	    <?php endwhile; endif; ?>
    	    </div>
    	    
    	    <div class="benefits">
    	         <div class="blist">
    	            <h3><?php the_field('benefits_subheading'); ?></h3>
                    <?php if(have_rows('benefits')): while(have_rows('benefits')): the_row(); ?>
                        <div>
            			    <h4><?php the_sub_field('title'); ?></h4>
            			    <p><?php the_sub_field('description'); ?></p>
            			</div>
            	    <?php endwhile; endif; ?>
            	 </div>
    	         
    	    </div>
    				
    </div>
</section>


<section id="superminirender">
    <div class="inner">
        <div class="render"></div>
    </div>
</section>

<section id="superminiorder">
    <div class="inner">
       <h2> Pre-Order Your Akash Supermini  </h2>
       <h3> Limited Supply at Launch. Shipping Fall 2020. </h3>
       <h4> Help transform the future of the cloud, and easily earn income!  </h4>
        <h5>Exclusive Pre-Order Price  </h5>
        <div class="prices">
            <div><h3>$1000</h3> <span>Before</span></div>
            <div><h3>$750</h3> <span>After</span></div>
        </div>
        <a href="" class="btn">Order Now</a>
    </div>
</section>


<?php get_footer(); ?>