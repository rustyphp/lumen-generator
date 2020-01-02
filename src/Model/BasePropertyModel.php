<?php

namespace rusty\lumenGenerator\Model;

use rusty\lumenGenerator\RenderableModel;

/**
 * Class BaseProperty
 * @package rusty\lumenGenerator\Model
 */
abstract class BasePropertyModel extends RenderableModel
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
