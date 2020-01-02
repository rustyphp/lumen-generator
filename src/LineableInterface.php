<?php

namespace rusty\lumenGenerator;

/**
 * Interface LineableInterface
 * @package rusty\lumenGenerator
 */
interface LineableInterface
{
    /**
     * @return string|string[]
     */
    public function toLines();
}