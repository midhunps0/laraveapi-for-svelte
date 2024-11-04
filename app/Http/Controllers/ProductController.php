<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;
use Modules\Ynotz\EasyApi\Traits\ApiMethodsHelper;

class ProductController
{
    use ApiMethodsHelper;

    public function __construct(ProductService $service)
    {
        $this->connectorService = $service;
        // $this->itemName = null;
        // $this->itemsCount = 10;
        // $this->resultsName = 'results';
    }
}
