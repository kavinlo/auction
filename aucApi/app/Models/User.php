<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
//    protected $table = 'auc_users';
    protected $fillable = ['uName','uPassword'];
    public $timestamps = false;
}
