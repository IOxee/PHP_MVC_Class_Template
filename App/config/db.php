<?php
 	defined('MVC_APP') or die ('Permission denied');

	define('DB_HOSTING', 'local'); // local or remote
	define('DB_SERVER', 'db4free.net');

	if ( DB_HOSTING == 'local') {
		define('DB_HOST', 'localhost');
		define('DB_NAME', '');
		define('DB_USER', '');
		define('DB_PASS', '');
		define('DB_PORT', 0);
		define('DB_CHARSET', '');
		define('DB_COLLATE', '');

	} else if ( DB_HOSTING == 'remote') {
		define('DB_HOST', DB_SERVER);
		define('DB_NAME', '');
		define('DB_USER', '');
		define('DB_PASS', '');
		define('DB_PORT', 0);
		define('DB_CHARSET', '');
		define('DB_COLLATE', '');
	}
