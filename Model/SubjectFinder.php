<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */

namespace SymfonyBro\ErpCoreBundle\Model;


class SubjectFinder implements SubjectFinderInterface
{

    /**
     * @var SubjectFinderResolverInterface[]
     */
    private $resolvers = [];

    /**
     * @param SubjectFinderResolverInterface $resolver
     * @return $this
     */
    public function addResolver(SubjectFinderResolverInterface $resolver)
    {
        $this->resolvers[] = $resolver;
        return $this;
    }

    /**
     * @param SubjectFinderContext $context
     * @return SubjectInterface[]
     */
    public function find(SubjectFinderContext $context): array
    {
        $result = [];

        foreach ($this->resolvers as $resolver) {
            if ($resolver->supports($context)) {
                $result = array_merge($result, $resolver->resolve($context));
            }
        }

        return $result;
    }
}