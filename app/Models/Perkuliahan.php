<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Perkuliahan extends Model{
    protected $table = 'perkuliahan';
    protected $guarded = [];
    protected $primaryKey = 'idunit';


    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}