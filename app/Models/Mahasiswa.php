<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model{
    protected $table = 'mahasiswa';
    protected $guarded = [];
    protected $primaryKey = 'nim';


    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}