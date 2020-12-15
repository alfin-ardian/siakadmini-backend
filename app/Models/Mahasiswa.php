<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model{
    protected $tabel = 'siakad_mini.mahasiswa';
    protected $guarded = [];


    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}