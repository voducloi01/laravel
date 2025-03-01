<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Post;
use App\Models\User;
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
        // $flights = Flight::onlyTrashed()
        // ->where('airline_id', 1)
        // ->get();
        // $data = Post::withTrashed()->where("id",2)->get();
        // return $data;
        // return User::all();
        $user = User::find(1)->address;
        return $user;
    }
}
