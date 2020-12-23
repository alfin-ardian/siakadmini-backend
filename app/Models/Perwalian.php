<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Perwalian extends Model{
    protected $table = 'perwalian';
    protected $guarded = [];


    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}