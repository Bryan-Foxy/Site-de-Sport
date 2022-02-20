<?php

namespace SymfonyBro\ErpCoreBundle\Twig;

use Symfony\Component\Translation\TranslatorInterface;
use Twig_Extension;

/**
 * Class ArrayTranslateExtension
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */
class ListTranslatorExtension extends Twig_Extension
{

    /**
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * ArrayTranslateExtension constructor.
     * @param $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('list_trans', array($this, 'listTranslate')),
        );
    }

    public function listTranslate($list, $parameters = [], $domain = null, $locale = null)
    {
        if(!is_array($list)) {
            $list = [$list];
        }

        $result = [];

        foreach ($list as $term) {
            $result[] = $this->translator->trans($term,$parameters, $domain, $locale);
        }

        return $result;
    }
}
