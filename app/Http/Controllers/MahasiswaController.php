<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

use App\Models\MahasiswaModel;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
     
       
    }    

    public function index(){

        $data = [
            'mahasiswa' => $this-> MahasiswaModel->allData()
        ];
        return view('mahasiswa', $data);
    }
    public function about(){

       
        return view('about');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$mhs = DB::table('mahasiswa')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('mahasiswa',['mahasiswa' => $mhs]);
 
	}
}
