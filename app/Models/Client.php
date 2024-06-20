<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';


    static public function getSingle($id)
    {
        return Client::find($id);
    }

    static public function getClient()
    {
        return self::select('clients.*')
                   ->where('is_delete', '=', 0)
                   ->orderBy('id', 'desc')
                   ->get();
    }
}