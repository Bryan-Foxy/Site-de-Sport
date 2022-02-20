<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */

namespace SymfonyBro\ErpCoreBundle\Model;


trait ExtraDataTrait
{
    protected $extra = [];

    /**
     * @return array
     */
    public function getExtra(): array
    {
        return $this->extra;
    }

    /**
     * @param array $extra
     * @return self
     */
    public function setExtra(array $extra)
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return self
     */
    public function setExtraValue($key, $value)
    {
        $this->extra[$key] = $value;
        return $this;
    }

    /**
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getExtraValue($key, $default = null)
    {
        return array_key_exists($key, $this->extra) ? $this->extra[$key] : $default;
    }
}
