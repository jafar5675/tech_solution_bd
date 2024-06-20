<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';


    static public function getSingle($id)
    {
        return Project::find($id);
    }

    static public function getProject()
    {
        return self::select('projects.*')
                   ->where('is_delete', '=', 0)
                   ->orderBy('id', 'desc')
                   ->get();
    }
}
