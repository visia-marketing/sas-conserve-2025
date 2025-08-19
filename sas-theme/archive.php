<article class="post-archive">


<section class="fc-section" id="archive-header">
    <div class="fc-section-columns">
        <div class="row padding-row">
            <div class="small-12 medium-6 columns">
                <div class="content content-columns">
                <h1><?php echo get_queried_object()->label; ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
  #archive-header{
    background-image: url(/wp-content/uploads/2025/07/Rectangle-15365.png);
    position: relative;
    overflow: hidden;
    background-size: cover;
  }
</style>




  <section class="fc-section-columns fc-section-cards">
    <div class="row " data-equalizer data-equalize-by-row="true">
      
      <?php if (!have_posts()) : ?>
        <div class="alert alert-warning">
          <?php _e('Sorry, no results were found.', 'visia_starter_theme'); ?>
        </div>
        <?php get_search_form(); ?>
      <?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
        <div class=" small-12 medium-4 columns <?php echo get_post_type(); ?>-card ">
            <div class="content content-cards" data-equalizer-watch>

                <div class="card-image">
                    <div class="card-image-inner">
                        <?php echo get_the_post_thumbnail( get_the_ID(), 'medium'); ?>
                    </div>
                </div>

                <h3 class="card-title">
                    <a href="<?php echo get_the_permalink( get_the_ID() ); ?>">
                        <?php echo get_the_title( get_the_ID() ); ?>
                    </a>
                </h2>
            
                <p class="card-p">
                    <?php echo get_the_excerpt( get_the_ID() ); ?>   
                </p>

                <a href="<?php echo get_permalink( get_the_ID() ); ?>">
                    Read More
                </a>
                    
            
            </div>
        </div>
      <?php endwhile; ?>

      

    </div>

    <div class="row">
      <div class="small-12 column">
        <?php the_posts_navigation(); ?>
      </div>
    </div>
  </section>

</article>



