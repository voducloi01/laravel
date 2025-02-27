<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        $post = Post::all();
        return $post;
        //
        // return DB::table('posts')
        //             ->join('categories','posts.category_id','=','categories.id')
        //             ->get();
    }
}
