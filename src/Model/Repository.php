<?php

namespace Halfpastfour\SatisGenerator\Model;

use Halfpastfour\SatisGenerator\Utilities\IteratorAggregate;

/**
 * Class Repository
 *
 * @package Halfpastfour\SatisGenerator\Model
 */
class Repository extends IteratorAggregate implements \IteratorAggregate
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $url;

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Repository
     */
    public function setType(string $type): Repository
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return Repository
     */
    public function setUrl(string $url): Repository
    {
        $this->url = $url;

        return $this;
    }
}
