# Send/sms

### A laravel package use to send sms for the users.
###### installation
```
composer require huie/sendgud
```

##### after installation in your ```config/app.php``` add
```
    /*
	* Package Service Providers...
	*/
	Send\Sms\SmsServiceProvider::class,
```

###### and in the alliases add

```
'Sms' => Send\Sms\Facades\Sms::class,
```

###### Generate configuration file run command
```
php artisan vendor:publish
```

###### in your ```config/sms.php``` your can set default to your service provider or by adding ```PROVIDER``` in your ```.env```
```
'PROVIDER_URI' => env('PROVIDER', null)
```

### You can use by importing facade

```
use use Send\Sms\Facades\Sms;

Sms::sendSms('9123jas87123', '923!@#43245@#$', 'samplepass');

```