<?php
//template footer.php
?>
<footer class="site__footer">
    <section class="footer__widget">
        <div> <?php dynamic_sidebar( 'pied-page-1' ); ?></div>
        <div> <?php dynamic_sidebar( 'pied-page-2' ); ?></div>
        <div> <?php dynamic_sidebar( 'pied-page-3' ); ?></div>
    </section>
    <section class="footer__lien">
        <div><?php wp_nav_menu(array(
                                'menu'=>'lien-externe-1',
                                'container' => 'nav',
                                'container_class'=> 'footer__lien__nav')); ?></div>
        <div><?php wp_nav_menu(array(
                                'menu'=>'lien-externe-2',
                                'container' => 'nav',
                                'container_class' => 'footer__lien__nav')); ?></div>
        <div><?php wp_nav_menu(array(
                                'menu'=>'lien-externe-3',
                                'container' => 'nav',
                                'container_class' => 'footer__lien__nav')); ?></div>
    </section>
   
</footer>
<?php wp_footer(); ?>
</body>
</html>
