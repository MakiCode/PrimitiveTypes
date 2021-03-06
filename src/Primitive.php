<?php

namespace Types;
use InvalidArgumentException;
use JsonSerializable;

/**
 * Created by IntelliJ IDEA.
 * User: trentonmaki
 * Date: 8/18/15
 * Time: 6:27 PM
 */
abstract class Primitive implements JsonSerializable
{

    private $val;

    public function __construct($val)
    {
        if(!$this->type($val)) {
            throw new InvalidArgumentException("Incorrect type passed");
        }
        $this->val = $val;
    }

    public function get()
    {
        return $this->val;
    }

    /**
     * @return bool
     */
    protected abstract function type($val);

    public function jsonSerialize() {
        return $this->get();
    }

    public function __toString() {
        return (string)$this->get();
    }

}