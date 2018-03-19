<?php

namespace Halfpastfour\SatisGenerator;

use Halfpastfour\Collection\Collection\ArrayAccess;
use Halfpastfour\Collection\CollectionInterface;
use Halfpastfour\SatisGenerator\Utilities\IteratorAggregate;
use Zend\Json\Json;

/**
 * Class SatisSettings
 *
 * @package Halfpastfour
 */
class SatisSettings extends IteratorAggregate implements \IteratorAggregate
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $homepage;

    /**
     * @var ArrayAccess
     */
    protected $repositories;

    /**
     * @var ArrayAccess
     */
    protected $requirements;

    /**
     * SatisGenerator constructor.
     */
    public function __construct()
    {
        $this->repositories = new ArrayAccess();
        $this->requirements = new ArrayAccess();
    }

    /**
     * @param string $name
     *
     * @return SatisSettings
     */
    public function setName(string $name): SatisSettings
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $homepage
     *
     * @return SatisSettings
     */
    public function setHomepage(string $homepage): SatisSettings
    {
        $this->homepage = $homepage;

        return $this;
    }

    /**
     * @return string
     */
    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    /**
     * @param CollectionInterface $repositories
     *
     * @return SatisSettings
     */
    public function setRepositories(CollectionInterface $repositories): SatisSettings
    {
        $this->repositories = $repositories;

        return $this;
    }

    /**
     * @return ArrayAccess
     */
    public function getRepositories(): ArrayAccess
    {
        return $this->repositories;
    }

    /**
     * @param CollectionInterface $requirements
     *
     * @return SatisSettings
     */
    public function setRequirements(CollectionInterface $requirements): SatisSettings
    {
        $this->requirements = $requirements;

        return $this;
    }

    /**
     * @return ArrayAccess
     */
    public function getRequirements(): ArrayAccess
    {
        return $this->requirements;
    }

    /**
     * @return string
     */
    public function toJson(): string
    {
        return Json::encode($this->getIterator(), true);
    }
}
