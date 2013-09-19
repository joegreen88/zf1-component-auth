<?php
namespace Tests;

// Common path definitions
define('ROOT_PATH', realpath(__DIR__.'/..'));

// Everything is relative to the project root now.
chdir(ROOT_PATH);

// Set up autoloading (after composer install)
require_once ROOT_PATH . '/vendor/autoload.php';

/**
 * Class TestCase
 * @author Joe Green
 * @package Tests
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
}