<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DosenModel;
use Auth;

class DosenController extends Controller
{
    
    public function __construct()
    {
        $this->DosenModel = new DosenModel();
   
    } 
       

    public function index(){

        $data = [
            'dosen' => $this-> DosenModel->allData()
        ];
        return view('dosen', $data);
    }
    public function about(){

       
        return view('about');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$dos = DB::table('dosen')
		->where('naama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('dosen',['dosen' => $dos]);
 
	}
}
