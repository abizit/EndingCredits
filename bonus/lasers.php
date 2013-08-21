<?php
function toolbox_super_laser_defense() {
	$lasers = apply_filters( 'toolbox_super_laser_defense', 'http://baldguy.files.wordpress.com/2011/07/pewpew.jpg' );
	echo '<img src="' . $lasers . '" alt="<pew><pew>" />';
}
