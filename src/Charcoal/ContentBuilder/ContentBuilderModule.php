<?php

namespace Charcoal\ContentBuilder;

// from charcoal-app
use Charcoal\App\Module\AbstractModule;

/**
 * Property Filter Module
 */
class ContentBuilderModule extends AbstractModule
{
    const APP_CONFIG = 'vendor/locomotivemtl/charcoal-contrib-content-builder/config/config.json';

    /**
     * Setup the module's dependencies.
     *
     * @return AbstractModule
     */
    public function setup()
    {
        $container = $this->app()->getContainer();

        // Define ServiceProviders and Config if needed.

        return $this;
    }
}
