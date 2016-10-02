<?php
error_reporting(0);

$CONF = $TMPL = array();

//check if the server is local or remote
    $ip=$_SERVER['REMOTE_ADDR'];

if ($ip == "::1") {
    // The MySQL credentials
    $CONF['host'] = 'localhost';
    $CONF['user'] = 'root';
    $CONF['pass'] = 'root';
    $CONF['name'] = 'eden-escapades';
    
    // The Installation URL
    $CONF['url'] = 'http://localhost:8888/eden-escapades.com/Script/';

} else {
    // The MySQL credentials
    $CONF['host'] = 'ftp.eden-escapades.com';
    $CONF['user'] = 'edenesca_admin';
    $CONF['pass'] = 'Password2302';
    $CONF['name'] = 'edenesca_network'; 
    
    // The Installation URL
    $CONF['url'] = 'http://eden-escapades.com/Script/';

}

// The Notifications e-mail
$CONF['email'] = 'admin@eden-escapades.com';

// The themes directory
$CONF['theme_path'] = 'themes';

// The plugins directory
$CONF['plugin_path'] = 'plugins';

$action = array('admin'			=> 'admin',
				'feed'			=> 'feed',
				'settings'		=> 'settings',
				'messages'		=> 'messages',
				'post'			=> 'post',
				'recover'		=> 'recover',
				'profile'		=> 'profile',
				'notifications'	=> 'notifications',
				'search'		=> 'search',
				'group'			=> 'group',
				'page'			=> 'page',
				'info'			=> 'info',
                'home'			=> 'home'
                
				);

?>
