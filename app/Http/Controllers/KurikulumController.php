<?php
namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KurikulumController extends Controller{
    public function index(Request $request){
        // return DB::table('mahasiswa')->get();
        return Kurikulum::paginate();
    }

    public function find($id){
        return Kurikulum::find($id);
    }

    public function create(Request $request){
        Kurikulum::create($request->all());
        return ['message' => 'Kurikulum berhasil ditambah :)'];
    }

    public function update(Request $request,$id){
        return Kurikulum::where('idKurikulum',$id)->update($request->all());
    }

    public function delete($id){
        return Kurikulum::where('id',$id)->delete();
    }
}