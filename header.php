<header>
    <?php
        // Insert custom menu in header and give it tailwind classes
        wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => '
        bg-sky-50
        hover:bg-blue-100
        hover:transition duration-500
        p-2
        rounded-md
        border-1 border-indigo-500
        ' ) );
    ?>
</header>