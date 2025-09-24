<?php
$justify_y_1 = get_sub_field('column_1_vertical_justify');
$justify_x_1 = get_sub_field('column_1_horizontal_justify');

$reverse_on_mobile = get_sub_field('reverse_on_mobile');
$column_divider = get_sub_field('column_divider');


$justify_y_2 = get_sub_field('column_2_vertical_justify');
$justify_x_2 = get_sub_field('column_2_horizontal_justify');

$product_gallery = get_sub_field('product_gallery'); // ACF Gallery field
$product_info    = get_sub_field('product_info');    // WYSIWYG or text field

if( array_key_exists('flex_id', $args) ){
  $flex_id = $args['flex_id'];

  $style = "<style>";

  if( $reverse_on_mobile ){
    $style .= "@media (max-width: 1024px) { #$flex_id .padding-row{ display: flex; flex-direction: column-reverse; margin-bottom: -3rem;  } }";
  }

  if( $column_divider ){
    $style .= "@media (min-width: 1024px){";
    $style .= "#$flex_id .padding-row .columns{ padding-left: 2.5rem; padding-right: 2.5rem; }";
    $style .= "#$flex_id:after{ content: ''; width: 1px; height: 100%; background: rgba(0, 43, 73, 0.25); position: absolute; top: 0; left: 50%;   }";
    $style .= "}";
  }

  if( $justify_x_1 ){
    $style .= "#$flex_id .flex-column-1--content { align-items: $justify_x_1; }";
  }
  if( $justify_y_1 ){
    $style .= "#$flex_id .flex-column-1--content { justify-content: $justify_y_1; }";
  }
  if( $justify_x_2 ){
    $style .= "#$flex_id .flex-column-2--content { align-items: $justify_x_2; }";
  }
  if( $justify_y_2 ){
    $style .= "#$flex_id .flex-column-2--content { justify-content: $justify_y_2; }";
  }
  $style .= "</style>";

  echo $style;

}
?>

<div class="fc-section-columns fc-section-product-row">

  <div class="row padding-row" data-equalizer>
      <?php get_template_part('flexible/section_header'); ?>  
      <div class="small-12 large-4 columns flex-column-1">
        <div class="content content-columns flex-column-1--content" data-equalizer-watch>
        <?php 
$gallery = get_sub_field('product_gallery');
if( $gallery ): ?>
  <div class="product-gallery">

    <!-- Main image -->
    <div class="product-gallery__main">
      <img id="gallery-main-img" 
           src="<?php echo esc_url($gallery[0]['url']); ?>" 
           alt="<?php echo esc_attr($gallery[0]['alt']); ?>">
    </div>

    <!-- Thumbnails -->
    <div class="product-gallery__thumbs">
      <?php foreach( $gallery as $index => $image ): ?>
        <button 
          class="thumb <?php echo $index === 0 ? 'active' : ''; ?>" 
          data-img="<?php echo esc_url($image['url']); ?>">
          <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" 
               alt="<?php echo esc_attr($image['alt']); ?>">
        </button>
      <?php endforeach; ?>
    </div>

  </div>
<?php endif; ?>


        </div>
      </div>
      <div class="small-12 large-8 columns flex-column-2">
        <div class="content content-columns flex-column-2--content" data-equalizer-watch>
        <?php the_sub_field('product_info'); ?>
        </div>
      </div>
  
  </div>
</div>