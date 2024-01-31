# Laravel Light API

![](https://img.shields.io/github/v/release/manianrezaei/laravel-light-api.svg?sort=semver)

The Laravel Light API package is designed to assist users in creating APIs for all Models in Laravel. With this package, you can easily generate API routes for your models, saving you time and effort.

## Installation

To install the package, run the following command in your Laravel project:




```bash
$ composer require manianrezaei/laravel-light-api
```

Once the package is installed, you can start using it by following these steps:

1. Publish package vendors:

   ```bash
   $ php artisan vendor:publish
   ```

then select package provider
`ManianRezaei\LaravelLightApi\providers\ApiLightServiceProvider`
 
2. Optimize the API routes using the following command:
    ```bash
      $ php artisan optimize 
    ```

3. Thats it! You now have API routes and controllers set up for all your models.


## Usage
Laravel Light Api endpoint is `/apilight` by default

To change the endpoint and configure the accessable models, see the `config/apilight.php` .


Set the base endpoint:
```php
 'endpoint' => "/apilight",
```

List of models can access by api

```php
'permissions'=>[
       "usr"=> [
            "model"=> \App\Models\User::class,
            "allowlist" =>[
                'id',
                'updated_at',
                'created_at'
            ]
        ]
    ]
```


**"Permissions"** contains an array of models that are allowed in LightAPI. 

To keep the models' names hidden, you can specify an alias. 
In the example above, **"usr"** is an alias for the **User** model, 
and the endpoint for this model will be /apilight/**usr**. 

All selectable fields should be added to the **allowlist**.

## Custom selection

By default, LightAPI selects all whitelisted fields in each query. 

Selected fields can be specified in the query string like this: 

`/apilight/usr?select=id,created_at`
 

## Contributing

If you would like to contribute to this package, feel free to fork the repository on GitHub and submit a pull request. We welcome any contributions and appreciate your support.

## License

This package is open-source and released under the [MIT License](https://opensource.org/licenses/MIT). Feel free to use, modify, and distribute it as per the terms of the license.

For more information, please refer to the [GitHub repository](https://github.com/manianrezaei/laravel-light-api).

---
 
