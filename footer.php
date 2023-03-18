<?php
//template footer.php
?>
<footer class="site__footer">
    <h3>tous les droits sont réservés</h3>
    <?php wp_nav_menu(array(
                    'menu'  => 'footer',
                    'container' => 'nav'
                )); ?> 
</footer>
<?php wp_footer(); ?>
</body>
</html>
