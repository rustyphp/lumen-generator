<?php

namespace rusty\lumenGenerator\Model\Traits;

/**
 * Trait FinalModifierTrait
 * @package rusty\lumenGenerator\Model\Traits
 */
trait FinalModifierTrait
{
    /**
     * @var boolean
     */
    protected $final;

    /**
     * @return boolean
     */
    public function isFinal()
    {
        return $this->final;
    }

    /**
     * @param boolean $final
     *
     * @return $this
     */
    public function setFinal($final = true)
    {
        $this->final = boolval($final);

        return $this;
    }
}