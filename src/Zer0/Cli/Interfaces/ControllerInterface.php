<?php

namespace Zer0\Cli\Intefarces;

use Zer0\App;
use Zer0\Cli\Cli;
use Zer0\Config\Interfaces\ConfigInterface;

/**
 * Interface ControllerInterface
 * @package Zer0\Cli\Intefarces
 */
interface ControllerInterface
{
    /**
     * ControllerInterface constructor.
     * @param Cli $cli
     * @param App $app
     */
    public function __construct(Cli $cli, App $app, ?ConfigInterface $config);
    public function before(): void;
    public function after(): void;
}
