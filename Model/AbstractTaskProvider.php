<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */

namespace SymfonyBro\ErpCoreBundle\Model;

use Iterator;
use RecursiveIterator;

abstract class AbstractTaskProvider implements RecursiveIterator
{
    /**
     * @var Iterator
     */
    private $iterator;

    public function setCriteria(array $criteria = [])
    {
        $this->iterator = $this->createIterator($criteria);
    }

    abstract protected function createIterator(array $criteria): Iterator;

    public function hasChildren()
    {
        return false;
    }

    public function getChildren()
    {
        return null;
    }

    public function current()
    {
        return $this->iterator->current();
    }

    public function next()
    {
        $this->iterator->next();
    }

    public function key()
    {
        return $this->iterator->key();
    }

    public function valid()
    {
        return $this->iterator->valid();
    }

    public function rewind()
    {
        $this->iterator->rewind();
    }
}
