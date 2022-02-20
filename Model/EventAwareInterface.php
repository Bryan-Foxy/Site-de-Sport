<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */
namespace SymfonyBro\ErpCoreBundle\Model;

use Symfony\Component\EventDispatcher\Event;

interface EventAwareInterface
{
    /**
     * @return Event
     */
    public function getEvent();

    /**
     * @return string
     */
    public function getEventName(): string;
}
