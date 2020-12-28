<?php
require_once 'Lib/Livro/Core/ClassLoader.php';
$al = new \Livro\Core\ClassLoader;
$al->addNamespace('Livro', 'Lib/Livro');
$al->register();

require_once 'Lib/Livro/Core/AppLoader.php';
$al = new \Livro\Core\AppLoader;
$al->addDirectory('App/Control');
$al->addDirectory('App/Model');
$al->register();

require_once 'vendor/autoload.php';

if ($_GET) {
	$class = $_GET['class'];

	if (class_exists($class)) {
		$pagina = new $class;
		$pagina->show();
	}
}

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">';
