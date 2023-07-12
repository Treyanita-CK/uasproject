<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use illuminate\Database\Eloquent\Factories\HasFactory;

class Kritik_SaranModel extends Model
{
    public function allData()
    {
        return DB::table('kritik_saran')->get();
    }
}
