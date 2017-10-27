<?php
namespace DQNEO\Skeleton;

use PHPUnit\Framework\TestCase;

class SkeletonTest extends TestCase
{
    public function testNew()
    {
        $obj = new Skeleton();
        $this->assertInstanceOf(Skeleton::class, $obj);
    }
}
