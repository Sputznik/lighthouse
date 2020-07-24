<?php
// CUSTOM POST TYPE
add_filter( 'orbit_post_type_vars', function( $orbit_types ){

	$orbit_types['videos'] = array(
		'slug' 		=> 'videos',
		'labels'	=> array(
			'name' 					=> 'Videos',
			'singular_name' => 'Video',
      'add_new'       => 'Add New',
      'add_new_item'  => 'Add New Video',
      'all_items'     =>  'All Videos'
		),
		'public'		=> true,
		'supports'	=> array( 'title', 'editor','author', 'thumbnail', 'excerpt','comments' )
	);
	return $orbit_types;
} );

add_filter( 'orbit_taxonomy_vars', function( $taxonomies ){

  $taxonomies['video-category']	= array(
		'label'			=> 'Video Category',
		'slug' 			=> 'video-category',
		'post_types'	=> array( 'videos' )
	);

	return $taxonomies;

} );


add_filter( 'orbit_meta_box_vars', function( $meta_box ){

  $meta_box['videos'] = array(
    array(
      'id'			=> 'video-metafields',
      'title'		=> 'Additional Information',
      'fields'	=> array(
        'video_url'	=> array(
          'type' => 'text',
          'text' => 'Youtube Video Url'
        ),
      )
    )
  );

	return $meta_box;

});
