<?php
//Filter Project post_type
//add our function to the query object pre_get_posts
add_action( 'pre_get_posts', 'filter_projects' );
function filter_projects( $query ) {
	//if the query type is equal to project
    if ( 'project' === $query->get( 'post_type' ) ) {
		//set the properties of this query to be displayed as the below
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
}