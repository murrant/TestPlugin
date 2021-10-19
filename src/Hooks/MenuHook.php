<?php

namespace LibreNMS\TestPlugin\Hooks;

use App\Plugins\Hooks\MenuEntryHook;

class MenuHook extends MenuEntryHook
{
    public $view = 'test-plugin::menu.main';
}
