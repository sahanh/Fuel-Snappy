<?php

Autoloader::add_core_namespace('Snappy');
Autoloader::add_namespace('Knp\Snappy');

Autoloader::add_classes(array(

	
	'Snappy\\Pdf'							=> __DIR__.'/classes/pdf.php',
	//'Snappy\\Image'							=> __DIR__.'/classes/pdf.php',
	'Knp\\Snappy\\AbstractGenerator'			=> __DIR__.'/classes/snappy/src/Knp/Snappy/AbstractGenerator.php',
	'Knp\\Snappy\\GeneratorInterface'			=> __DIR__.'/classes/snappy/src/Knp/Snappy/GeneratorInterface.php',
	'Knp\\Snappy\\Image'						=> __DIR__.'/classes/snappy/src/Knp/Snappy/Image.php',
	'Knp\\Snappy\\Pdf'							=> __DIR__.'/classes/snappy/src/Knp/Snappy/Pdf.php',

));