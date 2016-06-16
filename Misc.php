<?php


namespace Th3FalleN\Support;

class Misc
{
    /**
     * Return the default value of the given value.
     *
     * @param  mixed  $value
     * @return mixed
     */
    public static function value($value)
    {
        return $value instanceof \Closure ? $value : $value;
    }
}
