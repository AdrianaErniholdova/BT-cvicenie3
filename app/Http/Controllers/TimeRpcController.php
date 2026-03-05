<?php

namespace App\Http\Controllers;

use App\Services\TimeService;
use Illuminate\Http\Request;

class TimeRpcController extends Controller
{
    public function getCurrentTime(TimeService $timeService)
    {
        $time = $timeService->getCurrentTime();

        return response("Aktuálny čas je: {$time}");
    }
}
