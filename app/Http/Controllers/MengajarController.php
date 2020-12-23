<?php
namespace App\Http\Controllers;

use App\Models\Mengajar;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MengajarController extends Controller{
    public function index(Request $request){
        // return DB::table('Mengajar')->get();
        return Mengajar::paginate();
    }

    public function find($idkelas){
        return Mengajar::find($id);
    }

    public function create(Request $request){
        Mengajar::create($request->all());
        return ['message' => 'Mengajar berhasil ditambah :)'];
    }

    public function update(Request $request,$idkelas){
        return Mengajar::where('idkelas',$idkelas)->update($request->all());
    }

    public function delete($idkelas){
        return Mengajar::where('idkelas',$idkelas)->delete();
    }
}