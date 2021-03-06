<?php namespace GrahamCampbell\DigitalOceanAPI;

/**
 * This file is part of Laravel DigitalOcean API by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    Laravel-DigitalOcean-API
 * @author     Graham Campbell
 * @license    Apache License
 * @copyright  Copyright 2013 Graham Campbell
 * @link       https://github.com/GrahamCampbell/Laravel-DigitalOcean-API
 */

use Illuminate\Support\ServiceProvider;

class DigitalOceanAPIServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
        $this->package('graham-campbell/digitalocean-api');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app['digitaloceanapi'] = $this->app->share(function($app) {
            return new Classes\DigitalOceanAPI;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return array('digitaloceanapi');
    }
}
