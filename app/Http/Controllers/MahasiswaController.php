<?php
namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller{
    public function index(Request $request){
        // return DB::table('mahasiswa')->get();
        return Mahasiswa::paginate();
    }

    public function find($id){
        return Mahasiswa::find($id);
    }

    public function create(Request $request){
        Mahasiswa::create($request->all());
        return ['message' => 'Mahasiswa berhasil ditambah :)'];
    }

    public function update(Request $request,$id){
        return Mahasiswa::where('id',$id)->update($request->all());
    }

    public function delete($id){
        return Mahasiswa::where('id',$id)->delete();
    }
}