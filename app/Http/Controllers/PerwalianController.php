<?php
namespace App\Http\Controllers;

use App\Models\Perwalian;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PerwalianController extends Controller{
    public function index(Request $request){
        // return DB::table('mahasiswa')->get();
        return Perwalian::paginate();
    }

    public function find($id){
        return Perwalian::find($id);
    }

    public function create(Request $request){
        Perwalian::create($request->all());
        return ['message' => 'Perwalian berhasil ditambah :)'];
    }

    public function update(Request $request,$id){
        return Perwalian::where('id',$id)->update($request->all());
    }

    public function delete($id){
        return Perwalian::where('id',$id)->delete();
    }
}