<?php
// Require the framework
$f3=require('lib/base.php');

$f3->route('GET /',
	function($f3) {
        $controller = new IndexController($f3);
        echo UTF::instance()->translate('\u1F30F');
        die;
        echo $controller->view();
	}
);

$f3->run();
