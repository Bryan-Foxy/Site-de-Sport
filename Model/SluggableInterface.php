<?php

namespace SymfonyBro\ErpCoreBundle\Model;

/**
 * Class SluggableInterface
 *
 * @package Gorserv\Gerp\ErpBundle\Model
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */
interface SluggableInterface
{
    public function getSlug();

    public function setSlug(string $slug);
}
