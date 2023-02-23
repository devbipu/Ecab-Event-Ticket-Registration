<?php 

add_action( 'cmb2_init', 'cmb2_add_metabox' );
function cmb2_add_metabox() {
	$site_settings = get_option( 'ecap_settings' );
	$pickupAreas = $site_settings['pickupArea'];
	$formatedPickupAreas = [];


	foreach ($pickupAreas as $value) {
		$formatedPickupAreas[$value['areaName']] = $value['areaName'];
	}

	$prefix = '_cmb_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'test',
		'title'        => __( 'Metabox Title', 'cmb2' ),
		'object_types' => array( 'bookings'),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field(
		array(
			'id'	=> 'memberId',
			'name'	=> 'Member ID',
			'type'	=> 'text',
		)
	);

	$cmb->add_field(
		array(
			'id'	=> 'companyName',
			'name'	=> 'Company Name',
			'type'	=> 'text',
		),
	); 

	$cmb->add_field(
		array(
			'id'	=> 'name',
			'name'	=> 'Name',
			'type'	=> 'text',
		),
	);

	// $cmb->add_field(
	// 	array(
	// 		'id'	=> 'personType',
	// 		'name'	=> 'Person Type',
	// 		'type'	=> 'select',
	// 		'options' => array(
	// 			'single' => 'Single',
	// 			'family' => 'Family',
	// 		),
	// 	),
	// );


	$cmb->add_field(
		array(
			'id'	=> 'morePersonNumber',
			'name'	=> 'More Person',
			'type'	=> 'select',
			'options' => array(
				1 => 1,
				2 => 2,
				3 => 3,
				4 => 4,
				5 => 5,
				6 => 6,
				7 => 7,
				8 => 8,
				9 => 9,
			),
		),
	);


	$group_field_id = $cmb->add_field( array(
	    'id'          => 'morePerson',
	    'type'        => 'group',
	    'title' => __( 'Add More', 'cmb2' ),
	    'options'     => array(
	        'group_title'       => __( 'Other Persion {#} Info', 'cmb2' ),
	        'add_button'        => __( 'Add Another Persion', 'cmb2' ),
	        'remove_button'     => __( 'Remove Persion', 'cmb2' ),
	        'sortable'          => false,
	    ),
	));

	$cmb->add_group_field( $group_field_id, array(
	    'name' => 'Person Name',
	    'id'   => 'morePersonName',
	    'type' => 'text',
	));

	$cmb->add_group_field( $group_field_id, array(
	    'name' => 'Relation Type',
	    'id'   => 'relationType',
	    'type' => 'select',
	    'options' => array(
			'Father'	=> __('Father', 'cmb2'),
			'Mother'	=> __('Mother', 'cmb2'),
			'Sister'	=> __('Sister', 'cmb2'),
			'Brother'	=> __('Brother', 'cmb2'),
			'Wife'		=> __('Wife', 'cmb2'),
			'Husband'	=> __('Husband', 'cmb2'),
			'Friend'	=> __('Friend', 'cmb2'),
		),
	));



	$cmb->add_field(
		array(
			'id'	=> 'kidsType',
			'name'	=> 'Kids Type',
			'type'	=> 'select',
			'options' => array(
				'0-5 Year' 		=> __('0-5 Year', 'cmb2'),
				'Above 5 year' 	=> __('Above 5 year ', 'cmb2'),
			),
		),
	);



	$group_field_id = $cmb->add_field( array(
	    'id'        => 'moreKids',
	    'type'      => 'group',
	    'title' 	=> __( 'Add More', 'cmb2' ),
	    'options'	=> array(
	        'group_title'       => __( 'Other Kids {#} Info', 'cmb2' ),
	        'add_button'        => __( 'Add Another Kids', 'cmb2' ),
	        'remove_button'     => __( 'Remove Kids', 'cmb2' ),
	        'sortable'          => false,
	    ),
	));

	$cmb->add_group_field( $group_field_id, array(
	    'name' => 'Kids Name',
	    'id'   => 'moreKidsName',
	    'type' => 'text',
	));

	$cmb->add_group_field( $group_field_id, array(
	    'name' => 'Kids Type',
	    'id'   => 'moreKidsType',
	    'type' => 'select',
	    'options' => array(
			'0-5 Year' 		=> __('0-5 Year', 'cmb2'),
			'Above 5 year' 	=> __('Above 5 year ', 'cmb2'),
		),
	));

	$cmb->add_field(
		array(
			'id'	=> 'phoneNumber',
			'name'	=> 'Phone Number',
			'type'	=> 'text',
		),
	);
	$cmb->add_field(
		array(
			'id'	=> 'email',
			'name'	=> 'Email Address',
			'type'	=> 'text',
		),
	);

	$cmb->add_field(
		array(
			'id'	=> 'nid',
			'name'	=> 'NID Number',
			'type'	=> 'text',
		),
	);
	$cmb->add_field(
		array(
			'id'	=> 'pickupArea',
			'name'	=> 'Pickup Area',
			'type'	=> 'select',
			'options'	=> $formatedPickupAreas
		),
	);
	$cmb->add_field(array(
	    'name' => 'With driver / Own drive',
	    'id'   => 'driverType',
	    'type' => 'select',
	    'options' => array(
			'With Driver' 	=> __('With Driver', 'cmb2'),
			'Own Drive' 	=> __('Own Drive', 'cmb2'),
		),
	));
	$cmb->add_field(
		array(
			'id'	=> 'regFee',
			'name'	=> 'Registration Fee',
			'type'	=> 'text',
			'default'	=> 1500
		),
	);

}



