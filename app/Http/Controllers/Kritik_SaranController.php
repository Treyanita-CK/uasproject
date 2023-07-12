<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kritik_SaranModel;
use Auth;



class Kritik_SaranController extends Controller
{
    public function __construct()
    {
        $this->Kritik_SaranModel = new kritik_SaranModel();
    

    }    

    public function index(){

        $data = [
            'kritik' => $this-> Kritik_SaranModel->allData()
        ];
        return view('kritik', $data);
    }
    public function about(){

       
        return view('about');
    }
    public function proses(Request $request)
    {
        DB::table('kritik_saran')->insert([
        'nama' => $request->nama,
        'email' => $request->email,
        'pesan' => $request->pesan,
        ]);
        
        return redirect ('/about'); 
    }
    public function kritik()
    {
        return view('kritik');
    }
}
