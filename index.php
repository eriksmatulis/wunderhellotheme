<!DOCTYPE html>
<html>
    <head>
<!--    Import Flowbite CSS    -->
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
        <?php wp_head(); ?>
        <title><?php bloginfo('name'); ?></title>
    </head>
    <body class="bg-indigo-200">
    <?php get_header(); ?>
<!-- Reserved for hero section -->
<div id="default-carousel" class="relative w-9/10 max-h-9/10 m-auto" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/car1.avif" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Project 1">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="text-center text-xl">HI</div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/car2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Project 2">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/car3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Project 3">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/car4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Project 4">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/car5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Project 5">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<!-- Reserved for custom section and projects CPT -->
<!--border-2 border-sky-900-->
<!-- div for containing all posts   -->
    <div class="m-auto w-9/10 border-1 border-b-indigo-500">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID();?>" class="bg-purple-200 hover:bg-rose-200 hover:transition duration-500 pl-20 pb-10 pt-5" >
                <h2><a class="text-md py-8 text-orange-800" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="pt-2 pl-2"><?php the_excerpt(); ?></div>
                <hr class="mt-2 w-2/3">
            </article>

        <?php
        endwhile;
        else :
            echo '<p>No posts found!</p>';
        endif;
        ?>
    </div>
        <?php get_sidebar(); ?>
        <?php get_footer(); ?>
        <!--  use wp_footer(), otherwise admin navbar won't appear  -->
        <?php wp_footer(); ?>

<!-- Import Flowbite CSS -->
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </body>
</html>