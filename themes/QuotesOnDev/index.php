<?php get_header(); ?>

<?php if( have_posts() ) :?>
    <div class="left-quote-container">
        <i class="fas fa-quote-left"></i>
    </div>
    <section id="quotes-content">

<!-- The WordPress Loop: loads post content -->
    <?php while( have_posts() ) :
        the_post(); ?>
    
    <h1><?php the_content(); ?></h1>
    
    <h4>-<?php the_title();echo ", " ?>
        <a class="quoteslink" href="<?php echo get_post_meta( get_the_ID(), '_qod_quote_source_url', true );?>"><span><?php echo get_post_meta( get_the_ID(), '_qod_quote_source', true );?></span></a>
    </h4>
        <!-- Loop ends -->
    <?php endwhile;?>

    </section>
    <div class="right-quote-container">
        <i class="fas fa-quote-right"></i>
    </div>
    <div class="button-wrapper">
        <button id="quote-button">Show Me Another!</button>
    </div>

    <!-- <?php the_posts_navigation();?> -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>