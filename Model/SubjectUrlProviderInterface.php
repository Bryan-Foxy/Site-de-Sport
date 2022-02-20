<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */

namespace SymfonyBro\ErpCoreBundle\Model;

interface SubjectUrlProviderInterface
{
    /**
     * @param SubjectUrlResolverInterface $resolver
     */
    public function addResolver(SubjectUrlResolverInterface $resolver);

    /**
     * @param SubjectInterface $subject
     * @return string
     */
    public function getUrl(SubjectInterface $subject): string;
}
