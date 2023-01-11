<?php
  	use App\Controllers\Ctl_users;
	use App\Controllers\Ctl_main;

  	define('MVC_APP','APP');

	// Cargador automático de clases, el mismo archivo de nombre que la clase

	// Auto-load a través de la función
	// spl_autoload_register(function ($class_name) {
	//    include $class_name . '.php';
	// });


	// Auto- load a través de clase
	require __DIR__ . '/Loader.php';
	Loader::init( );    // definir carpeta donde buscar -> Loader::init(__DIR__.'/src' );


	include_once "app/config/db.php";


	/********* MANAGE ROUTES AND ACTIONS **************************/
	// muestra una pagina concreta
	if (isset($_GET['action']) && $_GET['action'] == 'users') {
		$usr=new Ctl_users();
		$usr->users_list();
	//Si no existe GET o POST -> muestra la pagina principal
	} else {
		$main=new Ctl_main();
		$main->default_page();
	}
