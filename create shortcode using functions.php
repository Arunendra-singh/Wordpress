// Here is the code 

function gym_locator_shortcode( $form ) {

	$form = '<div class="findloaction-form">
	<form method="get" action="' . site_url('gym-locator') . ' >
	<div class="wrapper-search">
	<img src="/wp/independent-gyms/wp-content/uploads/2020/09/find-loacl.png" alt=""> 
	<input type="text" value="' . get_search_query() . '" name="search_query" placeholder="Enter your postcode or town" />
	
	</div>
	<button type="submit">'. esc_attr__('Search') .'</button>
	</form>
	</div>';

	return $form;
}

add_shortcode('searchbar', 'gym_locator_shortcode');



// For template use 
[searchbar]
