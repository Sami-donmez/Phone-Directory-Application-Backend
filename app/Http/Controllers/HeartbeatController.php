<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeartbeatController extends Controller
{
    public function heartbeat()
    {
        return response()->json([
            'status'=>true,
            'version'=>env('APP_VERSION')
        ]);
    }
}
