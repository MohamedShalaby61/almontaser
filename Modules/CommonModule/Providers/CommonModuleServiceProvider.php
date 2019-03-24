<?php

namespace Modules\CommonModule\Providers;

use App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\View;
use Modules\CommonModule\Helper\AppsHelper;


class CommonModuleServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        if(Schema::hasTable('languages')) {
            $activeLang = \LanguageHelper::getLang();
            $activeLangCode = \LanguageHelper::getLangCode();

            if(Schema::hasTable('apps')) {
                $activeApps=AppsHelper::getActiveApps();
            }

            View::composer('*', function ($view) use ($activeLang,$activeLangCode,$activeApps) {
                $view->with('activeLang', $activeLang);
                $view->with('activeLangCode', $activeLangCode);
                $view->with('activeApps', $activeApps);

            });
        }



        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        // bind here
        App::bind('LanguageHelper', function() {
            return new \Modules\CommonModule\Helper\LanguageHelper;
        });
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('commonmodule.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'commonmodule'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/commonmodule');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/commonmodule';
        }, \Config::get('view.paths')), [$sourcePath]), 'commonmodule');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/commonmodule');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'commonmodule');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'commonmodule');
        }
    }

    /**
     * Register an additional directory of factories.
     * 
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production')) {
            app(Factory::class)->load(__DIR__ . '/../Database/factories');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
