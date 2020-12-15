<?php
namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controllers{
    public function index(Request $request){
        return Mahasiswa::get();
    }

    public function find($id){
        return Mahasiswa::find($id);
    }

    public function create(Request $request){
        return Mahasiswa::create($request->all());
    }

    public function update(Request $request,$id){
        return Mahasiswa::where('id',$id)->update($request->all());
    }

    public function delete($id){
        return Mahasiswa::where('id',$id)->delete();
    }
}