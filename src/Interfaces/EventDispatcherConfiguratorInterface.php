<?php

namespace ZnCore\EventDispatcher\Interfaces;

interface EventDispatcherConfiguratorInterface
{

    public function addSubscriber($subscriberDefinition): void;
}