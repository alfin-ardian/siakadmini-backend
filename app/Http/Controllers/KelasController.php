<?php
namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KelasController extends Controller{
    public function index(Request $request){
        // return DB::table('mahasiswa')->get();
        return Kelas::paginate();
    }

    public function find($idkelas){
        return Kelas::find($idkelas);
    }

    public function create(Request $request){
        Kelas::create($request->all());
        return ['message' => 'Kelas berhasil ditambah :)'];
    }

    public function update(Request $request,$idkelas){
        return Kelas::where('idkelas',$idkelas)->update($request->all());
    }

    public function delete($idkelas){
        return Kelas::where('idkelas',$idkelas)->delete();
    }
}