<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        //$rentedrooms = Rentedroom::all();
        return view(
            'users.index',
            
            [
                'users' => User::paginate(
                    //config('pagination.default') //dobrze przechowywać w pliku konf
                    10
                )        
            ]
        
        );
    }    
}
