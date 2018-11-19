<?php
use PHPUnit\Framework\TestCase;

class EqualsTest extends TestCase
{
    public function testFailure()
    {
        $this->assertEquals(1, 1);
    }

    public function testFailure2()
    {
        $this->assertEquals('bar', 'bar');
    }

    public function testFailure3()
    {
        $this->assertEquals("foo\nbah\nbaz\n", "foo\nbah\nbaz\n");
    }
}