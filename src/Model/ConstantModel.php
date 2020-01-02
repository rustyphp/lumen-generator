<?php

namespace rusty\lumenGenerator\Model;

use rusty\lumenGenerator\Model\Traits\ValueTrait;
use rusty\lumenGenerator\RenderableModel;

/**
 * Class PHPClassConstant
 * @package rusty\lumenGenerator\Model
 */
class ConstantModel extends RenderableModel
{
    use ValueTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * PHPClassConstant constructor.
     * @param string $name
     * @param mixed $value
     */
    public function __construct($name, $value)
    {
        $this->setName($name);
        $this->setValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function toLines()
    {
        $value = $this->renderValue();

        return sprintf('const %s = %s;', $this->name, $value);
    }

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
