<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */

namespace SymfonyBro\ErpCoreBundle\Model;


interface SubjectFinderResolverInterface
{
    /**
     * Returns just supported class name etc
     *
     * @param SubjectFinderContext $context
     * @return bool
     */
    public function supports(SubjectFinderContext $context): bool;

    /**
     * Returns concrete url of subject
     *
     * @param SubjectFinderContext $context
     * @return SubjectInterface[]
     */
    public function resolve(SubjectFinderContext $context): array;
}