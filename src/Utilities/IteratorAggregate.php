<?php

namespace Halfpastfour\SatisGenerator\Utilities;

/**
 * Class IteratorAggregate
 *
 * @package Halfpastfour\SatisGenerator\Utilities
 */
abstract class IteratorAggregate
{
    /**
     * Retrieve an external iterator
     *
     * @link  http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return \Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator(): \Traversable
    {
        return new \ArrayIterator(get_object_vars($this));
    }
}
