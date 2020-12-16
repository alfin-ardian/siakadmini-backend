<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model{
    protected $table = 'mahasiswa';
    protected $guarded = [];


    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}