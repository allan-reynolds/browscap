<?php

declare(strict_types=1);

namespace BrowscapTest\Data;

use Browscap\Data\Browser;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;

class BrowserTest extends TestCase
{
    /**
     * tests setter and getter for the match property
     *
     * @throws ExpectationFailedException
     */
    public function testGetter(): void
    {
        $properties = ['Browser' => 'def'];
        $standard   = false;
        $lite       = true;
        $type       = 'application';

        $object = new Browser($properties, $type, $lite, $standard);

        static::assertSame($properties, $object->getProperties());
        static::assertFalse($object->isStandard());
        static::assertTrue($object->isLite());
        static::assertSame($type, $object->getType());
    }
}
