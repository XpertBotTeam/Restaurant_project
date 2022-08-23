<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function Search(Request $request){
        $search = $request->get('search');
        $users= DB::table('users')->where('name','like','%'.$search.'%')->paginate(5);

        
    return view('/users',['users'=>$users]);
    }

    
}
