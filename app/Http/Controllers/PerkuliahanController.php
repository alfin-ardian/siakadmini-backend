<?php
namespace App\Http\Controllers;

use App\Models\Perkuliahan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PerkuliahanController extends Controller{
    public function index(Request $request){
        // return DB::table('Transkip')->get();
        return Perkuliahan::paginate();
    }

    public function find($id){
        return Perkuliahan::find($id);
    }

    public function create(Request $request){
        Perkuliahan::create($request->all());
        return ['message' => 'Transkip berhasil ditambah :)'];
    }

    public function update(Request $request,$idruang){
        return Perkuliahan::where('idruang',$idruang)->update($request->all());
    }

    public function delete($idruang){
        return Perkuliahan::where('idruang',$idruang)->delete();
    }
}