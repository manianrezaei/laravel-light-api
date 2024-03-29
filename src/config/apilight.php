<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Set Api Light EndPoint
    |--------------------------------------------------------------------------
    */

    'endpoint' => "/apilight",

    /*
    |--------------------------------------------------------------------------
    | Set Api Pro Model Permissions
    |--------------------------------------------------------------------------
    */

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

];
