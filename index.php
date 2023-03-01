<?php get_header();?>

<main class="site__main">
    <h3>exercice1</h3>
    <h2>this is the first page of my try</h2>
<?php
if (have_posts()):
     while (have_posts()) : the_post();
       // the_title('<h1>','<h1>');
          //the_content();?>
          <h1><a href="<?php the_permalink();?>"><?= get_the_title() ?></a></h1>
          <?php

        // the_excerpt();
        echo wp_trim_words(get_the_excerpt(), 4);
    endwhile;
endif;
?> 
</main>
<?php get_footer(); ?>