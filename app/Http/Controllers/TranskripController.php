<?php
namespace App\Http\Controllers;

use App\Models\Transkrip;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TranskripController extends Controller{
    public function index(Request $request){
        // return DB::table('Transkip')->get();
        return Transkrip::paginate();
    }

    public function find($id){
        return Transkrip::find($id);
    }

    public function create(Request $request){
        Transkrip::create($request->all());
        return ['message' => 'Transkip berhasil ditambah :)'];
    }

    public function update(Request $request,$nangka){
        return Transkrip::where('nangka',$nangka)->update($request->all());
    }

    public function delete($idmk){
        return Transkrip::where('idmk',$idmk)->delete();
    }
}