//Member post type
add_action( 'cmb2_init', 'cmb2_add_metabox_members' );
function cmb2_add_metabox_members() {
	
	$prefix = '_cmb_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'members',
		'title'        => __( 'Member Information', 'cmb2' ),
		'object_types' => array( 'members'),
		'context'      => 'normal',
		'priority'     => 'high',
	));

	$cmb->add_field(
		array(
			'id'	=> 'memberId',
			'name'	=> 'Member ID',
			'type'	=> 'text',
		)
	);

	$cmb->add_field(
		array(
			'id'	=> 'companyName',
			'name'	=> 'Company Name',
			'type'	=> 'text',
		),
	);

	$cmb->add_field(
		array(
			'id'	=> 'ownerName',
			'name'	=> 'Name Of Owner',
			'type'	=> 'text',
		),
	);
	$cmb->add_field(
		array(
			'id'	=> 'designation',
			'name'	=> 'Designation',
			'type'	=> 'text',
		),
	);
	$cmb->add_field(
		array(
			'id'	=> 'phoneNumber',
			'name'	=> 'Phone Number',
			'type'	=> 'text',
		),
	);
	$cmb->add_field(
		array(
			'id'	=> 'officeNumber',
			'name'	=> 'Office Number',
			'type'	=> 'text',
		),
	);
	$cmb->add_field(
		array(
			'id'	=> 'email',
			'name'	=> 'Email Address',
			'type'	=> 'text',
		),
	);
	$cmb->add_field(
		array(
			'id'	=> 'website',
			'name'	=> 'Website',
			'type'	=> 'text',
		),
	);
	$cmb->add_field(
		array(
			'id'	=> 'dueYears',
			'name'	=> 'Due years',
			'type'	=> 'text',
		),
	);
	$cmb->add_field(
		array(
			'id'	=> 'remarks',
			'name'	=> 'Remarks ',
			'type'	=> 'text',
		),
	);
	$cmb->add_field(
		array(
			'id'	=> 'memberWelfare',
			'name'	=> 'Member Welfare',
			'type'	=> 'text',
		),
	);
	$cmb->add_field(
		array(
			'id'	=> 'address',
			'name'	=> 'Address',
			'type'	=> 'textarea',
		),
	);
}
