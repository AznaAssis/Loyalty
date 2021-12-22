<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class booking extends Model
{
    use HasFactory;
    public function sumdata($table,$id)
    {
        return DB::table($table)->select(DB::raw("SUM(prize) as psum"))->where('c_id',$id)->where('status',"cart")->get();

    }
}
