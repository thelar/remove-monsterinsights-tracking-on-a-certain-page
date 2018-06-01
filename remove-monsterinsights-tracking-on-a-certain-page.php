<?php
/*
Plugin Name: Remove MonsterInsights Tracking on a lost password Page
Plugin URI: https://www.monsterinsights.com
Description: Removes MonsterInsights tracking on a lost password page
Version: 1.0.2
Author: Chris Christoff
Author URI:  https://www.monsterinsights.com
*/
add_filter( 'monsterinsights_track_user', 'track_on_page' );
function track_on_page( $track ) {
   if ( ! is_admin() && get_the_ID() == 20 ) {
      return false;
   } 
   return $track;
}
?>