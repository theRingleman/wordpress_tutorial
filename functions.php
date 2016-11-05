<?php

  // Register custom navigation walker
  require_once('wp_bootstrap_navwalker.php');

  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-header' );
  add_theme_support( 'custom-background' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'html5');
  add_theme_support( 'menus' );

  add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Primary Navigation', 'wordpress-tutorial' ) );
						register_nav_menu( 'posts', __( 'Posts', 'wordpress-tutorial' ) );
						register_nav_menu( 'categories', __( 'Categories', 'wordpress-tutorial' ) );
        }
    endif;

  if (function_exists('register_sidebar')) {

  	register_sidebar(array(
  		'name' => 'Footer Widget 1',
  		'id'   => 'footer-widget-1',
  		'description'   => 'This is a widget for the footer.',
  		'before_widget' => '<div class="col-sm-2">',
  		'after_widget'  => '</div>',
  		'before_title'  => '<p class="footer-heading">',
  		'after_title'   => '</p>'
  	));

    register_sidebar(array(
  		'name' => 'Footer Widget 2',
  		'id'   => 'footer-widget-2',
  		'description'   => 'Footer widget 2.',
  		'before_widget' => '<div class="col-sm-2">',
  		'after_widget'  => '</div>',
  		'before_title'  => '<p class="footer-heading">',
  		'after_title'   => '</p>'
  	));

    register_sidebar(array(
  		'name' => 'Footer Widget 3',
  		'id'   => 'footer-widget-3',
  		'description'   => 'Footer widget 3.',
  		'before_widget' => '<div class="col-sm-2">',
  		'after_widget'  => '</div>',
  		'before_title'  => '<p class="footer-heading">',
  		'after_title'   => '</p>'
  	));

  }

  function get_current_year(){
    $this_year = Date("Y");
    return $this_year;
  }

  function get_all_pages() {
    $pages = get_pages();

    foreach ( $pages as $page ) {
      $option = '<a href="' . get_page_link( $page->ID ) . '">';
      $option .= $page->post_title;
      $option .= '</a> <hr>';
      echo $option;
    }
  }

  function get_all_posts(){
    $args = array('posts_per_page' => 10);

    $post_data = get_posts($args);

    foreach($post_data as $post){
      echo get_the_title() . "<hr>";
    }
  }

  // Advanced Custom Fields

  function my_acf_add_local_field_groups() {
    acf_add_local_field_group(array (
      'id' => 'acf_barista-training-section',
      'title' => 'Barista Training Section',
      'fields' => array (
        array (
          'key' => 'field_581cfbb52d05f',
          'label' => 'Barista Gold Title',
          'name' => 'barista_gold_title',
          'type' => 'text',
          'instructions' => 'The gold section of the title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cfbd22d060',
          'label' => 'Barista White Title',
          'name' => 'barista_white_title',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cfbfc2d061',
          'label' => 'Barista Description',
          'name' => 'barista_description',
          'type' => 'text',
          'instructions' => 'This is the brief description under the title area.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cfc232d062',
          'label' => 'Barista Disclaimer',
          'name' => 'barista_disclaimer',
          'type' => 'text',
          'instructions' => 'Small disclaimers section under the form.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page',
            'operator' => '==',
            'value' => '37',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'no_box',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));
    acf_add_local_field_group(array (
      'id' => 'acf_events-section',
      'title' => 'Events Section',
      'fields' => array (
        array (
          'key' => 'field_581cf3c69d1d6',
          'label' => 'Event Gold Title',
          'name' => 'event_gold_title',
          'type' => 'text',
          'instructions' => 'The gold portion of the section title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cf3ef9d1d7',
          'label' => 'Event Black Title',
          'name' => 'event_black_title',
          'type' => 'text',
          'instructions' => 'The black portion of the section title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cf4139d1d8',
          'label' => 'Event 1',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cf7989d1db',
          'label' => 'Event Title',
          'name' => 'event_title_1',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cf7d59d1dd',
          'label' => 'Event Sub Title',
          'name' => 'event_sub_title_1',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cf8389d1e2',
          'label' => 'Event Image',
          'name' => 'event_image_1',
          'type' => 'image',
          'save_format' => 'object',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
        array (
          'key' => 'field_581cf42d9d1d9',
          'label' => 'Event 2',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cf7ec9d1de',
          'label' => 'Event Title',
          'name' => 'event_title_2',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cf7ff9d1df',
          'label' => 'Event Sub Title',
          'name' => 'event_sub_title_2',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cf84d9d1e3',
          'label' => 'Event Image',
          'name' => 'event_image_2',
          'type' => 'image',
          'save_format' => 'object',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
        array (
          'key' => 'field_581cf4339d1da',
          'label' => 'Event 3',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cf8119d1e0',
          'label' => 'Event Title',
          'name' => 'event_title_3',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cf8259d1e1',
          'label' => 'Event Sub Title',
          'name' => 'event_sub_title_3',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cf8569d1e4',
          'label' => 'Event Image',
          'name' => 'event_image_3',
          'type' => 'image',
          'save_format' => 'object',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page',
            'operator' => '==',
            'value' => '37',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'no_box',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));
    acf_add_local_field_group(array (
      'id' => 'acf_footer',
      'title' => 'Footer',
      'fields' => array (
        array (
          'key' => 'field_581cfe20ad4f2',
          'label' => 'Footer Logo',
          'name' => 'footer_logo',
          'type' => 'image',
          'instructions' => 'Upload your logo for the footer.',
          'save_format' => 'object',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page',
            'operator' => '==',
            'value' => '37',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'no_box',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));
    acf_add_local_field_group(array (
      'id' => 'acf_home-hero-section',
      'title' => 'Home Hero Section',
      'fields' => array (
        array (
          'key' => 'field_581cc46a3a7a8',
          'label' => 'Hero Section',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cc30f6a0e5',
          'label' => 'Hero Logo',
          'name' => 'hero_logo',
          'type' => 'image',
          'instructions' => 'Add your logo for the hero section.',
          'save_format' => 'object',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
        array (
          'key' => 'field_581cc3366a0e6',
          'label' => 'Hero Text',
          'name' => 'hero_text',
          'type' => 'text',
          'instructions' => 'Add text for above the logo.',
          'default_value' => 'Welcome To',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page',
            'operator' => '==',
            'value' => '37',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'no_box',
        'hide_on_screen' => array (
          0 => 'the_content',
        ),
      ),
      'menu_order' => 0,
    ));
    acf_add_local_field_group(array (
      'id' => 'acf_menu-section',
      'title' => 'Menu Section',
      'fields' => array (
        array (
          'key' => 'field_581cdc75c3e57',
          'label' => 'Menu Section',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cd6d990fcc',
          'label' => 'Menu Gold Title',
          'name' => 'menu_gold_title',
          'type' => 'text',
          'instructions' => 'The gold section of your menu title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd6f890fcd',
          'label' => 'Menu White Title',
          'name' => 'menu_white_title',
          'type' => 'text',
          'instructions' => 'The white section of your menu title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd71290fce',
          'label' => 'Menu Sub Title',
          'name' => 'menu_sub_title',
          'type' => 'text',
          'instructions' => 'The smaller title under the main menu section title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd7bf90fd2',
          'label' => 'Menu Item 1',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cd73690fcf',
          'label' => 'Menu Item Title',
          'name' => 'menu_item_title_1',
          'type' => 'text',
          'instructions' => 'Menu item title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd77590fd0',
          'label' => 'Menu Item Price',
          'name' => 'menu_item_price_1',
          'type' => 'text',
          'instructions' => 'Make sure to include your dollar sign.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd7a590fd1',
          'label' => 'Menu Item Description',
          'name' => 'menu_item_description_1',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd7d390fd3',
          'label' => 'Menu Item 2',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cd7e290fd4',
          'label' => 'Menu Item Title',
          'name' => 'menu_item_title_2',
          'type' => 'text',
          'instructions' => 'Menu item title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd7fe90fd6',
          'label' => 'Menu Item Price',
          'name' => 'menu_item_price_2',
          'type' => 'text',
          'instructions' => 'Make sure to include your dollar sign.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd81090fd7',
          'label' => 'Menu Item Description',
          'name' => 'menu_item_description_2',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd82390fd8',
          'label' => 'Menu Item 3',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cd82f90fd9',
          'label' => 'Menu Item Title',
          'name' => 'menu_item_title_3',
          'type' => 'text',
          'instructions' => 'Menu item title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd84090fda',
          'label' => 'Menu Item Price',
          'name' => 'menu_item_price_3',
          'type' => 'text',
          'instructions' => 'Make sure to include your dollar sign.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd85d90fdb',
          'label' => 'Menu Item Description',
          'name' => 'menu_item_description_3',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd87b90fdd',
          'label' => 'Menu Item 4',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cd88490fde',
          'label' => 'Menu Item Title',
          'name' => 'menu_item_title_4',
          'type' => 'text',
          'instructions' => 'Menu item title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd89490fdf',
          'label' => 'Menu Item Price',
          'name' => 'menu_item_price_4',
          'type' => 'text',
          'instructions' => 'Make sure to include your dollar sign.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd8a190fe0',
          'label' => 'Menu Item Description',
          'name' => 'menu_item_description_4',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd8b720ac7',
          'label' => 'Menu Item 5',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cd8c020ac8',
          'label' => 'Menu Item Title',
          'name' => 'menu_item_title_5',
          'type' => 'text',
          'instructions' => 'Menu item title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd8cf20ac9',
          'label' => 'Menu Item Price',
          'name' => 'menu_item_price_5',
          'type' => 'text',
          'instructions' => 'Make sure to include your dollar sign.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd8e220aca',
          'label' => 'Menu Item Description',
          'name' => 'menu_item_description_5',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd8ef20acb',
          'label' => 'Menu Item 6',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cd8f920acc',
          'label' => 'Menu Item Title',
          'name' => 'menu_item_title_6',
          'type' => 'text',
          'instructions' => 'Menu item title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd90720acd',
          'label' => 'Menu Item Price',
          'name' => 'menu_item_price_6',
          'type' => 'text',
          'instructions' => 'Make sure to include your dollar sign.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd91620ace',
          'label' => 'Menu Item Description',
          'name' => 'menu_item_description_6',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd92620acf',
          'label' => 'Menu Item 7',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cd93020ad0',
          'label' => 'Menu Item Title',
          'name' => 'menu_item_title_7',
          'type' => 'text',
          'instructions' => 'Menu item title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd94020ad1',
          'label' => 'Menu Item Price',
          'name' => 'menu_item_price_7',
          'type' => 'text',
          'instructions' => 'Make sure to include your dollar sign.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd94c20ad2',
          'label' => 'Menu Item Description',
          'name' => 'menu_item_description_7',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd95920ad3',
          'label' => 'Menu Item 8',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cd96420ad4',
          'label' => 'Menu Item Title',
          'name' => 'menu_item_title_8',
          'type' => 'text',
          'instructions' => 'Menu item title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd96f20ad5',
          'label' => 'Menu Item Price',
          'name' => 'menu_item_price_8',
          'type' => 'text',
          'instructions' => 'Make sure to include your dollar sign.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cd98020ad6',
          'label' => 'Menu Item Description',
          'name' => 'menu_item_description_8',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page',
            'operator' => '==',
            'value' => '37',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'no_box',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));
    acf_add_local_field_group(array (
      'id' => 'acf_our-story-section',
      'title' => 'Our Story Section',
      'fields' => array (
        array (
          'key' => 'field_581cc8c31e28b',
          'label' => 'Story Section',
          'name' => '',
          'type' => 'tab',
        ),
        array (
          'key' => 'field_581cc7e71e288',
          'label' => 'Story Gold Title ',
          'name' => 'story_gold_title',
          'type' => 'text',
          'instructions' => 'Add the first part of your title section, this will be in gold.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cc8591e289',
          'label' => 'Story Black Title',
          'name' => 'story_black_title',
          'type' => 'text',
          'instructions' => 'Add rest of your sections title.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'none',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_581cc8921e28a',
          'label' => 'Story Description',
          'name' => 'story_description',
          'type' => 'textarea',
          'instructions' => 'Add your short description about your store.',
          'default_value' => '',
          'placeholder' => '',
          'maxlength' => '',
          'rows' => '',
          'formatting' => 'br',
        ),
        array (
          'key' => 'field_581cca2a7c7cf',
          'label' => 'Story Image',
          'name' => 'story_image',
          'type' => 'image',
          'instructions' => 'Add an image for your story section.',
          'save_format' => 'object',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page',
            'operator' => '==',
            'value' => '37',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'no_box',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));
  }

  add_action('acf/init', 'my_acf_add_local_field_groups');


 ?>
