<?php

namespace Halfpastfour\SatisGenerator\Model;

use Halfpastfour\SatisGenerator\Utilities\KeyValueArraySerializableInterface;

/**
 * Class Requirement
 *
 * @package Halfpastfour\SatisGenerator\Model
 */
class Requirement implements \IteratorAggregate, KeyValueArraySerializableInterface
{
    /**
     * @var string
     */
    private $package;

    /**
     * @var string
     */
    private $version;

    /**
     * @return string
     */
    public function getPackage(): ?string
    {
        return $this->package;
    }

    /**
     * @param string $package
     *
     * @return Requirement
     */
    public function setPackage(string $package): Requirement
    {
        $this->package = $package;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return Requirement
     */
    public function setVersion(string $version): Requirement
    {
        $this->version = $version;

        return $this;
    }

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
        return new \ArrayIterator([
            $this->getKey() => $this->getValue(),
        ]);
    }

    /**
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->package;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->version ?: '*';
    }
}
