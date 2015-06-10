<?php

namespace App\Auth\Http\Controllers;

use Illuminate\Routing\Controller;

abstract class BaseController extends Controller
{
    use \Illuminate\Foundation\Bus\DispatchesCommands;
    use \Illuminate\Foundation\Validation\ValidatesRequests;

    public function __construct()
    {
        View::share('addon_name', addon_name());
    }
}
