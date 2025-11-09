<?php

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// Detecta ambiente
$app->detectEnvironment(function () {
    return env('APP_ENV', 'production');
});

// Habilita facades
$app->withFacades();

// Habilita Eloquent ORM
$app->withEloquent();

// Registra os provedores de serviços
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

return $app;
