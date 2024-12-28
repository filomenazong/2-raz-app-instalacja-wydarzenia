<?php

namespace App\Http\Controllers;

use App\Models\RentedroomModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller
{
   use AuthorizesRequests;
}




/*
    //rederowanie szablonu blade
            //przy pomocy Modelu
            //plaginacja w zależności na której stronie jesteśmy
    public function index(){
        return view(
            'rentedrooms.index',
            [
                   'rentedrooms' => RentedroomModel::paginate(
                   //config('pagination.default'))
                    10)
            ]
        );
    }*/