<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';


    static public function getSingle($id)
    {
        return Course::find($id);
    }

    static public function getCourse()
    {
        return self::select('courses.*')
                   ->where('is_delete', '=', 0)
                   ->orderBy('id', 'desc')
                   ->get();
    }

    static public function getAllCourse()
    {
        return self::select('courses.*')
                   ->where('is_delete', '=', 0)
                   ->orderBy('id', 'desc')
                   ->limit(6)
                   ->get();
    }
}
