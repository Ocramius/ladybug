<?php

/*
 * This file is part of the Ladybug package.
 *
 * (c) Raul Fraile <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Type\ArrayType;

use Ladybug\Type\TypeInterface;

class Item
{

    /** @var mixed $key */
    protected $key;

    /** @var TypeInterface $value */
    protected $value;

    public function __construct($key, TypeInterface $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * Set item key
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * Get item key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param \Ladybug\Type\TypeInterface $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return \Ladybug\Type\TypeInterface
     */
    public function getValue()
    {
        return $this->value;
    }

    public function setLevel($level)
    {
        $this->value->setLevel($level);
    }

    public function getLevel()
    {
        return $this->value->getLevel();
    }

}
