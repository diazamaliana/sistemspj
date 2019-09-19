<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Event1Controller extends Controller
{
    public function event1()
    {
        $data_event1 = \App\Event1::all();
        return view ('event1.event1',['data_event1'=> $data_event1 ]);
    }
}
