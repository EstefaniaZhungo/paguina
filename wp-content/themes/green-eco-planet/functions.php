<?php

add_action( 'wp_enqueue_scripts', 'green_eco_planet_chld_thm_parent_css' );
function green_eco_planet_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'green_eco_planet_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );
    
}

/**
* Changed the blog layout to 3 columns
*/
add_filter( 'bizberg_sidebar_settings', 'green_eco_planet_sidebar_settings' );
function green_eco_planet_sidebar_settings(){
	return '4';
}

/**
* Change the theme color
*/
add_filter( 'bizberg_theme_color', 'green_eco_planet_change_theme_color' );
add_filter( 'bizberg_header_menu_color_hover_sticky_menu', 'green_eco_planet_change_theme_color' );
add_filter( 'bizberg_header_button_color_sticky_menu', 'green_eco_planet_change_theme_color' );
add_filter( 'bizberg_header_button_color_hover_sticky_menu', 'green_eco_planet_change_theme_color' );
function green_eco_planet_change_theme_color(){
    return '#6ab43e';
}

add_filter( 'bizberg_header_button_border_color', 'green_eco_planet_btn_border_color' );
add_filter( 'bizberg_header_button_border_color_sticky_menu', 'green_eco_planet_btn_border_color' );
function green_eco_planet_btn_border_color(){
    return '#478a41';
}

/**
* Change the header menu color hover
*/
add_filter( 'bizberg_header_menu_color_hover', 'green_eco_planet_header_menu_color_hover' );
function green_eco_planet_header_menu_color_hover(){
    return '#6ab43e';
}

/**
* Change the button color of header
*/
add_filter( 'bizberg_header_button_color', 'green_eco_planet_header_button_color' );
function green_eco_planet_header_button_color(){
    return '#6ab43e';
}

/**
* Change the button hover color of header
*/
add_filter( 'bizberg_header_button_color_hover', 'green_eco_planet_header_button_color_hover' );
function green_eco_planet_header_button_color_hover(){
    return '#6ab43e';
}

add_filter( 'bizberg_slider_title_box_highlight_color', function(){
    return '#6ab43e';
});

add_filter( 'bizberg_slider_arrow_background_color', function(){
    return '#6ab43e';
});

add_filter( 'bizberg_slider_dot_active_color', function(){
    return '#6ab43e';
});

add_filter( 'bizberg_slider_gradient_primary_color', function(){
    return 'rgba(106,180,62,0.65)';
});

add_filter( 'bizberg_read_more_background_color', function(){
    return '#6ab43e';
});

add_filter( 'bizberg_read_more_background_color_2', function(){
    return '#6ab43e';
});

add_filter( 'bizberg_link_color', function(){
    return '#6ab43e';
});

add_filter( 'bizberg_link_color_hover', function(){
    return '#6ab43e';
});

add_filter( 'bizberg_blog_listing_pagination_active_hover_color', function(){
    return '#6ab43e';
});

add_filter( 'bizberg_sidebar_widget_link_color_hover', function(){
    return '#6ab43e';
});

add_filter( 'bizberg_sidebar_widget_title_color', function(){
    return '#6ab43e';
});

add_filter( 'bizberg_footer_social_icon_background', function(){
    return '#6ab43e';
});

add_filter( 'bizberg_footer_social_icon_color', function(){
    return '#fff';
});

add_filter( 'bizberg_getting_started_screenshot', function(){
    return true;
});

add_filter( 'bizberg_banner_title', 'green_eco_planet_banner_title' );
function green_eco_planet_banner_title(){
    return current_user_can( 'edit_theme_options' ) ? esc_html__( 'Martin Peterson' , 'green-eco-planet' ) : '';
}

add_action( 'after_setup_theme', 'green_eco_planet_setup_theme' );
function green_eco_planet_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
}