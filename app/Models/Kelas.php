<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model{
    protected $table = 'kelas';
    protected $primaryKey = 'idkelas';
    protected $guarded = [];


    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}