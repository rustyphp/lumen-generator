<?php

namespace rusty\lumenGenerator;

/**
 * Interface RenderableInterface
 * @package rusty\lumenGenerator
 */
interface RenderableInterface
{
    /**
     * @param int $indent
     * @param string $delimiter
     * @return string
     */
    public function render($indent = 0, $delimiter = PHP_EOL);
}
