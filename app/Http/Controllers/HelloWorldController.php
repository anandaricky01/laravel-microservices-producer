<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Jobs\SendHelloWorld;
use App\Services\Test\TestJobService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HelloWorldController extends Controller
{
    public function sendHelloWorld($msg){
        // $data = [
        //     'message' => $msg,
        // ];
        // dispatch(new SendHelloWorld($data))->onQueue('msg:hello');
        $test = new TestJobService($msg);
        $test->sendHelloWorld();
        
        return response()->json([
            'message' => $test
        ]);
    }
}
