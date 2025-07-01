<?php //$top_border = (get_sub_field('top_border') === 'yes') ? "top-border" : ""; ?>

<?php if ( get_sub_field('section_heading_title') || get_sub_field('section_heading_intro') ): ?>
  <div class="row columns">
    <div class="fc-section-heading"> 
      <div class="row">
        <div class="small-12 columns">
          <?php if ( get_sub_field('section_heading_title') ): ?>
            <h2 class="g-section-title"><?php echo get_sub_field('section_heading_title'); ?></h2>
          <?php endif; ?>
          
          <?php if ( get_sub_field('section_heading_intro') ): ?>
            <p class="g-section-intro"><?php echo get_sub_field('section_heading_intro'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>  
  </div>
<?php endif; ?>