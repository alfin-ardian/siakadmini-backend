<?php
namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PeriodeController extends Controller{
    public function index(Request $request){
        // return DB::table('mahasiswa')->get();
        return Periode::paginate();
    }

    public function find($id){
        return Periode::find($id);
    }

    public function create(Request $request){
        Periode::create($request->all());
        return ['message' => 'Periode berhasil ditambah :)'];
    }

    public function update(Request $request,$id){
        return Periode::where('idPeriode',$id)->update($request->all());
    }

    public function delete($id){
        return Periode::where('id',$id)->delete();
    }
}