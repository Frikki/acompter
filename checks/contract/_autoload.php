<?php

function _autoload($class)
{
	$file = str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';

	require $file;
}

spl_autoload_register('_autoload');
//
// EOF: _autoload.php