<footer>
    <h2>Footer</h2>
    <p>
        &copy;
        <?php echo date( 'Y' ); // Use PHP to keep the year current. Let it do the heavy lifting for you ?>
        Charles on TechCareers Program by Manpower
    </p>
    <?php if ( function_exists( 'output_hello_world' ) ) : // check if the plugin function exists ?>
        <aside>
            <?php output_hello_world(); ?>
        </aside>
    <?php endif; ?>
</footer>
    <?php wp_footer(); ?>
</body>
</html>