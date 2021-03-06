<?php

namespace Types\Mutable;

/**
 * Created by IntelliJ IDEA.
 * User: trentonmaki
 * Date: 8/18/15
 * Time: 6:32 PM
 */
class Numeric extends MutablePrimitive
{

    /**
     * @return bool
     */
    protected function type($val)
    {
        return is_numeric($val);
    }
}

