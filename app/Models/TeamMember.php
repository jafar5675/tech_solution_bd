<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $table = 'team_members';


    static public function getSingle($id)
    {
        return TeamMember::find($id);
    }

    static public function getTeamMember()
    {
        return self::select('team_members.*')
                   ->where('is_delete', '=', 0)
                   ->orderBy('id', 'desc')
                   ->get();
    }
}
