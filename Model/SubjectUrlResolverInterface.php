<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */

namespace SymfonyBro\ErpCoreBundle\Model;

interface SubjectUrlResolverInterface
{
    /**
     * Returns just supported class name etc
     *
     * @param SubjectInterface $subject
     * @return bool
     */
    public function supports(SubjectInterface $subject): bool;

    /**
     * Returns concrete url of subject
     *
     * @param SubjectInterface $subject
     * @return string
     */
    public function resolve(SubjectInterface $subject): string;
}
