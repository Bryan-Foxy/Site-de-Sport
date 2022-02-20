<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */


namespace SymfonyBro\ErpCoreBundle\Model;


interface AuthorAwareInterface
{
    /**
     * @param UserInterface|null $author
     */
    public function setAuthor(UserInterface $author = null);

    /**
     * @return UserInterface|null
     */
    public function getAuthor();
}
