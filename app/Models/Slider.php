<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';


    static public function getSingle($id)
    {
        return Slider::find($id);
    }

    static public function getSlider()
    {
        return self::select('sliders.*')
                   ->where('is_delete', '=', 0)
                   ->orderBy('id', 'asc')
                   ->get();
    }
    static public function getSliderForHome()
    {
        return self::select('sliders.*')
                   ->where('status', '=', 1)
                   ->where('is_delete', '=', 0)
                   ->orderBy('id', 'asc')
                   ->limit(5)
                   ->get();
    }
}