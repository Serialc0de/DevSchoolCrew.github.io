<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'Woffice Auto Friends', 'woffice' );
$manifest['description'] = __( 'Create friendship relationships automatically on BuddyPress.', 'woffice' );
$manifest['version']     = '1.0.0';
$manifest['display']     = true;
$manifest['standalone']  = true;
$manifest['thumbnail']   = fw_get_template_customizations_directory_uri().'/extensions/woffice-auto-friends/static/img/thumbnails/extension.jpg';
