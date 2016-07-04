<?php

namespace App\Auth\Controllers;

use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use \Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use \Illuminate\Foundation\Bus\DispatchesJobs;
    use \Illuminate\Foundation\Validation\ValidatesRequests;

    public function __construct()
    {
        View::share('__addon', addon());
    }
}
