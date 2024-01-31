<?php

use ManianRezaei\LaravelLightApi\controllers\ApiProController;

$endpoint = config('apilight.endpoint');

Route::middleware('web')->get($endpoint, function (Request $request) {
    echo 'Api working as expected';
});



Route::middleware('web')->get($endpoint . '/{model}',[ApiProController::class, 'index']);





