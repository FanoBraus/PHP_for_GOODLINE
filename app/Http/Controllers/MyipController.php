<?php

namespace App\Http\Controllers;

use App\Services\MyIPService;
use Illuminate\Http\Request;

class MyipController extends Controller
{
    private $myipService;

    public function __construct(MyIPService $myipService)
    {
        $this->myipService = $myipService;
    }

    public function checkIP(Request $request)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $result = $this->myipService->checkIP($ip);
        return response('ВАШ IP: '. $ip. '<br/>IP: '. $result, 200);
    }
}
