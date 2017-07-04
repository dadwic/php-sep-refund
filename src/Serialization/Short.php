<?php

namespace Sep\Serialization;

/**
 * Class representing Short
 */
class Short
{

    /**
     * @property integer $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param integer $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param integer $value
     * @return integer
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }


}

