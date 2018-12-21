<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    //
    protected $fillable = ['lotName','lotPrice','range','time','timeLength','lDescription'];
}
