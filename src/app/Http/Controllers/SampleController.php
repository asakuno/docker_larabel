<?php

namespace App\Http\Controllers;

class SampleController extends Controller
{
    public function sample()
    {
        return response('sample');
    }
}