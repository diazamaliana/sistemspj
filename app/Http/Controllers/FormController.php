<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form()
    {
        return view ('form.event1');
    }

    public function form1()
    {
        return view ('form.event2');
    }
}
