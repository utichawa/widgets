<?php

namespace Utichawa\Widgets;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Utichawa\Widgets\WidgetClass
 */
class WidgetFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
