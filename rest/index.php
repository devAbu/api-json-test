<?php
	require '../vendor/autoload.php';

	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'sap');

    $connect = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect!!!'. mysqli_connect_error());

	mysqli_set_charset($connect,"utf8");


	Flight::route('/', function(){
		Flight::json(['msg' => 'hello world! ']);
	});

	Flight::route('/clubs', function(){
		Flight::json(['msg' => 'hello world! clubs ']);
	});

	Flight::route('/clubs/@id', function($id){
		Flight::json(['msg' => 'hello world! clubs '. $id]);
	});

	Flight::start();

?>
