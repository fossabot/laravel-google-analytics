<?php

namespace GoNoWare\GoogleAnalytics;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/google_analytics.php' => config_path('vendor/google_analytics.php'),
            ], 'config');
            $this->publishes([
                __DIR__.'/../public' => public_path('vendor/google-analytics'),
            ], 'public');
        }
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'google_analytics');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/google_analytics.php', 'google_analytics');

        Blade::directive('googleanalytics', function ($expression) {
            if ($expression == '') {
                $expression = 'null';
            }

            return "<?php echo view('google_analytics::script', ['enabled' => {$expression}])->render(); ?>";
        });
    }

    /**
     * Merge the given configuration with the existing configuration.
     *
     * @param string $path
     * @param string $key
     *
     * @return void
     */
    protected function mergeConfigFrom($path, $key)
    {
        $config = $this->app['config']->get($key, []);

        $this->app['config']->set('vendor.'.$key, array_merge(require $path, $config));
    }
}
