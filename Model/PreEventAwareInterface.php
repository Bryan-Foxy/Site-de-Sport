<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */

namespace SymfonyBro\ErpCoreBundle\Model;


use Symfony\Component\EventDispatcher\Event;

interface PreEventAwareInterface
{
    /**
     * @return Event
     */
    public function getPreEvent(): Event;

    /**
     * @return string
     */
    public function getPreEventName(): string;
}