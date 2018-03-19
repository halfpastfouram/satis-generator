<?php

namespace Halfpastfour\SatisGenerator\Utilities;

/**
 * Interface KeyValueArraySerializableInterface
 *
 * @package Halfpastfour\SatisGenerator\Utilities
 */
interface KeyValueArraySerializableInterface
{
    /**
     * @return string
     */
    public function getKey(): ?string;

    /**
     * @return string
     */
    public function getValue(): ?string;
}
