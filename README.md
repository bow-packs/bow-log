# bow-log
Laravel5-Wrapper to monolog for use with monologs multichannel feature

##Installation

```composer require bow/log ^0.1```

Add to config/app.php

* providers:
```php
Bow\Log\LogServiceProvider::class,
```

* aliases:
```php
'BowLog' => Bow\Log\Support\Facades\BowLog::class,
```

run in project root:

```php artisan vendor:publish --provider="Bow\Log\LogServiceProvider" --tag="config"```


##Usage

eg.:
```BowLog::channel('joe long')->debug('How doe?')```

##TODO

* config option for logging to database
* functionality to log to database :)


