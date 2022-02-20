<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */

namespace SymfonyBro\ErpCoreBundle\Model;

trait TaggedTrait
{
    private $tags = [];

    public function getTags(): array
    {
        return $this->tags;
    }

    public function addTag(string $tag)
    {
        $this->tags[] = $tag;
        return $this;
    }

    public function removeTag(string $tag)
    {
        $this->tags = array_filter($this->tags, function ($e) use ($tag) {
            return ($e !== $tag);
        });
        return $this;
    }

    public function clearTags()
    {
        $this->tags = [];
        return $this;
    }
}
