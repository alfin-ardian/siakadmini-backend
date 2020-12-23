<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Transkrip extends Model{
    protected $table = 'transkrip';
    protected $guarded = [];
    protected $primaryKey = 'idunit';


    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}