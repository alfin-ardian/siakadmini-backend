<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model{
    protected $table = 'matakuliah';
    protected $guarded = [];
    protected $primaryKey = 'idmk';


    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}