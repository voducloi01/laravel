<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Post;
use App\Models\Tag;
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
    /** one to many **/
        // one to one 
        // many to many
        // 1 post -> many tag
        // 1 tag -> many post
        // ==> pivot table --> table 3
    public function __invoke(Request $request)
    {   
        // $flights = Flight::onlyTrashed()
        // ->where('airline_id', 1)
        // ->get();
        // $data = Post::withTrashed()->where("id",2)->get();
        // return $data;
        // return User::all();
        $user = Address::find(1)->user;
        return $user;
        //Tag::factory(4)->create();
    }
}
