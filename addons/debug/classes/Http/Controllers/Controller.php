<?php

namespace App\Debug\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    public function __construct()
    {
        View::share('__addon', addon());
    }
}
