<?php

namespace SymfonyBro\ErpCoreBundle\Model;

/**
 * Class SlugStorageInterface
 *
 * @package SymfonyBro\ErpCoreBundle\Model
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */
interface SlugStorageInterface
{
    public function read();

    public function next();

    public function write($value);
}
