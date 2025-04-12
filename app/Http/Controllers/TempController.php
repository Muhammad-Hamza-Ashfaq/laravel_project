<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Helpers\CustomHelper\tempHelperFunction;

class TempController extends Controller
{
    public function temp()
    {
        return tempHelperFunction('This Text Need to be Displayed!');
    }
}
