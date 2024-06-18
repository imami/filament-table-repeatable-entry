<?php

namespace Imami\FilamentTableRepeatableEntry\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Imami\FilamentTableRepeatableEntry\FilamentTableRepeatableEntry
 */
class FilamentTableRepeatableEntry extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Imami\FilamentTableRepeatableEntry\Components\FilamentTableRepeatableEntry::class;
    }
}
