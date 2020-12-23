<?php
namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PegawaiController extends Controller{
    public function index(Request $request){
        // return DB::table('Pegawai')->get();
        return Pegawai::paginate();
    }

    public function find($id){
        return Pegawai::find($id);
    }

    public function create(Request $request){
        Pegawai::create($request->all());
        return ['message' => 'Pegawai berhasil ditambah :)'];
    }

    public function update(Request $request,$nip){
        return Pegawai::where('nip',$nip)->update($request->all());
    }

    public function delete($nip){
        return Pegawai::where('nip',$nip)->delete();
    }
}