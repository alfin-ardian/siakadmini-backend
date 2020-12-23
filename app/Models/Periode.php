<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class periode extends Model{
    protected $table = 'periode';
    protected $guarded = [];


    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}