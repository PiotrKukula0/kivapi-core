<?php

namespace Core\ComponentManager;

abstract class ComponentController
{
    public static function type()
    {
        return "component";
    }

    public abstract function loadView();
}