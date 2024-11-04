<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Modules\Ynotz\EasyApi\Traits\ApiMethodsHelper;

class UserController
{
    use ApiMethodsHelper;

    public function __construct(UserService $service)
    {
        $this->connectorService = $service;
        // $this->itemName = null;
        // $this->itemsCount = 10;
        // $this->resultsName = 'results';
    }
}
