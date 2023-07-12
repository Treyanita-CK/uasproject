<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DosenModel extends Model
{
    public function allData(){
        return DB::table('dosen')->get();
    }

}
