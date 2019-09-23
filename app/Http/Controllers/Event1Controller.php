<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Event1Controller extends Controller
{
    public function form()
    {
        return view ('form.event1');
    }
}
