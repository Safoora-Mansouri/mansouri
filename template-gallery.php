<?php
/**
 * Template name: Gallery
 *
 */
?>

<?php get_header(); ?>

<main class="site__main">
  <?php
  if ( have_posts() ) : the_post(); ?>

    <h1><?= get_the_title(); ?></h1>
    <?php the_content(); ?>

    <?php
    $args = array(
      'post_type'      => 'attachment',
      'post_mime_type' => 'image',
      'post_status'    => 'inherit',
      'posts_per_page' => -1,
      'orderby'        => 'title',
      'order'          => 'ASC',
    );

    $query_images = new WP_Query( $args );
    $images = array();
    $image_count = 0;
    
    foreach ( $query_images->posts as $image ) {
        if ( $image_count < 3 ) {
            $images[] = wp_get_attachment_url( $image->ID );
            $image_count++;
        } else {
            break;
        }
    }
    ?>

    <div class="gallery">
      <?php foreach ( $images as $image_url ): ?>
        <div class="gallery-item">
          <img src="<?php echo $image_url; ?>" alt="Gallery Image">
        </div>
      <?php endforeach; ?>
    </div>

  <?php endif; ?>
</main><!-- #main -->

<?php
get_footer();
