<?php

get_header()?>

<main class="site__main">
<h1> Erreur 404</h1>
    <p>page introuvable, vous pouvez tenter un recherche</p>
    <div class="menusearch">
    <input type="checkbox" id="chkBurger">
    <?= get_search_form(); ?>
</div>
  
    <section class="blocflex">
        <?php 
        if (have_posts()):
            while (have_posts()) : the_post(); ?>
                <?php 
                $ma_categorie = "note-wp";
                if (in_category('galerie')){$ma_categorie = "galerie";}
                get_template_part("template-parts/categorie", $ma_categorie);
             endwhile; 
        endif; ?>   
    </section>
</main> 
<?php get_footer(); ?>
</main>






    
  

  

