<?php

namespace rusty\lumenGenerator\Helper;

/**
 * Class ClassHelper
 * @package rusty\lumenGenerator\Helper
 */
class ClassHelper
{
    /**
     * @param string $fullClassName
     * @return string
     */
    public static function getShortClassName($fullClassName)
    {
        $pieces = explode('\\', $fullClassName);

        return end($pieces);
    }
}
