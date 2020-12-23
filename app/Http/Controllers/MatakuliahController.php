<?php
namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MatakuliahController extends Controller{
    public function index(Request $request){
        // return DB::table('Matakuliah')->get();
        return Matakuliah::paginate();
    }

    public function find($id){
        return Matakuliah::find($id);
    }

    public function create(Request $request){
        Matakuliah::create($request->all());
        return ['message' => 'Matakuliah berhasil ditambah :)'];
    }

    public function update(Request $request,$id){
        return Matakuliah::where('idmk',$id)->update($request->all());
    }

    public function delete($id){
        return Matakuliah::where('idmk',$id)->delete();
    }
}