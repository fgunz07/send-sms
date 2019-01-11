<?php

namespace Send\Sms;

use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider {

	public function boot() {

		// dd($this->app instanceof Application);

		$this->publishes([
			__DIR__ . '/config.php' => config_path('sms.php'),
		]);

	}

	public function register() {

		$this->app->bind('sms', function () {

			return new SmsService();

		});

	}

}