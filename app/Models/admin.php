<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class admin extends Model
{
    use HasFactory;
    public function adlog($table,$uname,$password)
    {
        return DB::table($table)->where('uname',$uname)->where('password',$password)->first();
    }
}
