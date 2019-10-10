<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function debug($var){
        $bt =  debug_backtrace();
        echo "Debug in ". $bt[0]['file'] . ' line  '. $bt[0]['line'];
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
}
