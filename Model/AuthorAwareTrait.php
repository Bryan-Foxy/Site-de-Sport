<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */

namespace SymfonyBro\ErpCoreBundle\Model;


trait AuthorAwareTrait
{
    /**
     * @var
     */
    protected $author;

    /**
     * @return UserInterface|null
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param UserInterface|null $author
     * @return $this
     */
    public function setAuthor(UserInterface $author = null)
    {
        $this->author = $author;
        return $this;
    }
}
