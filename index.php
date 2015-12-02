<?php

require_once("vendor/autoload.php");


use ModuleTutorial\MyModule\Services\MyService;
use App\Services\ModuleWrapper;

$baseService = new MyService();

$moduleWrapper = new ModuleWrapper($baseService);

echo $moduleWrapper->doExtraThings() . PHP_EOL;
