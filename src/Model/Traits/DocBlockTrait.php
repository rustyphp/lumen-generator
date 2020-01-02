<?php

namespace rusty\lumenGenerator\Model\Traits;

use rusty\lumenGenerator\Model\DocBlockModel;

/**
 * Trait DocBlockTrait
 * @package rusty\lumenGenerator\Model\Traits
 */
trait DocBlockTrait
{
    /**
     * @var DocBlockModel
     */
    protected $docBlock;

    /**
     * @return DocBlockModel
     */
    public function getDocBlock()
    {
        return $this->docBlock;
    }

    /**
     * @param DocBlockModel $docBlock
     *
     * @return $this
     */
    public function setDocBlock($docBlock)
    {
        $this->docBlock = $docBlock;

        return $this;
    }
}
