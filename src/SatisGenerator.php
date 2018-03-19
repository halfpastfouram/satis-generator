<?php

namespace Halfpastfour\SatisGenerator;

use Zend\Json\Json as JsonHelper;

/**
 * Class SatisGenerator
 *
 * @package Halfpastfour\SatisGenerator\SatisGenerator
 */
class SatisGenerator
{
    /**
     * Generator flag for rendering JSON in pretty print.
     */
    const PRETTY_JSON = 1;

    /**
     * @var SatisSettings
     */
    private $settings;

    /**
     * SatisGenerator constructor.
     *
     * @param SatisSettings $settings
     */
    public function __construct(SatisSettings $settings)
    {
        $this->settings = $settings;
    }

    /**
     * @param int|null $flags
     *
     * @return string
     */
    public function generate(?int $flags = null): string
    {
        $output = JsonHelper::encode($this->settings, true, ['enableJsonExprFinder' => true]);
        if ($flags & self::PRETTY_JSON) {
            $output = JsonHelper::prettyPrint($output);
        }

        return $output;
    }
}
