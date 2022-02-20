<?php
namespace SymfonyBro\ErpCoreBundle\Model;

/**
 * Class ComparerInterface
 *
 * @package SymfonyBro\ErpCoreBundle\Model
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */
interface ComparerInterface
{
    public function __invoke($a, $b): bool;
}
