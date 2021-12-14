<?php
/**
 * Here all the kernel configs are set
 */

return [
    "namespaces" => [
        "controllers" => "app\\Http\\controllers"
    ],
    // register router files here
    "routes" => [
        "api.php" => ["prefix" => "api/"],
        "web.php" => ["middlewares"=> "csrf"],
    ],
    // register middlewares here
    "middlewares" => [
        "csrf" => app\Http\middlewares\CsrfMiddleware::class
    ],
    "environment" => [
        "BASE_DIR" => realpath(__DIR__.'/../'),
        "VIEWS_DIR" => realpath(__DIR__.'/../views'),
        "CACHE_DIR" => realpath(__DIR__.'/../storage/cache'),
        "BASE_URL" => $_SERVER["SERVER_NAME"]
    ],
    "primal" => [
        "nodes" =>[]
    ],
    "global_function_files" => [

    ],
    "storage" => [
        "public" => realpath(__DIR__."/../public/"),
        "private" => realpath(__DIR__."/../storage/")
    ],
    "validation_rules" => [
        app\validations\NumberValidation::class,
        app\validations\FileValidation::class,
        app\validations\SizeValidation::class,
        app\validations\TypeValidation::class,
        app\validations\UniqueValidation::class,
        app\validations\ExistsValidation::class
    ],
    "hash" => [
        "algo" => PASSWORD_BCRYPT,
        "options" => [
            "cost" => 10
        ]
    ]
];