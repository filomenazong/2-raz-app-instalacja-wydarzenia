<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rentedroom extends Model
{
    //wykorzystuje fabryke
    use HasFactory;
    //zapewniliśmy usuwanie soft w migracji
    use SoftDeletes;

    //które kolumny mogą być wypełmiane w sposób masowy, kiedy tworzymy instacje create
    //Id nie chcemy aby user masowo wypałniał bo jest auto, dlatego tu nie mamy
    protected $fillable = [
        'number_people',
        'date_from',
        'date_to',
    ];
}
