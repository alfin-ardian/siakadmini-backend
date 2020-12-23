<?php
namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UnitController extends Controller{
    public function index(Request $request){
        // return DB::table('mahasiswa')->get();
        return Unit::paginate();
    }

    public function find($id){
        return Unit::find($id);
    }

    public function create(Request $request){
        Unit::create($request->all());
        return ['message' => 'Unit berhasil ditambah :)'];
    }

    public function update(Request $request,$id){
        return Unit::where('idunit',$id)->update($request->all());
    }

    public function delete($id){
        return Unit::where('idunit',$id)->delete();
    }
}