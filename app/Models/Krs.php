<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model{
    protected $table = 'krs';
    protected $guarded = [];


    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}