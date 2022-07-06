<?php

namespace ZnCore\EventDispatcher\Traits;

use ZnCore\EntityManager\Interfaces\EntityManagerInterface;

trait EventSkipHandleTrait
{

    private $skipHandle = false;

    public function isSkipHandle(): bool
    {
        return $this->skipHandle;
    }

    public function skipHandle(): void
    {
        $this->skipHandle = true;
    }
}
