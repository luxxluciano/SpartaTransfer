<?php

//phpinfo();

/*
//Conexao banco pdo
$pdo = null;
try {
	$pdo = new PDO('mysql:host=mysql;dbname=database', 'root', '12345');
            print "conexao bem sucedida!\n";
} catch (PDOException $e) {
    print $e->getMessage();
    die();
}
var_dump($pdo);
*/

require 'vendor/autoload.php';
// instantiate the App object
$app = new \Slim\App();
// Add route callbacks
$app->get('/', function ($request, $response, $args) {
    return $response->withStatus(200)->write('Hello World!');
});
// Run application
$app->run();
