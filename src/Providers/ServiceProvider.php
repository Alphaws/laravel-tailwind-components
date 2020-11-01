<?php
/**
 * This file is part of the AtlasERP project.
 *
 * LICENSE: This source file is subject to version 3.14 of the PrStart license
 * that is available through the world-wide-web at the following URI:
 * https://www.prstart.co.uk/license/  If you did not receive a copy of
 * the PrStart License and are unable to obtain it through the web, please
 * send a note to imre@prstart.co.uk so we can mail you a copy immediately.
 *
 * DESCRIPTION: AtlasERP Project
 *
 * @category   Laravel
 * @package    Tailwind Components
 * @author     Imre Szeness <imre@prstart.co.uk>
 * @copyright  Copyright (c) 2020 PrStart Ltd. (https://www.prstart.co.uk)
 * @license    https://www.prstart.co.uk/license/ PrStart Ltd. License
 * @version    1.0.0 (04/04/2020)
 * @link       https://www.prstart.co.uk/laravel-development
 * @since      File available since Release 1.0.0
 */

declare(strict_types=1);

namespace Alphaws\LaravelTailwindComponents\Providers;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * Class ServiceProvider
 * @package Alphaws\LaravelTailwindComponents\Providers
 */
class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/config/config.php' => config_path('tailwind-components.php'),
            ]);
            $this->publishes([
                __DIR__ . '/../../resources/views' => base_path('resources/views/vendor/tailwind-components'),
            ], 'views');
        }
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'tailwind-components');

        $prefix = config('tailwind-components.prefix');
    }
}
