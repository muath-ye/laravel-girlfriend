<?php

namespace Muathye\GirlFriend;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
    	if ($this->app->runningInConsole()) {
	        $this->commands([
	            InstallCommand::class
	        ]);
    	}

        // TODO: Use the path in created config. see InstallCommand.php
        if (File::exists(resource_path('helpers.php'))) {
        	require_once resource_path('helpers.php');
        }
    }
}
