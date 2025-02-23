<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    //
    public function __invoke(Request $request)
    {
        //
        return DB::table('posts')->where('id','=',53)->get();
    }
}
