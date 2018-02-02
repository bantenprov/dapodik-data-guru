<?php namespace Bantenprov\AngkaHarapanHidup\Http\Middleware;

use Closure;

/**
 * The AngkaHarapanHidupMiddleware class.
 *
 * @package Bantenprov\AngkaHarapanHidup
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class AngkaHarapanHidupMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
