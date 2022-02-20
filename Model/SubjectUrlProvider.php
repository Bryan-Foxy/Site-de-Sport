<?php

namespace SymfonyBro\ErpCoreBundle\Model;

use InvalidArgumentException;

/**
 * Class SubjectUrlProvider
 *
 * @package SymfonyBro\ErpCoreBundle\Model
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */
class SubjectUrlProvider implements SubjectUrlProviderInterface
{
    /**
     * @var SubjectUrlResolverInterface[]
     */
    private $resolvers = [];

    /**
     * @param SubjectUrlResolverInterface $resolver
     * @return $this
     */
    public function addResolver(SubjectUrlResolverInterface $resolver)
    {
        $this->resolvers[] = $resolver;
        return $this;
    }

    /**
     * @param SubjectInterface $subject
     * @return string
     * @throws \InvalidArgumentException
     */
    public function getUrl(SubjectInterface $subject): string
    {
        foreach ($this->resolvers as $resolver) {
            if ($resolver->supports($subject)) {
                return $resolver->resolve($subject);
            }
        }

        throw new InvalidArgumentException('Subject of type "' . get_class($subject) . '" can\'t be resolved!');
    }
}
