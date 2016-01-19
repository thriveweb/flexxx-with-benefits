<?php 

if ( is_user_logged_in() ) : 
	
	global $current_user;
	get_currentuserinfo();						 
	edit_post_link( 'Edit Page', '<p class="edit_link"> Logged in as '. $current_user->user_login . '<span></span>', '</p>' ); 

endif; 

?>