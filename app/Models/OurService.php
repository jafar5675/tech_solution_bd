<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurService extends Model
{
    use HasFactory;

    protected $table = 'our_services';


    static public function getSingle($id)
    {
        return OurService::find($id);
    }

    static public function getOurService()
    {
        return self::select('our_services.*')
                   ->where('is_delete', '=', 0)
                   ->orderBy('id', 'desc')
                   ->get();
    }

    static public function getAllService()
    {
        return self::select('our_services.*')
                   ->where('status', '=', 1)
                   ->where('is_delete', '=', 0)
                   ->orderBy('id', 'desc')
                   ->limit(5)
                   ->get();
    }
}