<?php
/**
 * Glaciersoft Acompter
 *
 * PHP Version 5.4
 *
 * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
 * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
 * @license     TODO Replace with license
 * @link        http://glaciersoft.com
 */

/*
 * Set error reporting to the level to which Glacier Acompter code must comply.
 */
error_reporting(E_ALL | E_STRICT);

if (class_exists('PHPUnit_Runner_Version', TRUE))
{
    $phpUnitVersion = PHPUnit_Runner_Version::id();
    if ('@package_version@' !== $phpUnitVersion &&
        version_compare($phpUnitVersion, '3.6.0', '<')
    )
    {
        echo
            'This version of PHPUnit (' .
            PHPUnit_Runner_Version::id() .
            ') is not supported in Glaciersoft Acompter checks.' .
            PHP_EOL;
        exit(1);
    }
    unset($phpUnitVersion);
}

/*
 * Determine the root, library, and tests directories of the library
 * distribution.
 */
$glRoot = realpath(dirname(dirname(__DIR__)));
$glSrc = $glRoot . DIRECTORY_SEPARATOR . 'src';
$glTests =
    $glRoot . DIRECTORY_SEPARATOR . 'checks'. DIRECTORY_SEPARATOR . 'contract';

/*
 * Prepend the Glaciersoft Acompter src/ and tests/ directories to the
 * include_path. This allows the tests to run out of the box and helps prevent
 * loading other copies of the library code and tests that would supersede
 * this copy.
 */
$path = array(
    $glSrc,
    $glTests,
    get_include_path(),
);
set_include_path(implode(PATH_SEPARATOR, $path));

/**
 * Setup autoloading
 */
include __DIR__ . DIRECTORY_SEPARATOR . '_autoload.php';

/*
 * Unset global variables that are no longer needed.
 */
unset($glRoot, $glSrc, $glTests, $path);
//
// EOF: Bootstrap.php
