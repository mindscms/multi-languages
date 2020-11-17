<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $locale = app()->getLocale();
        $this->configureRateLimiting();

        $this->routes(function () use ($locale) {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                // ->prefix($locale)
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::bind('post', function ($slug) use ($locale) {
                return $this->resolveModel(Post::class, $slug, $locale);
            });

        });

    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60);
        });
    }

    protected function resolveModel($modelClass, $slug, $locale)
    {
        $model = $modelClass::where('slug->'. $locale, $slug)->first();

        if (is_null($model)) {

            foreach (config('locales.languages') as $key => $val)
            {
                $modelInLocale = $modelClass::where('slug->'. $key, $slug)->first();
                if ($modelInLocale) {
                    $newRoute = str_replace($slug, $modelInLocale->slug, urldecode(request()->fullUrl()));
                    return redirect()->to($newRoute)->send();
                }
            }

            abort(404);
        }

        return $model;

    }

}
