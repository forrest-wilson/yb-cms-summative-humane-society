<?php
/**
 * Template part for main navigation
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Humane_Society
 */

?>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(1, 66, 130);">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/cat-and-dog.gif" alt="Humane Society Logo Part" class="animal-sketch" height="100" width="100" />
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/humane-society.gif" alt="Humane Society Logo Part" class="name" style="max-width: 300px" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php 
        wp_nav_menu(array(
            "theme_location" => "primary",
            "container" => "div",
            "container_id" => "navbarNavDropdown",
            "container_class" => "navbar-collapse collapse justify-content-end",
            "menu_class" => "navbar-nav",
            "depth" => 2,
            "walker" => new WP_Bootstrap_Navwalker()
        ));
        ?>
    </div>
</nav>