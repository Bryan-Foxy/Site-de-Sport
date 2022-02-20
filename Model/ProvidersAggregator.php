<?php

namespace SymfonyBro\ErpCoreBundle\Model;

use RecursiveIterator;

/**
 * Class CommonReportBuilder
 *
 * @package Gorserv\Gerp\ErpBundle\Model
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */
class ProvidersAggregator implements RecursiveIterator
{
    private $providers = [];
    private $current = 0;
    private $criteria;

    public function setCriteria(array $criteria = [])
    {
        $this->criteria = $criteria;
    }

    public function addProvider(AbstractTaskProvider $provider)
    {
        $this->providers[] = $provider;
        return $this;
    }

    public function hasChildren()
    {
        return true;
    }

    public function valid()
    {
        return isset($this->providers[$this->current]);
    }

    public function getChildren()
    {
        return $this->current();
    }

    public function current()
    {
        $this->providers[$this->current]->setCriteria($this->criteria);

        return $this->providers[$this->current];
    }

    public function next()
    {
        $this->current++;
    }

    public function key()
    {
        return $this->current;
    }

    public function rewind()
    {
        $this->current = 0;
    }
}
