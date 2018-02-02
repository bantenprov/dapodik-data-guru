<?php namespace Bantenprov\AngkaHarapanHidup\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The AngkaHarapanHidup facade.
 *
 * @package Bantenprov\AngkaHarapanHidup
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class AngkaHarapanHidup extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'angka-harapan-hidup';
    }
}
