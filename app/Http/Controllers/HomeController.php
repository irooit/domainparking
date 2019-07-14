<?php

namespace App\Http\Controllers;

use App\Tools\ServerTool;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        $title = ServerTool::getDomain($_SERVER['HTTP_HOST']) ?? '';
        $event = 'event-testsss';
        $result = [
            'title' => $title,
            'event' => $event
        ];
        return view('index', ['data' => $result]);
    }
}
