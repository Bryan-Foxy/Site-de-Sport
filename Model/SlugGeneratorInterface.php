<?php
namespace SymfonyBro\ErpCoreBundle\Model;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Class SlugGeneratorInterface
 *
 * @package Gorserv\Gerp\ErpBundle\Model
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */
interface SlugGeneratorInterface
{
    public function generate(SluggableInterface $task, EntityManagerInterface $entityManager): string;
}
