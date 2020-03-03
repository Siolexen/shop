<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function view($view, $data = [])
    {
        if(isset($this->prefix) && $this->prefix !== null) {
            $view = sprintf("%s.%s", $this->prefix, $view);
        }

        return view($view, $data);
    }

}
