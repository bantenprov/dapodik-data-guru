<?php namespace Bantenprov\DDGuru\Http\Middleware;

use Closure;

/**
 * The DDGuruMiddleware class.
 *
 * @package Bantenprov\DDGuru
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DDGuruMiddleware
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
