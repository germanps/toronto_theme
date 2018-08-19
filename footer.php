    </div> <!-- #contenido -->

    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <nav id="footer-navegation" class="footer-navigation">
            <?php wp_nav_menu( array( 
                'theme_location' => 'menu_principal',
                'menu_class' => 'menu-footer'
                ) 
            ); ?>
            </nav>
        </div>
        <div class="copyright">
            <p>Visita Toronto <?php echo date('Y') ?></p>
        </div>
    </footer>

</div> <!-- #page -->

</body>
</html>