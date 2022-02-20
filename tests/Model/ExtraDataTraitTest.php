<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */

namespace SymfonyBro\ErpCoreBundle\Tests\Model;

use PHPUnit\Framework\TestCase;
use SymfonyBro\ErpCoreBundle\Model\ExtraDataTrait;

class ExtraDataTraitTest extends TestCase
{
    public function testGetExtra()
    {
        $this->assertEquals([], $this->getTrait()->getExtra());
    }

    public function testSetExtra()
    {
        $trait = $this->getTrait();
        $trait->setExtra(['foo' => 'bar']);
        $this->assertEquals(['foo' => 'bar'], $trait->getExtra());
    }

    public function testGetExtraValueDefault()
    {
        $default = 'foo';
        $value = $this->getTrait()->getExtraValue('bar', $default);
        $this->assertEquals($default, $value);
    }

    public function testSetGetExtraValue()
    {
        $trait = $this->getTrait();

        $trait->setExtraValue('foo', 'bar');
        $this->assertEquals('bar', $trait->getExtraValue('foo'));
    }

    /**
     * @return ExtraDataTrait
     */
    private function getTrait()
    {
        return $this->getMockForTrait(ExtraDataTrait::class);
    }
}
