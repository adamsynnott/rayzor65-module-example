<?php

namespace App\Services;

/**
 * Class ModuleWrapper
 * @package App\Services
 */
class ModuleWrapper
{
    private $baseService;

    public function __construct($baseService)
    {
        $this->baseService = $baseService;
    }

    /**
     * @return string
     */
    public function doExtraThings()
    {
        return $this->baseService->doSomething() . " -- reusability is OK";
    }

}