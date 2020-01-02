<?php

namespace rusty\lumenGenerator\Model;

use rusty\lumenGenerator\RenderableModel;

/**
 * Class ImportClassModel
 * @package rusty\lumenGenerator\Model
 */
class ImportClassModel extends RenderableModel
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $from;

    /**
     * PHPClassImport constructor.
     * @param string $name
     * @param string $from
     */
    public function __construct($name, $from)
    {
        $this->name = $name;
        $this->from = $from;
    }

    /**
     * {@inheritDoc}
     */
    public function toLines()
    {
        if($this->name == '*') {
            return sprintf('import * as %s from \'%s\';', $this->from, $this->from);
        } else {
            return sprintf('import { %s } from \'%s\';', $this->name, $this->from);
        }
        
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

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }
}
