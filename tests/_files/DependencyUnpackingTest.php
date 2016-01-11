<?php
class DependencyUnpackingTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        return [new StdClass];
    }

    /**
     * @depends withArgumentUnpacking testOne
     */
    public function testTwo(StdClass $stdClass)
    {
    }
}
