<?php

namespace Foo;

use PHPUnit\Framework\TestCase;
use Foo\Bar;

class BarTest extends TestCase
{

    public function testCanBe()
    {
       
        $this->assertEquals(1, 1);
    }

    
}
