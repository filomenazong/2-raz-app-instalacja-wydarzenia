<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rentedroom;

class RentedroomController extends Controller
{
    
    //rederowanie szablonu blade
    //przy pomocy Modelu
    //plaginacja w zależności na której stronie jesteśmy podzielenie strony
    public function index()
    {
        //$rentedrooms = Rentedroom::all();
        return view(
            'rentedrooms.index',
            
            [
                'rentedrooms' => Rentedroom::paginate(
                    //config('pagination.default') //dobrze przechowywać w pliku konf
                    10
                )        
            ]
        
        );
    }    
}
