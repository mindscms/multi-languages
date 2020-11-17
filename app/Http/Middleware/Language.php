<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $locales = config('locales.languages');

        if (!array_key_exists($request->segment(1), $locales)) {

            $segments = $request->segments();

            $segments = Arr::prepend($segments, $locales);

            return redirect()->to(implode('/', $segments));
        }

        return $next($request);
    }
}
