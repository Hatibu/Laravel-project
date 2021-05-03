<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Member extends Model
{
    use HasFactory;
    protected $table = "members";

    public static function getMember()
    {
        $records = DB::table('members')->select('id','first_name','last_name','email','phone_number','role','created_at','updated_at','updated_at')->get()->toArray();
        return $records;
    }
}
