<?php
add_action( 'wp_enqueue_scripts', 'sirpi_child_enqueue_styles', 100);
function sirpi_child_enqueue_styles() {
	wp_enqueue_style( 'sirpi-parent', get_theme_file_uri('/style.css') );
}