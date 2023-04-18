

<?php
get_header()?>

<main class="site__main">
<h1> Erreur 404</h1>
    <p>page introuvable, vous pouvez tenter un recherche</p>
    <!-- ////////////////////////////////////////////// -->
    <div class="menusearch">
        <input  type="checkbox" id="chkBurger">
        <?= get_search_form(); ?>
    </div>
  <!-- ///////////////////////////////////// -->

        <p>Nos choix de cours</p>
        <aside class="site__center">
     
        <?php 
        $category = get_queried_object();
        if (isset($category))
        {
            $lemenu = $category->slug;
        }else{
            $lemenu = "note-wp";
        }

        wp_nav_menu(array(
            "menu" => $lemenu,
            "container" => "nav"
        )); ?>
    </aside>
</main> 
<?php get_footer(); ?>
</main>







    
  

  

