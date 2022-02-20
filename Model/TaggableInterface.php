<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */


namespace SymfonyBro\ErpCoreBundle\Model;


interface TaggableInterface
{
    public function getTags(): array;

    public function addTag(string $tag);

    public function removeTag(string $tag);

    public function clearTags();
}
