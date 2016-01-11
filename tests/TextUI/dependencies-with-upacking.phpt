--TEST--
phpunit --verbose DependencyUnpackingTest ../_files/DependencyUnpackingTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--verbose';
$_SERVER['argv'][3] = 'DependencyUnpackingTest';
$_SERVER['argv'][4] = dirname(dirname(__FILE__)) . '/_files/DependencyUnpackingTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Runtime:       %s

..                                                                  2 / 2 (100%)

Time: %s, Memory: %s

OK (2 tests, 2 assertions)

