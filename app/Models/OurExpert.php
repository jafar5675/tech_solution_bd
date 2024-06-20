<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurExpert extends Model
{
    use HasFactory;

    protected $table = 'our_experts';


    static public function getSingle($id)
    {
        return OurExpert::find($id);
    }

    static public function getExperts()
    {
        return self::select('our_experts.*')
        ->where('is_delete', '=', 0)
        ->orderBy('id', 'desc')
        ->get();
    }
}
