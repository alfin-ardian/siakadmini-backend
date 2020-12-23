<?php
namespace App\Http\Controllers;

use App\Models\Krs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KrsController extends Controller{
    public function index(Request $request){
        // return DB::table('mahasiswa')->get();
        return Krs::paginate();
    }

    public function find($id){
        return Krs::find($id);
    }

    public function create(Request $request){
        Krs::create($request->all());
        return ['message' => 'Krs berhasil ditambah :)'];
    }

    public function update(Request $request,$id){
        return Krs::where('idKrs',$id)->update($request->all());
    }

    public function delete($id){
        return Krs::where('id',$id)->delete();
    }
}