<?php

namespace ManianRezaei\LaravelLightApi\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ApiProController extends Controller
{
    public function index(Request $request, string $model)
    {
        $configItem = $this->getConfigItem($model);
        if (!$configItem) {
            return response("Not access", 401);
        }

        $fields = $this->getFields($request);
        return $this->fetch($configItem, $fields);
    }

    private function getConfigItem(string $model)
    {
        $config = config('apilight.permissions');
        return array_key_exists($model, $config) ? $config[$model] : false;
    }

    private function fetch($configItem, $fields)
    {
        $allowlist = $configItem['allowlist'];

        if (is_array($fields) && $fields[0] != '*') {
            $allowlist = array_intersect($allowlist, $fields);
        }

        if (count($allowlist) == 0) {
            return [];
        }

        $model = $configItem['model'];
        return $model::query()->get($allowlist);
    }

    private function getFields(Request $request)
    {
        $fields = $request->select;
        if (!$fields) {
            return null;
        }
        return explode(',', $fields);

    }

}
