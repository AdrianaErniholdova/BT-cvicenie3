<?php

namespace App\Http\Controllers;

use App\Services\TimeService;
use Illuminate\Http\Response;

class TimeApiController extends Controller
{
    public function index(TimeService $timeService)
    {
        $time = $timeService->getCurrentTime();

        return response()->json(['current_time' => $time], Response::HTTP_OK);
    }
}
