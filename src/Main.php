<?php

declare(strict_types=1);

namespace StarterPlugin;

use pocketmine\plugin\PluginBase;

final class Main extends PluginBase
{
    protected function onEnable(): void
    {
        $this->getLogger()->info('StarterPlugin is enabled.');
    }
}
