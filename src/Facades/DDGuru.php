<?php namespace Bantenprov\DDGuru\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The DDGuru facade.
 *
 * @package Bantenprov\DDGuru
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DDGuru extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dd-guru';
    }
}
