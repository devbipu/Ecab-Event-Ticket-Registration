<?php 

function picnic_add_scripts() {
	wp_enqueue_style( 'picnic-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), _S_VERSION );

	wp_enqueue_script( 'picnic-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'sweetalert2', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', array(), _S_VERSION, true );
	wp_enqueue_script( 'picnic-custom', get_template_directory_uri() . '/js/formpage.js', array(), _S_VERSION, true );
    wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'picnic_add_scripts' );




/*
* Creating a function to create our CPT
*/
  
function booking_post_type() {
  
    $labels = array(
        'name'                => _x( 'Bookings', 'Post Type General Name', 'picnic' ),
        'singular_name'       => _x( 'Booking', 'Post Type Singular Name', 'picnic' ),
        'menu_name'           => __( 'Bookings', 'picnic' ),
        'parent_item_colon'   => __( 'Parent Booking', 'picnic' ),
        'all_items'           => __( 'All Bookings', 'picnic' ),
        'view_item'           => __( 'View Booking', 'picnic' ),
        'add_new_item'        => __( 'Add New Booking', 'picnic' ),
        'add_new'             => __( 'Add New', 'picnic' ),
        'edit_item'           => __( 'Edit Booking', 'picnic' ),
        'update_item'         => __( 'Update Booking', 'picnic' ),
        'search_items'        => __( 'Search Booking', 'picnic' ),
        'not_found'           => __( 'Not Found', 'picnic' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'picnic' ),
    );
      
      
    $args = array(
        'label'               => __( 'Bookings', 'picnic' ),
        'menu_icon'			  => 'dashicons-building',
        'description'         => __( 'Booking news and reviews', 'picnic' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'custom-fields', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
      
    register_post_type( 'bookings', $args );
}
add_action( 'init', 'booking_post_type', 0 );





  
function member_post_type() {
  
    $labels = array(
        'name'                => _x( 'Members', 'Post Type General Name', 'picnic' ),
        'singular_name'       => _x( 'Member', 'Post Type Singular Name', 'picnic' ),
        'menu_name'           => __( 'Members', 'picnic' ),
        'parent_item_colon'   => __( 'Parent Member', 'picnic' ),
        'all_items'           => __( 'All Members', 'picnic' ),
        'view_item'           => __( 'View Member', 'picnic' ),
        'add_new_item'        => __( 'Add New Member', 'picnic' ),
        'add_new'             => __( 'Add New', 'picnic' ),
        'edit_item'           => __( 'Edit Member', 'picnic' ),
        'update_item'         => __( 'Update Member', 'picnic' ),
        'search_items'        => __( 'Search Member', 'picnic' ),
        'not_found'           => __( 'Not Found', 'picnic' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'picnic' ),
    );
      
      
    $args = array(
        'label'               => __( 'Members', 'picnic' ),
        'menu_icon'           => 'dashicons-groups',
        'description'         => __( 'Member news and reviews', 'picnic' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'custom-fields', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
      
    register_post_type( 'members', $args );
}



  
add_action( 'init', 'member_post_type', 0 );






// Submit form
add_action('wp_ajax_nopriv_submit_entry_post', 'submit_entry_post');
add_action('wp_ajax_submit_entry_post', 'submit_entry_post');


function submit_entry_post()
{
    $from_data  = $_POST['fromData'];
    $morePerson = $_POST['morePerson'];
    $moreKids   = $_POST['moreKids'];

    serialize($morePerson);  
    serialize($moreKids);  

    $booking_data = array(
        'post_title'    => $from_data['name'],
        'post_status'   => 'publish',
        'post_type'     => 'bookings',
    );
    // $post_id = wp_insert_post( $booking_data );

    // $booking_meta_data = [
    //     'memberId'          => $from_data['memberId'],
    //     'name'              => $from_data['name'],
    //     'personType'        => $from_data['personType'],
    //     'kidsType'          => $from_data['kidsType'],
    //     'companyName'       => $from_data['companyName'],
    //     'phoneNumber'       => $from_data['phoneNumber'],
    //     'email'             => $from_data['email'],
    //     'nid'               => $from_data['nid'],
    //     'pickupArea'        => $from_data['pickupArea'],
    //     'driverType'        => $from_data['driverType'],
    //     'regFee'            => $from_data['regFee'],
    // ];


    // foreach ($booking_meta_data as $key => $value) {
    //     update_post_meta( $post_id, $key, $value );
    // }

    //     update_post_meta($post_id, 'morePerson', $morePerson); //array() auto serialize by wordpress
    //     update_post_meta($post_id, 'moreKids', $moreKids); //array() auto serialize by wordpress
    if ($post_id) {
        wp_send_json_success("Booking Added Successfully", 200);
    }else{
        wp_send_json_error("Something went wrong", 400);
    }
}