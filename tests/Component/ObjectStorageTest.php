<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Storage\Tests\Component;

use PHPUnit\Framework\TestCase;
use Ulrack\Storage\Component\ObjectStorage;
use Ulrack\Storage\Exception\DataNotFoundException;

/**
 * @coversDefaultClass Ulrack\Storage\Component\ObjectStorage
 * @covers Ulrack\Storage\Exception\DataNotFoundException
 */
class ObjectStorageTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::__construct
     * @covers ::getIterator
     * @covers ::get
     * @covers ::set
     * @covers ::has
     * @covers ::unset
     * @covers ::keys
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetUnset
     * @covers ::offsetSet
     */
    public function testStorage(): void
    {
        $storage = new ObjectStorage();
        $storage['foo'] = 'bar';
        $this->assertEquals('bar', $storage['foo']);
        $this->assertEquals(true, isset($storage['foo']));
        $this->assertEquals(['foo'], $storage->keys());
        $this->assertEquals(['foo' => 'bar'], iterator_to_array($storage));
        unset($storage['foo']);
        $this->expectException(DataNotFoundException::class);
        $storage->get('foo');
    }
}
