

<?php
get_header()?>

<main class="site__main">
<h1> Erreur 404</h1>
    <h5>page introuvable, vous pouvez tenter un recherche</h5>
    <!-- ////////////////////////////////////////////// -->
    <div class="menusearch">
        <input  type="checkbox" id="chkBurger">
        <?= get_search_form(); ?>
    </div>
  <!-- ///////////////////////////////////// -->

        <h5>Nos choix de cours</h5>
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




    <h5>Les notes de cours</h5>
    <aside class="site__center">
     
     <?php 
     $category = get_queried_object();
     if (isset($category))
     {
         $lemenu = $category->slug;
     }else{
         $lemenu = "cours";
     }

     wp_nav_menu(array(
         "menu" => $lemenu,
         "container" => "nav"
     )); ?>
 </aside>
</main> 
<?php get_footer(); ?>













    
  

  

