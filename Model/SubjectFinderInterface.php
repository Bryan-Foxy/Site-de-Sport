<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */

namespace SymfonyBro\ErpCoreBundle\Model;


interface SubjectFinderInterface
{
    /**
     * @param SubjectFinderContext $context
     * @return SubjectInterface[]
     */
    public function find(SubjectFinderContext $context): array;
}